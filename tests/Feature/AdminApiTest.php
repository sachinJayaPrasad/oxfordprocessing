<?php

namespace Tests\Feature;

use App\Mail\EnquiryStatusMail;
use App\Models\Enquiry;
use App\Models\Service;
use App\Models\ServiceCategory;
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

    public function test_enquiry_factory_creates_realistic_records_with_and_without_catalog_services(): void
    {
        ServiceCategory::create(['name' => 'Registration']);
        $service = Service::create([
            'slug' => 'factory-service',
            'title' => 'Factory Service',
            'category' => 'Registration',
            'authority' => 'Example Authority',
            'summary' => 'Example summary.',
            'requirements' => 'Example requirements.',
            'is_published' => true,
        ]);

        $enquiry = Enquiry::factory()->create();

        $this->assertSame($service->category, $enquiry->service_category);
        $this->assertSame($service->title, $enquiry->service_name);
        $this->assertContains($enquiry->status, Enquiry::STATUSES);
        $this->assertNotEmpty($enquiry->message);

        Service::query()->delete();

        $fallbackEnquiry = Enquiry::factory()->create();

        $this->assertNotEmpty($fallbackEnquiry->service_category);
        $this->assertNotEmpty($fallbackEnquiry->service_name);
    }

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
        $this->get('/admin/services')->assertOk()->assertSee('Service Catalogue');
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
            ->assertSee('per_page=10')
            ->assertSee('aria-label="Enquiry pagination"', false)
            ->assertSee('Go to page 2')
            ->assertSee('Next');

        $this->actingAs($admin)
            ->get('/admin/enquiries?page=2&per_page=10')
            ->assertOk()
            ->assertSee('Showing 11–20 of 23 enquiries')
            ->assertSee('aria-current="page">2</span>', false)
            ->assertSee('per_page=10');

        $this->actingAs($admin)
            ->get('/admin/enquiries?per_page=50')
            ->assertOk()
            ->assertSee('Showing 1–23 of 23 enquiries');
    }

    public function test_public_enquiry_submission_is_saved_and_displayed_in_admin(): void
    {
        ServiceCategory::create(['name' => 'Registration']);
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
            ->assertSee('Sample Service')
            ->assertSee(route('admin.enquiries.show', Enquiry::firstOrFail()), false);

        $this->actingAs($admin)
            ->get(route('admin.enquiries.show', Enquiry::firstOrFail()))
            ->assertOk()
            ->assertSee('Website enquiry details')
            ->assertSee('Taylor Example')
            ->assertSee('taylor@example.test')
            ->assertSee('+1 555 0100')
            ->assertSee('Sample Service')
            ->assertSee('Registration')
            ->assertSee('Please contact me about this service.')
            ->assertSee('Update status')
            ->assertSee('Send received email')
            ->assertSee('Send completed email');

        $enquiry = Enquiry::firstOrFail();
        $this->actingAs($admin)
            ->get('/admin/enquiries?search=Taylor')
            ->assertOk()
            ->assertSee('Taylor Example')
            ->assertSee('taylor@example.test')
            ->assertSee('Sample Service')
            ->assertSee('Profile Details')
            ->assertSee('data-label="Profile Details"', false)
            ->assertDontSee('>Email</th>', false)
            ->assertDontSee('data-label="Email"', false)
            ->assertSee('aria-label="Enquiry submissions"', false)
            ->assertDontSee('overflow-x-auto', false)
            ->assertSee('href="'.route('admin.enquiries.show', $enquiry).'"', false)
            ->assertDontSee('descriptionModal')
            ->assertSee('<table class="enquiry-table', false)
            ->assertSee('name="per_page"', false)
            ->assertSee('Received email')
            ->assertSee('Completed email');

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
            ->assertRedirect(route('admin.enquiries.show', $enquiry))
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
        ServiceCategory::create(['name' => 'Registration']);

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

    public function test_admin_can_manage_service_categories_and_changes_are_used_across_the_site(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.test',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        $this->actingAs($admin)
            ->post('/admin/service-categories', ['name' => 'Clinical Services'])
            ->assertRedirect(route('admin.services'))
            ->assertSessionHas('category_saved', 'created');

        $category = ServiceCategory::where('name', 'Clinical Services')->firstOrFail();
        $service = Service::create([
            'slug' => 'clinical-registration',
            'title' => 'Clinical Registration',
            'category' => $category->name,
            'authority' => 'Example Authority',
            'summary' => 'Clinical service summary.',
            'requirements' => 'Clinical service requirements.',
            'is_published' => true,
        ]);

        $this->get('/')
            ->assertOk()
            ->assertSee('Clinical Services')
            ->assertSee('1 service');
        $this->get('/services?category=Clinical%20Services')
            ->assertOk()
            ->assertSee('Clinical Registration');
        $this->get('/contact-us')
            ->assertOk()
            ->assertSee('Clinical Services');

        $this->actingAs($admin)
            ->put("/admin/service-categories/{$category->id}", ['name' => 'Professional Registration'])
            ->assertRedirect(route('admin.services'))
            ->assertSessionHas('category_saved', 'updated');

        $this->assertDatabaseHas('services', [
            'id' => $service->id,
            'category' => 'Professional Registration',
        ]);
        $this->get('/services?category=Professional%20Registration')
            ->assertOk()
            ->assertSee('Clinical Registration');
        $this->get('/')
            ->assertOk()
            ->assertSee('Professional Registration')
            ->assertDontSee('Clinical Services');

        $this->followingRedirects()
            ->actingAs($admin)
            ->delete("/admin/service-categories/{$category->id}")
            ->assertOk()
            ->assertSee('Category deleted successfully. 1 related service deleted.');

        $this->assertDatabaseMissing('service_categories', ['id' => $category->id]);
        $this->assertDatabaseMissing('services', ['id' => $service->id]);
        $this->get('/service/clinical-registration')->assertNotFound();
    }

    public function test_category_delete_modal_warns_about_services_that_will_be_removed(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.test',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);
        $category = ServiceCategory::create(['name' => 'Documents']);
        Service::create([
            'slug' => 'document-check',
            'title' => 'Document Check',
            'category' => $category->name,
            'authority' => 'Example Authority',
            'summary' => 'Document checking service.',
            'requirements' => 'Required documents.',
            'is_published' => true,
        ]);

        $this->actingAs($admin)
            ->get('/admin/services')
            ->assertOk()
            ->assertSee('data-service-count="1"', false)
            ->assertSee('Delete category and services')
            ->assertSee('Deleting a category also permanently deletes all services assigned to it.');
    }

    public function test_admin_can_manage_web_services_and_public_catalogue_uses_published_data(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.test',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        $this->actingAs($admin)
            ->post('/admin/service-categories', ['name' => 'Registration'])
            ->assertRedirect(route('admin.services'))
            ->assertSessionHas('category_saved', 'created');
        $this->actingAs($admin)
            ->post('/admin/service-categories', ['name' => 'Education'])
            ->assertRedirect(route('admin.services'));

        $this->actingAs($admin)
            ->get('/admin/services')
            ->assertOk()
            ->assertSee('Add service')
            ->assertSee('All services');

        $this->actingAs($admin)
            ->get('/admin/services?status=&per_page=20')
            ->assertOk()
            ->assertSee('All statuses');

        $this->actingAs($admin)
            ->post('/admin/services', [
                'title' => 'Custom Published Service',
                'category' => 'Registration',
                'authority' => 'Example Authority',
                'summary' => 'A public service summary.',
                'requirements' => 'A valid document.',
                'is_published' => '1',
            ])
            ->assertRedirect(route('admin.services'))
            ->assertSessionHas('service_saved', 'created');

        $publishedService = Service::where('slug', 'custom-published-service')->firstOrFail();

        $this->get('/services?search=Custom')
            ->assertOk()
            ->assertSee('Custom Published Service')
            ->assertSee('A public service summary.');

        $this->get('/service/custom-published-service')
            ->assertOk()
            ->assertSee('A public service summary.');

        $this->actingAs($admin)
            ->get('/admin/services?edit='.$publishedService->id)
            ->assertOk()
            ->assertSee('Edit service')
            ->assertSee('Custom Published Service');

        $this->actingAs($admin)
            ->put("/admin/services/{$publishedService->id}", [
                'title' => 'Renamed Service',
                'category' => 'Education',
                'authority' => 'Updated Authority',
                'summary' => 'Updated service summary.',
                'requirements' => 'Updated requirements.',
            ])
            ->assertRedirect(route('admin.services'))
            ->assertSessionHas('service_saved', 'updated');

        $this->assertDatabaseHas('services', [
            'id' => $publishedService->id,
            'slug' => 'custom-published-service',
            'title' => 'Renamed Service',
            'is_published' => false,
        ]);

        $this->get('/services?category=Education')
            ->assertOk()
            ->assertDontSee('Renamed Service');
        $this->actingAs($admin)
            ->get('/admin/services?category=Education&status=draft')
            ->assertOk()
            ->assertSee('Renamed Service')
            ->assertSee('Draft');
        $this->get('/service/custom-published-service')->assertNotFound();
        $this->get('/contact-us')->assertDontSee('Renamed Service');

        $this->actingAs($admin)
            ->put("/admin/services/{$publishedService->id}", [
                'title' => 'Renamed Service',
                'category' => 'Education',
                'authority' => 'Updated Authority',
                'summary' => 'Updated service summary.',
                'requirements' => 'Updated requirements.',
                'is_published' => '1',
            ])
            ->assertRedirect(route('admin.services'));

        $this->get('/services?category=Education')
            ->assertOk()
            ->assertSee('Renamed Service');
        $this->get('/service/custom-published-service')
            ->assertOk()
            ->assertSee('Updated service summary.');

        $this->actingAs($admin)
            ->delete("/admin/services/{$publishedService->id}")
            ->assertRedirect(route('admin.services'))
            ->assertSessionHas('service_saved', 'deleted');

        $this->get('/service/custom-published-service')->assertNotFound();
        $this->get('/services?category=Education')
            ->assertOk()
            ->assertDontSee('Renamed Service');
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
