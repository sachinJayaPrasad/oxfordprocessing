<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminEnquiriesController;
use App\Http\Controllers\AdminWebAuthController;
use App\Http\Controllers\PublicEnquiryController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/services', 'services')->name('services');
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
        Route::view('/services', 'admin.services-admin')->name('services');
        Route::get('/enquiries', [AdminEnquiriesController::class, 'index'])->name('enquiries');
        Route::patch('/enquiries/{enquiry}/status', [AdminEnquiriesController::class, 'updateStatus'])
            ->name('enquiries.status');
        Route::post('/enquiries/{enquiry}/email/{type}', [AdminEnquiriesController::class, 'sendEmail'])
            ->whereIn('type', ['received', 'processed'])
            ->name('enquiries.email');
        Route::post('/logout', [AdminWebAuthController::class, 'destroy'])->name('logout');
    });
});
