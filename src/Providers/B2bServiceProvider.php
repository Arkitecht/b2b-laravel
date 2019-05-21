<?php

namespace Arkitecht\B2B\Laravel\Providers;

use Arkitecht\B2B\B2B;
use Arkitecht\B2B\B2BSoap;
use Illuminate\Support\ServiceProvider;

class B2bServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/b2b.php' => config_path('b2b.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/b2b.php', 'b2b');

        $this->app->singleton('b2b', function ($app) {
            return new B2B(config('b2b.api.auth'), config('b2b.api.scopes'), true, config('b2b.api.environment'));
        });

        $this->app->singleton('b2bsoap', function ($app) {
            return new B2BSoap(
                config('b2b.soap.service_code'),
                config('b2b.soap.username'),
                config('b2b.soap.password'),
                config('b2b.soap.vendor_code')
            );
        });

        $this->app->alias('b2b', B2B::class);
        $this->app->alias('b2bsoap', B2BSoap::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            B2B::class,
            B2BSoap::class
        ];
    }
}
