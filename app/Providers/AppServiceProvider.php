<?php

namespace App\Providers;

use Carbon\Carbon;
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
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        // Mengatur timezone default aplikasi
        date_default_timezone_set(config('app.timezone'));

        // Mengatur timezone Carbon secara global
        Carbon::now()->setTimezone(config('app.timezone'));
    }
}
