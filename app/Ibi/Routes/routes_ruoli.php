<?php

#   ruoli ROUTES

    Route::get('utenti/ruoli', [
        'as'    => 'admin_ruoli',
        'uses'  => '\Ibi\Http\Controllers\Admin\RuoliController@index'
        ]);

    Route::get('utenti/ruoli/crea', [
        'as'    => 'admin_create_ruoli',
        'uses'  => '\Ibi\Http\Controllers\Admin\RuoliController@create'
        ]);

    Route::post('utenti/ruoli', [
        'as'    => 'admin_store_ruoli',
        'uses'  => '\Ibi\Http\Controllers\Admin\RuoliController@store'
        ]);

    Route::get('utenti/ruoli/{id}/modifica', [
        'as'    => 'admin_edit_ruoli',
        'uses'  => '\Ibi\Http\Controllers\Admin\RuoliController@edit'
        ]);

    Route::put('utenti/ruoli/{id}', [
        'as'    => 'admin_store_ruoli',
        'uses'  => '\Ibi\Http\Controllers\Admin\RuoliController@update'
        ]);

    Route::delete('utenti/ruoli/{id}', [
        'as'    => 'admin_delete_ruoli',
        'uses'  => '\Ibi\Http\Controllers\Admin\RuoliController@destroy'
        ]);
