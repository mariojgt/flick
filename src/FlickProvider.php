<?php

namespace Mariojgt\Flick;

use Illuminate\Support\ServiceProvider;

class FlickProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // load onix views
        $this->loadViewsFrom(__DIR__ . '/views', 'flick');
        // load onix routes
        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publish();
    }

    public function publish()
    {
        // publish the public folder
        $this->publishes([
            __DIR__ . '/../Publish/' => public_path('vendor/Flick/')
        ]);
    }
}
