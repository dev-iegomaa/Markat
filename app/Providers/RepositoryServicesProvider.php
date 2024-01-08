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

        $this->app->bind(
            'App\Http\Interfaces\admin\AdminAboutInterface',
            'App\Http\Repositories\admin\AdminAboutRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\admin\AdminSkillInterface',
            'App\Http\Repositories\admin\AdminSkillRepository'
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
            'App\Http\Interfaces\admin\AdminProvideInterface',
            'App\Http\Repositories\admin\AdminProvideRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\admin\AdminServiceInterface',
            'App\Http\Repositories\admin\AdminServiceRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\admin\AdminProvideServiceInterface',
            'App\Http\Repositories\admin\AdminProvideServiceRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\admin\AdminProjectInterface',
            'App\Http\Repositories\admin\AdminProjectRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\admin\AdminSettingInterface',
            'App\Http\Repositories\admin\AdminSettingRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\admin\AdminUserInterface',
            'App\Http\Repositories\admin\AdminUserRepository'
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
