<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;





// Route::get('/', function () {
//     return view('welcome');
// });



Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

// Route::group(['namespace'=>'App\Http\Controllers'],function(){

//     Route::get('/',[HomeController::class,'index'])->name('home.index');

//     Route::group(['middleware' => ['guest']], function(){
//         Route::get('/register',[RegisterController::class,'show'])->name('register.show');
//         Route::post('/register',[RegisterController::class,'register'])->name('register.perform');

//         Route::get('/login',[LoginController::class,'show'])->name('login.show');
//         Route::post('/login',[LoginController::class,'login'])->name('login.perform');
//     });

//     Route::group(['middleware' => ['auth']], function(){
//         Route::get('logout',[LogoutController::class,'perform'])->name('logout.perform');
//     });
// });

