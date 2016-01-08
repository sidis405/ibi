<?php

#   listini ROUTES

    Route::get('prodotti/listini-prodotti', [
        'as'    => 'admin_listini',
        'uses'  => '\Ibi\Http\Controllers\Admin\ListiniController@index'
        ]);

    Route::get('prodotti/listini-prodotti/crea', [
        'as'    => 'admin_create_listini',
        'uses'  => '\Ibi\Http\Controllers\Admin\ListiniController@create'
        ]);

    Route::post('prodotti/listini-prodotti', [
        'as'    => 'admin_store_listini',
        'uses'  => '\Ibi\Http\Controllers\Admin\ListiniController@store'
        ]);

    Route::get('prodotti/listini-prodotti/{id}/modifica', [
        'as'    => 'admin_edit_listini',
        'uses'  => '\Ibi\Http\Controllers\Admin\ListiniController@edit'
        ]);

    Route::put('prodotti/listini-prodotti/{id}', [
        'as'    => 'admin_store_listini',
        'uses'  => '\Ibi\Http\Controllers\Admin\ListiniController@update'
        ]);

    Route::delete('prodotti/listini-prodotti/{id}', [
        'as'    => 'admin_delete_listini',
        'uses'  => '\Ibi\Http\Controllers\Admin\ListiniController@destroy'
        ]);
