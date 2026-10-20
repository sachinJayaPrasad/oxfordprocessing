<?php

use App\Http\Controllers\AdminWebAuthController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/services', 'services')->name('services');
Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('service.detail');
Route::redirect('/service-detail', '/service/nmbi-decision-letter-dl-process', 301);
Route::view('/contact-us', 'contact-us')->name('contact');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminWebAuthController::class, 'create'])->name('login');
    Route::post('/login', [AdminWebAuthController::class, 'store'])
        ->middleware('throttle:5,1')
        ->name('login.store');

    Route::middleware('admin')->group(function () {
        Route::get('/', fn () => view('admin.dashboard'))->name('dashboard');
        Route::view('/services', 'admin.services-admin')->name('services');
        Route::view('/enquiries', 'admin.enquiries')->name('enquiries');
        Route::post('/logout', [AdminWebAuthController::class, 'destroy'])->name('logout');
    });
});
