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
        /**
         *****************************************
         ************** EndUser Bind *************
         *****************************************
         */
        $this->app->bind(
            'App\Http\Interfaces\endUser\HomeInterface',
            'App\Http\Repositories\endUser\HomeRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\admin\AdminAboutInterface',
            'App\Http\Repositories\admin\AdminAboutRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\admin\AdminSliderInterface',
            'App\Http\Repositories\admin\AdminSliderRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\admin\AdminCategoryInterface',
            'App\Http\Repositories\admin\AdminCategoryRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\endUser\ContactInterface',
            'App\Http\Repositories\endUser\ContactRepository'
        );



        /**
         *****************************************
         *************** Admin Bind **************
         *****************************************
         */
        $this->app->bind(
            'App\Http\Interfaces\admin\AdminAuthInterface',
            'App\Http\Repositories\admin\AdminAuthRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\admin\AdminContactInterface',
            'App\Http\Repositories\admin\AdminContactRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\admin\AdminHomeInterface',
            'App\Http\Repositories\admin\AdminHomeRepository'
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
