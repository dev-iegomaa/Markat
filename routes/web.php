<?php

use App\Http\Controllers\admin\AdminAboutController;
use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\AdminContactController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminSliderController;
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
            Route::get('/', 'index')->name('index');
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
            Route::get('create', 'create')->name('create');
            Route::post('insert', 'insert')->name('insert');
            Route::delete('delete', 'delete')->name('delete');
            Route::post('edit', 'edit')->name('edit');
            Route::put('update', 'update')->name('update');
        });
    });

    Route::group(['prefix' => 'slider', 'as' => 'slider.'], function () {
        Route::controller(AdminSliderController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('insert', 'insert')->name('insert');
            Route::delete('delete', 'delete')->name('delete');
            Route::post('edit', 'edit')->name('edit');
            Route::put('update', 'update')->name('update');
        });
    });
});

