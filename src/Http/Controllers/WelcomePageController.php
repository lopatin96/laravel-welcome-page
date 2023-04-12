<?php

namespace Atin\LaravelWelcomePage\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class WelcomePageController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }

        return view('laravel-welcome-page::welcome-page.index');
    }
}
