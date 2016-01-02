<?php

#   comunicati ROUTES

    Route::get('farmaco-vigilanza/comunicati', [
        'as'    => 'admin_comunicati',
        'uses'  => '\Ibi\Http\Controllers\Admin\ComunicatiController@index'
        ]);

    Route::get('farmaco-vigilanza/comunicati/crea', [
        'as'    => 'admin_create_comunicati',
        'uses'  => '\Ibi\Http\Controllers\Admin\ComunicatiController@create'
        ]);

    Route::post('farmaco-vigilanza/comunicati', [
        'as'    => 'admin_store_comunicati',
        'uses'  => '\Ibi\Http\Controllers\Admin\ComunicatiController@store'
        ]);

    Route::get('farmaco-vigilanza/comunicati/{id}/modifica', [
        'as'    => 'admin_edit_comunicati',
        'uses'  => '\Ibi\Http\Controllers\Admin\ComunicatiController@edit'
        ]);

    Route::put('farmaco-vigilanza/comunicati/{id}', [
        'as'    => 'admin_store_comunicati',
        'uses'  => '\Ibi\Http\Controllers\Admin\ComunicatiController@update'
        ]);

    Route::delete('farmaco-vigilanza/comunicati/{id}', [
        'as'    => 'admin_delete_comunicati',
        'uses'  => '\Ibi\Http\Controllers\Admin\ComunicatiController@destroy'
        ]);
