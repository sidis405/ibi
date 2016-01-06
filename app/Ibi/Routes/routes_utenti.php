<?php

#   utenti ROUTES

    Route::get('utenti', [
        'as'    => 'admin_utenti',
        'uses'  => '\Ibi\Http\Controllers\Admin\InternalUsersController@index'
        ]);

    Route::get('utenti/crea', [
        'as'    => 'admin_create_utenti',
        'uses'  => '\Ibi\Http\Controllers\Admin\InternalUsersController@create'
        ]);

    Route::post('utenti', [
        'as'    => 'admin_store_utenti',
        'uses'  => '\Ibi\Http\Controllers\Admin\InternalUsersController@store'
        ]);

    Route::get('utenti/{id}/modifica', [
        'as'    => 'admin_edit_utenti',
        'uses'  => '\Ibi\Http\Controllers\Admin\InternalUsersController@edit'
        ]);

    Route::put('utenti/{id}', [
        'as'    => 'admin_store_utenti',
        'uses'  => '\Ibi\Http\Controllers\Admin\InternalUsersController@update'
        ]);

    Route::delete('utenti/{id}', [
        'as'    => 'admin_delete_utenti',
        'uses'  => '\Ibi\Http\Controllers\Admin\InternalUsersController@destroy'
        ]);

    #   medici-farmacisti ROUTES

    Route::get('medici-farmacisti', [
        'as'    => 'admin_m_f',
        'uses'  => '\Ibi\Http\Controllers\Admin\ExternalUsersController@index'
        ]);

    Route::get('medici-farmacisti/{id}', [
        'as'    => 'admin_show_m_f',
        'uses'  => '\Ibi\Http\Controllers\Admin\ExternalUsersController@show'
        ]);

    Route::put('medici-farmacisti/{id}', [
        'as'    => 'admin_store_m_f',
        'uses'  => '\Ibi\Http\Controllers\Admin\ExternalUsersController@update'
        ]);

    Route::delete('medici-farmacisti/{id}', [
        'as'    => 'admin_delete_m_f',
        'uses'  => '\Ibi\Http\Controllers\Admin\ExternalUsersController@destroy'
        ]);


