<?php

namespace Arkitecht\B2B\Laravel\Providers;

use Arkitecht\B2B\B2B;
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
            return new B2B(config('b2b.api.auth'), config('b2b.api.scopes'), true);
        });

        $this->app->alias('b2b', B2B::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [B2B::class];
    }
}
