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
    	// $this->commands([\janole\Demo\DemoCommand::class]);

    	// $this->loadRoutesFrom(__DIR__.'/../src/routes.php');

    	// $this->loadViewsFrom(__DIR__.'/../resources/views', 'demo-views');
    }
}
