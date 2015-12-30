<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('static.index');
});

Route::get('home', 'HomeController@home');
Route::get('pull', 'HomeController@pull');

// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// // Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(array('prefix' => 'admin', 'middleware' => 'auth'), function () {

    Route::get('/', '\Ibi\Http\Controllers\Admin\HomeController@index');

    #   news ROUTES

    Route::get('fascie', [
        'as'    => 'admin_fascie',
        'uses'  => '\Ibi\Http\Controllers\Admin\FascieController@index'
        ]);

    Route::get('fascie/crea', [
        'as'    => 'admin_create_fascie',
        'uses'  => '\Ibi\Http\Controllers\Admin\FascieController@create'
        ]);

    Route::post('fascie', [
        'as'    => 'admin_store_fascie',
        'uses'  => '\Ibi\Http\Controllers\Admin\FascieController@store'
        ]);

    Route::get('fascie/{id}/modifica', [
        'as'    => 'admin_edit_fascie',
        'uses'  => '\Ibi\Http\Controllers\Admin\FascieController@edit'
        ]);

    Route::put('fascie/{id}', [
        'as'    => 'admin_store_fascie',
        'uses'  => '\Ibi\Http\Controllers\Admin\FascieController@update'
        ]);

    Route::delete('fascie/{id}', [
        'as'    => 'admin_delete_fascie',
        'uses'  => '\Ibi\Http\Controllers\Admin\FascieController@destroy'
        ]);

});

Route::get('{view}', function ($view) {
    try {
      return view('static.'.$view);
    } catch (\Exception $e) {
      abort(404);
    }
  })->where('view', '.*');
