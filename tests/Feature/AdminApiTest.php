<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\AdminUserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_web_pages_require_login_and_can_be_viewed_after_sign_in(): void
    {
        $this->get('/admin')->assertRedirect(route('admin.login'));
        $this->get('/admin/login')->assertOk()->assertSee('Admin sign in');

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.test',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        $this->post('/admin/login', [
            'email' => $admin->email,
            'password' => 'password',
        ])->assertRedirect(route('admin.dashboard'));

        $this->get('/admin')->assertOk()->assertSee('Oxford');
        $this->get('/admin/services')->assertOk()->assertSee('Service Catalogue Management');
        $this->get('/admin/enquiries')->assertOk()->assertSee('Enquiries Management');

        $this->post('/admin/logout')->assertRedirect(route('admin.login'));
        $this->get('/admin')->assertRedirect(route('admin.login'));
    }

    public function test_admin_authentication_and_access_control(): void
    {
        $this->getJson('/api/v1/admin/services')->assertUnauthorized();

        $regularUser = User::create([
            'name' => 'Regular User',
            'email' => 'user@example.test',
            'password' => Hash::make('password'),
        ]);

        $this->postJson('/api/v1/admin/login', [
            'email' => $regularUser->email,
            'password' => 'password',
        ])->assertForbidden();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.test',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        $loginResponse = $this->postJson('/api/v1/admin/login', [
            'email' => $admin->email,
            'password' => 'password',
        ])->assertOk()
            ->assertJsonPath('user.id', $admin->id);

        $token = $loginResponse->json('token');

        $this->withToken($token)->getJson('/api/v1/admin/me')
            ->assertOk()
            ->assertJsonPath('user.email', $admin->email);

        $this->withToken($token)->postJson('/api/v1/admin/logout')
            ->assertOk();

        $this->assertDatabaseMissing('personal_access_tokens', [
            'id' => explode('|', $token)[0],
        ]);
        $this->app['auth']->forgetGuards();

        $this->withToken($token)->getJson('/api/v1/admin/me')
            ->assertUnauthorized();
    }

    public function test_admin_seeder_uses_configured_environment_credentials(): void
    {
        Config::set([
            'admin.name' => 'Seeded Admin',
            'admin.email' => 'seeded-admin@example.test',
            'admin.password' => 'a-long-test-password',
        ]);

        $this->seed(AdminUserSeeder::class);

        $admin = User::where('email', 'seeded-admin@example.test')->firstOrFail();

        $this->assertTrue($admin->is_admin);
        $this->assertTrue(Hash::check('a-long-test-password', $admin->password));
    }

    public function test_admin_can_manage_services_and_public_service_pages_use_saved_data(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.test',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);
        $token = $admin->createToken('test')->plainTextToken;

        $createResponse = $this->withToken($token)->postJson('/api/v1/admin/services', [
            'title' => 'Custom Service',
            'category' => 'Registration',
            'authority' => 'Example Authority',
            'summary' => 'Summary created through the API.',
            'requirements' => 'A valid document.',
        ])->assertCreated()
            ->assertJsonPath('data.slug', 'custom-service');

        $serviceId = $createResponse->json('data.id');

        $this->getJson('/api/v1/admin/services')
            ->assertOk()
            ->assertJsonPath('data.0.id', $serviceId);

        $this->get('/service/custom-service')
            ->assertOk()
            ->assertSee('Summary created through the API.');

        $this->patchJson("/api/v1/admin/services/{$serviceId}", [
            'title' => 'Updated Service',
        ])->assertOk()
            ->assertJsonPath('data.slug', 'updated-service');

        $this->get('/service/custom-service')->assertNotFound();
        $this->get('/service/updated-service')->assertOk();

        $this->deleteJson("/api/v1/admin/services/{$serviceId}")
            ->assertNoContent();
    }

    public function test_admin_can_manage_and_filter_enquiries(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.test',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);
        $token = $admin->createToken('test')->plainTextToken;

        $createResponse = $this->withToken($token)->postJson('/api/v1/admin/enquiries', [
            'name' => 'A Client',
            'email' => 'client@example.test',
            'phone' => '+123456789',
            'service_category' => 'Registration',
            'service_name' => 'Custom Service',
            'message' => 'Please contact me.',
        ])->assertCreated()
            ->assertJsonPath('data.status', 'new');

        $enquiryId = $createResponse->json('data.id');

        $this->getJson('/api/v1/admin/enquiries?status=new&search=client')
            ->assertOk()
            ->assertJsonPath('data.0.id', $enquiryId);

        $this->patchJson("/api/v1/admin/enquiries/{$enquiryId}", [
            'status' => 'responded',
            'admin_notes' => 'Client contacted.',
        ])->assertOk()
            ->assertJsonPath('data.status', 'responded');

        $this->getJson('/api/v1/admin/enquiries?status=invalid')
            ->assertUnprocessable();

        $this->deleteJson("/api/v1/admin/enquiries/{$enquiryId}")
            ->assertNoContent();
    }
}
