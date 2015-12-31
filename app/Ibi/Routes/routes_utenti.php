<?php

#   utenti ROUTES

    Route::get('utenti', [
        'as'    => 'admin_utenti',
        'uses'  => '\Ibi\Http\Controllers\Admin\UsersController@index'
        ]);

    Route::get('utenti/crea', [
        'as'    => 'admin_create_utenti',
        'uses'  => '\Ibi\Http\Controllers\Admin\UsersController@create'
        ]);

    Route::post('utenti', [
        'as'    => 'admin_store_utenti',
        'uses'  => '\Ibi\Http\Controllers\Admin\UsersController@store'
        ]);

    Route::get('utenti/{id}/modifica', [
        'as'    => 'admin_edit_utenti',
        'uses'  => '\Ibi\Http\Controllers\Admin\UsersController@edit'
        ]);

    Route::put('utenti/{id}', [
        'as'    => 'admin_store_utenti',
        'uses'  => '\Ibi\Http\Controllers\Admin\UsersController@update'
        ]);

    Route::delete('utenti/{id}', [
        'as'    => 'admin_delete_utenti',
        'uses'  => '\Ibi\Http\Controllers\Admin\UsersController@destroy'
        ]);
