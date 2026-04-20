<?php

namespace Modules\ProgrammaticSEO\Providers;

use Illuminate\Support\ServiceProvider;

class ProgrammaticSEOServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__.'/../Views', 'programmaticseo');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../Migrations');
    }
}

