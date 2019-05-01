<?php

namespace janole\Demo;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // $configPath = __DIR__.'/../config/demo.php';
        // $this->mergeConfigFrom($configPath, 'demo');
    }

    public function boot()
    {
        // Register an artisan command ... (php artisan demo:command)
        $this->commands([\janole\Demo\Console\Commands\DemoCommand::class]);

        // Register some demo routes
        $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');

        // Register some demo views
        // (use them with the corresponding prefix like: @include("demo-views::the-view-name"))
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'demo-views');
    }
}
