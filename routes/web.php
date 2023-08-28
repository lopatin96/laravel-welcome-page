<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::get('/', [\Atin\LaravelWelcomePage\Http\Controllers\WelcomePageController::class, 'index'])
        ->name('home');
});