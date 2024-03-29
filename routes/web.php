<?php

use App\Http\Controllers\admin\AdminAboutController;
use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminContactController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminProjectController;
use App\Http\Controllers\admin\AdminProvideController;
use App\Http\Controllers\admin\AdminProvideServiceController;
use App\Http\Controllers\admin\AdminServiceController;
use App\Http\Controllers\admin\AdminSettingController;
use App\Http\Controllers\admin\AdminSkillController;
use App\Http\Controllers\admin\AdminSliderController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\endUser\ContactController;
use App\Http\Controllers\endUser\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['as' => 'endUser.'], function () {

    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });

    Route::controller(ContactController::class)->group(function () {
        Route::post('contact', 'contact')->name('contact');
    });

});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
        Route::controller(AdminAuthController::class)->group(function () {
            Route::get('/', 'index')->name('index')->middleware('LoginRedirect');
            Route::post('login', 'login')->name('login');
        });
    });

});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

    Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
        Route::controller(AdminAuthController::class)->group(function () {
            Route::post('logout', 'logout')->name('logout');
        });
    });

    Route::controller(AdminHomeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('edit', 'edit')->name('edit');
        Route::put('update', 'update')->name('update');
    });

    Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
        Route::controller(AdminContactController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('delete/{id}', 'delete')->name('delete');
        });
    });

    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::controller(AdminAboutController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create')->middleware('CreateAbout');
            Route::post('insert', 'insert')->name('insert');
            Route::delete('delete', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update', 'update')->name('update');
        });
    });

    Route::group(['prefix' => 'skill', 'as' => 'skill.'], function () {
        Route::controller(AdminSkillController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('insert', 'insert')->name('insert');
            Route::delete('delete', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update', 'update')->name('update');
        });
    });

    Route::group(['prefix' => 'slider', 'as' => 'slider.'], function () {
        Route::controller(AdminSliderController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create')->middleware('CreateSlider');
            Route::post('insert', 'insert')->name('insert');
            Route::delete('delete', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update', 'update')->name('update');
        });
    });

    Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
        Route::controller(AdminCategoryController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('insert', 'insert')->name('insert');
            Route::delete('delete', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update', 'update')->name('update');
        });
    });

    Route::group(['prefix' => 'provide', 'as' => 'provide.'], function () {
        Route::controller(AdminProvideController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('insert', 'insert')->name('insert');
            Route::delete('delete', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update', 'update')->name('update');
        });
    });

    Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
        Route::controller(AdminServiceController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('insert', 'insert')->name('insert');
            Route::delete('delete', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update', 'update')->name('update');
        });
    });

    Route::group(['prefix' => 'provide-service', 'as' => 'provide.service.'], function () {
        Route::controller(AdminProvideServiceController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('insert', 'insert')->name('insert');
            Route::delete('delete', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update', 'update')->name('update');
        });
    });

    Route::group(['prefix' => 'project', 'as' => 'project.'], function () {
        Route::controller(AdminProjectController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('insert', 'insert')->name('insert');
            Route::delete('delete', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update', 'update')->name('update');
        });
    });

    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
        Route::controller(AdminSettingController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create')->middleware('CreateSetting');
            Route::post('insert', 'insert')->name('insert');
            Route::delete('delete', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update', 'update')->name('update');
        });
    });

    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::controller(AdminUserController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('insert', 'insert')->name('insert');
            Route::delete('delete', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update', 'update')->name('update');
        });
    });
});
