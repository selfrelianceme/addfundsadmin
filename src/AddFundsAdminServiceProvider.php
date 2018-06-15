<?php

namespace Selfreliance\AddFundsAdmin;

use Illuminate\Support\ServiceProvider;

class AddFundsAdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
        $this->app->make('Selfreliance\AddFundsAdmin\AddFundsAdminController');
        $this->loadViewsFrom(__DIR__.'/views', 'addfundsadmin');

        $this->publishes([
            __DIR__.'/public/' => public_path('vendor/addfundsadmin'),
        ], 'assets');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}