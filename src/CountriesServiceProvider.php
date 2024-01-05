<?php

namespace Nakanakaii\Countries;

use Illuminate\Support\ServiceProvider;

class CountriesServiceProvider extends ServiceProvider
{
    /**
     * Initializes the application during the booting process.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../assets/flags/' => public_path('vendor/countries/flags/')
        ], 'countries-flags');
    }

    /**
     * Register the service provider.
     *
     *  @return void
     */
    public function register()
    {
    }
}
