<?php

namespace Backtheweb\Flash;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider
{

    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->publishes([__DIR__.'/../config/flash.php' => config_path('flash.php')],                 'config');
        $this->publishes([__DIR__ . '/views'          => base_path('resources/views/vendor/flash')],'views' );

        $this->loadViewsFrom(__DIR__ . '/views', 'flash');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('Backtheweb\Flash\SessionStore');

        $this->app->singleton('flash', function () {
            return $this->app->make('Backtheweb\Flash\Notifier');
        });

    }

    public function provides()
    {
        return ['Backtheweb\Flash\Notifier', 'Flash'];
    }
}
