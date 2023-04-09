<?php

namespace Atin\LaravelWelcomePage;

use Illuminate\Support\ServiceProvider;

class WelcomePageProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-welcome-page');
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-welcome-page');
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-welcome-page');
    }
}