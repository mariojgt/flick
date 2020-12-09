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
        $this->loadViewsFrom(__DIR__.'/views', 'flick');
        // load onix routes
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
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
        //publish the npm case we need to do soem developent
        // $this->publishes([
        //     __DIR__.'/../Publish/Npm/' => base_path()
        // ]);

        // publish the resource in case we need to compile
        // $this->publishes([
        //     __DIR__.'/../Publish/Resource/' => resource_path('vendor/Flick/')
        // ]);

        // publish the public folder
        $this->publishes([
            __DIR__.'/../Publish/' => public_path('vendor/Flick/')
        ]);
    }
}
