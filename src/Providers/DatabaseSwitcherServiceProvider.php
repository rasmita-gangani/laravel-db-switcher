<?php

namespace Rashmitagangani\DatabaseSwitcher\Providers;

use Illuminate\Support\ServiceProvider;
use Rashmitagangani\DatabaseSwitcher\DatabaseSwitcher;

class DatabaseSwitcherServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('db-switcher', function () {
            return new DatabaseSwitcher();
        });

        $this->mergeConfigFrom(__DIR__.'/../../config/db-switcher.php', 'db-switcher');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/db-switcher.php' => config_path('db-switcher.php'),
        ], 'config');
    }
}
