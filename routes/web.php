<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\Atin\LaravelWelcomePage\Http\Controllers\WelcomePageController::class, 'index'])
    ->name('home');