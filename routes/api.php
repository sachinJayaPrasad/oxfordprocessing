<?php

use App\Http\Controllers\Api\Admin\AuthController;
use App\Http\Controllers\Api\Admin\EnquiryController;
use App\Http\Controllers\Api\Admin\ServiceController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1/admin')->name('api.admin.')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])
        ->middleware('throttle:5,1')
        ->name('login');

    Route::middleware(['auth:sanctum', 'admin'])->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/me', [AuthController::class, 'me'])->name('me');
        Route::apiResource('services', ServiceController::class);
        Route::apiResource('enquiries', EnquiryController::class);
    });
});
