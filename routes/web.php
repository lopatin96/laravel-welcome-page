<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\Atin\LaravelWelcomePage\Http\Controllers\WelcomeController::class, 'index'])
    ->name('home');