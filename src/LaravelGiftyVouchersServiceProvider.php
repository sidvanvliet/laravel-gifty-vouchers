<?php

namespace Sidvanvliet\LaravelGiftyVouchers;

use Illuminate\Support\ServiceProvider;

class LaravelGiftyVouchersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('laravel-gifty-vouchers', function () {
            return new LaravelGiftyVouchers;
        });
    }
}
