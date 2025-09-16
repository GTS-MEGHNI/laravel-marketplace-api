<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Boot the necessary application services.
     *
     * Enforces strict mode on Eloquent models and restricts destructive database
     * commands in production environments.
     */
    public function boot(): void
    {
        Model::shouldBeStrict();
        DB::prohibitDestructiveCommands($this->app->isProduction());
        if ($this->app->isProduction()) {
            URL::forceScheme('https');
        }
    }
}
