<?php

use Illuminate\Support\Facades\Route;

// Index
Route::get('/', [\Atin\LaravelWelcomePage\Http\Controllers\WelcomeController::class, 'index'])
    ->name('home');