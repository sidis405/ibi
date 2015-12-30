<?php

#   Paesi ROUTES

    Route::get('paesi-export', [
        'as'    => 'admin_paesi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PaesiController@index'
        ]);

    Route::get('paesi-export/crea', [
        'as'    => 'admin_create_paesi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PaesiController@create'
        ]);

    Route::post('paesi-export', [
        'as'    => 'admin_store_paesi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PaesiController@store'
        ]);

    Route::get('paesi-export/{id}/modifica', [
        'as'    => 'admin_edit_paesi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PaesiController@edit'
        ]);

    Route::put('paesi-export/{id}', [
        'as'    => 'admin_store_paesi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PaesiController@update'
        ]);

    Route::delete('paesi-export/{id}', [
        'as'    => 'admin_delete_paesi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PaesiController@destroy'
        ]);