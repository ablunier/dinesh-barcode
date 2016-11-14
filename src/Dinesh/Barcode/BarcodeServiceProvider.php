<?php

namespace Dinesh\Barcode;

use Illuminate\Support\ServiceProvider;

class BarcodeServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('DNS1D', function ($app) {
            return new DNS1D;
        });

        $this->app->bind('DNS2D', function ($app) {
            return new DNS2D;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return array("DNS1D", "DNS2D");
    }

}
