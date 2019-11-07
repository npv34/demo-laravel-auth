<?php

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


use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function (){
    Route::get('/', function () {
        return view('welcome');
    });

    Route::prefix('users')->group(function (){
        Route::get('/','UserController@index')->name('user.index');
        Route::get('/create','UserController@create')->name('user.create');
        Route::get('/{id}/delete','UserController@destroy')->name('user.destroy');
        Route::post('store','UserController@store')->name('user.store');
    });

});

Route::get('login','LoginController@showFormLogin')->name('login');
Route::post('login','LoginController@login')->name('submit-login');
