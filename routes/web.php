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

//Routes for users authenticated
Route::group(array('prefix' => 'user', 'middleware' => "auth"), function () {
    Route::get('', 'User\IndexController@indexAction');
    Route::get('create-establishment', array('as' => 'creation-etablissement', 'uses' => 'User\IndexController@createEstablishmentPageAction'));
    Route::post('create-establishment', array('as' => 'creation-etablissement', 'uses' => 'User\IndexController@createEstablishmentAction'));
});