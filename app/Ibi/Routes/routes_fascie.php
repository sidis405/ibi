<?php

#   Fascie ROUTES

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