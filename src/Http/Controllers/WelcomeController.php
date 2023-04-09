<?php

namespace Atin\LaravelWelcomePage\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }

        return view('laravel-blog::welcome.index');
    }
}
