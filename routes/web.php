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
    Route::get('users','UserController@index')->name('user.index');

    Route::get('users/create','UserController@create')->name('user.create');

});

Route::get('login','LoginController@showFormLogin')->name('login');
Route::post('login','LoginController@login')->name('submit-login');
Route::get('create','LoginController@create')->name('create');
