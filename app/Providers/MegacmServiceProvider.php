<?php

namespace App\Providers;

use App\MegaCMManager;
use Illuminate\Support\ServiceProvider;

class MegacmServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('megacm', function () {
            return new MegaCMManager();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
