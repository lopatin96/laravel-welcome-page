<?php

use Illuminate\Support\Facades\Route;

Route::domain(env('APP_URL'))->middleware(['web'])->group(function () {
    Route::get('/', [\Atin\LaravelWelcomePage\Http\Controllers\WelcomePageController::class, 'index'])
        ->name('home');
});