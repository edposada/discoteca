<?php

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
Auth::routes();

Route::get('', 'IndexController@index');
Route::get('/productos', 'ProductosController@index');
Route::get('/home', 'HomeController@index')->name('home');

/*
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
*/
