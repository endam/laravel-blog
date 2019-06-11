<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app['request']->server->set('HTTPS','on');
        \URL::forceScheme('https');
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
