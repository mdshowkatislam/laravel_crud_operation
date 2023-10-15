<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
// use App\Http\Controllers\LogoutController;
// use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@show')->name('login');



Auth::routes();

Route::get('/logout', 'LogoutController@perform')->name('logOut');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('delete');
Route::get('/view/{id}', [App\Http\Controllers\HomeController::class, 'view'])->name('view');


//User
Route::prefix('user')->group(function () {

    Route::get('/user/status/', 'UserController@userStatus')->name('user.status.change');
});

Route::post('/data/statuschange', 'Backend\DefaultController@statusChange')->name('table.status.change');



// Route::group(['namespace' => 'App\Http\Controllers'], function()
// {
//     /**
//      * Home Routes
//      */
//     Route::get('/', 'HomeController@index')->name('home.index');

//     Route::group(['middleware' => ['guest']], function() {
//         /**
//          * Register Routes
//          */
//         Route::get('/register', 'RegisterController@show')->name('register.show');
//         Route::post('/register', 'RegisterController@register')->name('register.perform');

//         /**
//          * Login Routes
//          */
//         // Route::get('/login', 'App\Http\Controllers\Auth\LoginController@show')->name('login');
//         // Route::post('/login', 'LoginController@login')->name('login.perform');

//     });

//     Route::group(['middleware' => ['auth']], function() {
//         /**
//          * Logout Routes
//          */
        // Route::get('/logout', 'LogoutController@perform')->name('logOut');
//     });
// });
