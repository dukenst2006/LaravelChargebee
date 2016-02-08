<?php

namespace TijmenWierenga\LaravelChargebee;

use Illuminate\Support\ServiceProvider;

class LaravelChargebeeServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/config/chargebee.php' => config_path('chargebee.php'),
        ]);
    }
}