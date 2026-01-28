<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Tambahkan baris ini di bawah
use Illuminate\Support\Facades\URL;

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
        /** * Memaksa Laravel menggunakan HTTPS saat di server Railway
         * Ini akan memperbaiki tampilan yang "jelek" karena CSS terblokir
         */
        if (config('app.env') !== 'local') {
            URL::forceScheme('https');
        }
    }
}