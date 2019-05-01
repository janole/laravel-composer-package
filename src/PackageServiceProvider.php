<?php

namespace janole\Demo;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // $configPath = __DIR__.'/../config/demo.php';
        // $this->mergeConfigFrom($configPath, 'lcs');
    }

    public function boot()
    {
        // Register an artisan command ...
        $this->commands([\janole\Demo\Console\Commands\DemoCommand::class]);

        // $this->loadRoutesFrom(__DIR__.'/../src/routes.php');

    	// $this->loadViewsFrom(__DIR__.'/../resources/views', 'demo-views');
    }
}
