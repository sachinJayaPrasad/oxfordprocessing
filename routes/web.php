<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/services', 'services')->name('services');
Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('service.detail');
Route::redirect('/service-detail', '/service/nmbi-decision-letter-dl-process', 301);
Route::view('/contact-us', 'contact-us')->name('contact');
