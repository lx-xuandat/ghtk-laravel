<?php

namespace Datlx\Ghtk;

use Illuminate\Support\ServiceProvider;

class GHTKServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ghtk.php', 'ghtk');

        $this->app->singleton(GHTKService::class, function ($app) {
            return new GHTKService(config('ghtk'));
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/ghtk.php' => config_path('ghtk.php'),
        ], 'config');
    }
}
