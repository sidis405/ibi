<?php

#   schede ROUTES

    Route::get('farmaco-vigilanza/schede', [
        'as'    => 'admin_schede',
        'uses'  => '\Ibi\Http\Controllers\Admin\SchedeController@index'
        ]);

    Route::get('farmaco-vigilanza/schede/crea', [
        'as'    => 'admin_create_schede',
        'uses'  => '\Ibi\Http\Controllers\Admin\SchedeController@create'
        ]);

    Route::post('farmaco-vigilanza/schede', [
        'as'    => 'admin_store_schede',
        'uses'  => '\Ibi\Http\Controllers\Admin\SchedeController@store'
        ]);

    Route::get('farmaco-vigilanza/schede/{id}/modifica', [
        'as'    => 'admin_edit_schede',
        'uses'  => '\Ibi\Http\Controllers\Admin\SchedeController@edit'
        ]);

    Route::put('farmaco-vigilanza/schede/{id}', [
        'as'    => 'admin_store_schede',
        'uses'  => '\Ibi\Http\Controllers\Admin\SchedeController@update'
        ]);

    Route::delete('farmaco-vigilanza/schede/{id}', [
        'as'    => 'admin_delete_schede',
        'uses'  => '\Ibi\Http\Controllers\Admin\SchedeController@destroy'
        ]);
