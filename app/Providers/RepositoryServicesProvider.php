<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Http\Interfaces\endUser\HomeInterface',
            'App\Http\Repositories\endUser\HomeRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\endUser\ContactInterface',
            'App\Http\Repositories\endUser\ContactRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
