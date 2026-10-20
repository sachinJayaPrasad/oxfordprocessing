<?php

namespace Tests\Feature;

use App\Mail\EnquiryStatusMail;
use App\Models\Enquiry;
use App\Models\Service;
use App\Models\User;
use Database\Seeders\AdminUserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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

        $this->get('/admin')->assertOk()->assertSee('Oxford')->assertDontSee('Anju Susan Thomas');
        $this->get('/admin/services')->assertOk()->assertSee('Service Catalogue Management');
        $this->get('/admin/enquiries')->assertOk()->assertSee('Enquiries Management');

        $this->post('/admin/logout')->assertRedirect(route('admin.login'));
        $this->get('/admin')->assertRedirect(route('admin.login'));
    }

    public function test_admin_enquiries_table_is_paginated_and_page_size_is_adjustable(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.test',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        foreach (range(1, 23) as $index) {
            Enquiry::create([
                'name' => "Client {$index}",
                'phone' => "555-010{$index}",
                'email' => "client{$index}@example.test",
                'service_category' => 'Registration',
                'service_name' => 'Sample Service',
                'message' => "Enquiry message {$index}.",
                'status' => 'new',
            ]);
        }

        $this->actingAs($admin)
            ->get('/admin/enquiries?per_page=10')
            ->assertOk()
            ->assertSee('Showing 1–10 of 23 enquiries')
            ->assertSee('Client 23')
            ->assertSee('Client 22')
            ->assertDontSee('Client 13')
            ->assertSee('per_page=10');

        $this->actingAs($admin)
            ->get('/admin/enquiries?page=2&per_page=10')
            ->assertOk()
            ->assertSee('Showing 11–20 of 23 enquiries');

        $this->actingAs($admin)
            ->get('/admin/enquiries?per_page=50')
            ->assertOk()
            ->assertSee('Showing 1–23 of 23 enquiries');
    }

    public function test_public_enquiry_submission_is_saved_and_displayed_in_admin(): void
    {
        $service = Service::create([
            'slug' => 'sample-service',
            'title' => 'Sample Service',
            'category' => 'Registration',
            'authority' => 'Sample Authority',
            'summary' => 'Sample summary.',
            'requirements' => 'Sample requirements.',
            'is_published' => true,
        ]);

        $this->get('/contact-us')
            ->assertOk()
            ->assertDontSee('Anju Susan Thomas')
            ->assertSee('Sample Service')
            ->assertSee('name="name"', false);

        $this->post('/contact-us/enquiries', [
            'name' => 'Taylor Example',
            'phone' => '+1 555 0100',
            'email' => 'taylor@example.test',
            'service_category' => $service->category,
            'service_id' => $service->id,
            'message' => 'Please contact me about this service.',
            'privacy_consent' => '1',
        ])->assertRedirect(route('contact'));

        $this->assertDatabaseHas('enquiries', [
            'name' => 'Taylor Example',
            'email' => 'taylor@example.test',
            'service_category' => 'Registration',
            'service_name' => 'Sample Service',
            'status' => 'new',
        ]);

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.test',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        $this->actingAs($admin)
            ->get('/admin')
            ->assertOk()
            ->assertSee('Taylor Example')
            ->assertSee('Sample Service');

        $this->actingAs($admin)
            ->get('/admin/enquiries?search=Taylor')
            ->assertOk()
            ->assertSee('Taylor Example')
            ->assertSee('taylor@example.test')
            ->assertSee('Sample Service')
            ->assertSee('Profile Description')
            ->assertSee('Profile Details')
            ->assertSee('data-label="Profile Details"', false)
            ->assertDontSee('>Email</th>', false)
            ->assertDontSee('data-label="Email"', false)
            ->assertSee('aria-label="Enquiry submissions"', false)
            ->assertDontSee('overflow-x-auto', false)
            ->assertSee('data-description="Please contact me about this service."', false)
            ->assertSee('<table class="enquiry-table', false)
            ->assertSee('name="per_page"', false)
            ->assertSee('Received email')
            ->assertSee('Completed email');

        $enquiry = Enquiry::firstOrFail();
        $this->actingAs($admin)
            ->post("/admin/enquiries/{$enquiry->id}/email/received")
            ->assertRedirect()
            ->assertSessionHasErrors('email');

        Config::set('mail.default', 'smtp');
        Mail::fake();

        $this->actingAs($admin)
            ->patch("/admin/enquiries/{$enquiry->id}/status", ['status' => 'in_progress'])
            ->assertRedirect();

        $this->assertDatabaseHas('enquiries', [
            'id' => $enquiry->id,
            'status' => 'in_progress',
        ]);

        $this->actingAs($admin)
            ->post("/admin/enquiries/{$enquiry->id}/email/received")
            ->assertRedirect()
            ->assertSessionHas('email_sent', 'received');

        Mail::assertSent(EnquiryStatusMail::class, function ($mail) use ($enquiry) {
            return $mail->hasTo($enquiry->email)
                && $mail->subjectLine === 'We have received your enquiry'
                && str_contains($mail->messageBody, 'We will get back to you soon.');
        });

        $this->actingAs($admin)
            ->post("/admin/enquiries/{$enquiry->id}/email/processed")
            ->assertRedirect()
            ->assertSessionHas('email_sent', 'processed');

        Mail::assertSent(EnquiryStatusMail::class, function ($mail) use ($enquiry) {
            return $mail->hasTo($enquiry->email)
                && $mail->subjectLine === 'Your requested service has been processed'
                && str_contains($mail->messageBody, 'has been successfully processed.');
        });
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
