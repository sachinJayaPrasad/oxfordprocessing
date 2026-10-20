<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminEnquiriesController;
use App\Http\Controllers\AdminServiceCategoriesController;
use App\Http\Controllers\AdminServicesController;
use App\Http\Controllers\AdminTestimonialsController;
use App\Http\Controllers\AdminWebAuthController;
use App\Http\Controllers\PublicEnquiryController;
use App\Http\Controllers\ServiceController;
use App\Models\ServiceCategory;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'categories' => ServiceCategory::query()
            ->whereHas('services', fn ($query) => $query->where('is_published', true))
            ->withCount(['services' => fn ($query) => $query->where('is_published', true)])
            ->orderBy('name')
            ->get(),
        'testimonials' => Testimonial::query()
            ->where('is_published', true)
            ->latest()
            ->get(),
    ]);
})->name('home');

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('service.detail');
Route::redirect('/service-detail', '/service/nmbi-decision-letter-dl-process', 301);
Route::get('/contact-us', [PublicEnquiryController::class, 'create'])->name('contact');
Route::post('/contact-us/enquiries', [PublicEnquiryController::class, 'store'])->name('contact.enquiries.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminWebAuthController::class, 'create'])->name('login');
    Route::post('/login', [AdminWebAuthController::class, 'store'])
        ->middleware('throttle:5,1')
        ->name('login.store');

    Route::middleware('admin')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/services', [AdminServicesController::class, 'index'])->name('services');
        Route::post('/services', [AdminServicesController::class, 'store'])->name('services.store');
        Route::put('/services/{service}', [AdminServicesController::class, 'update'])->name('services.update');
        Route::delete('/services/{service}', [AdminServicesController::class, 'destroy'])->name('services.destroy');
        Route::post('/service-categories', [AdminServiceCategoriesController::class, 'store'])->name('service-categories.store');
        Route::put('/service-categories/{serviceCategory}', [AdminServiceCategoriesController::class, 'update'])->name('service-categories.update');
        Route::delete('/service-categories/{serviceCategory}', [AdminServiceCategoriesController::class, 'destroy'])->name('service-categories.destroy');
        Route::get('/testimonials', [AdminTestimonialsController::class, 'index'])->name('testimonials');
        Route::post('/testimonials', [AdminTestimonialsController::class, 'store'])->name('testimonials.store');
        Route::put('/testimonials/{testimonial}', [AdminTestimonialsController::class, 'update'])->name('testimonials.update');
        Route::delete('/testimonials/{testimonial}', [AdminTestimonialsController::class, 'destroy'])->name('testimonials.destroy');
        Route::get('/enquiries', [AdminEnquiriesController::class, 'index'])->name('enquiries');
        Route::get('/enquiries/{enquiry}', [AdminEnquiriesController::class, 'show'])->name('enquiries.show');
        Route::patch('/enquiries/{enquiry}/status', [AdminEnquiriesController::class, 'updateStatus'])
            ->name('enquiries.status');
        Route::post('/enquiries/{enquiry}/email/{type}', [AdminEnquiriesController::class, 'sendEmail'])
            ->whereIn('type', ['received', 'processed'])
            ->name('enquiries.email');
        Route::post('/logout', [AdminWebAuthController::class, 'destroy'])->name('logout');
    });
});
