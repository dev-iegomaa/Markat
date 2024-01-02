<?php

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




