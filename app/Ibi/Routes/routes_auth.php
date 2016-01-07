<?php

// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// // Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegisterIbi');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::post('area-riservata', 'Auth\AuthController@areaRiservataLogin');

Route::get('auth/conferma', 'Auth\AuthController@conferma');