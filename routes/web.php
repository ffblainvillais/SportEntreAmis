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

//Route for home
Route::get('/', 'Application\IndexController@indexAction');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routes for users authenticated
Route::group(array('prefix' => 'user', 'middleware' => "auth"), function () {

});