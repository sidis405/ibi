<?php

#   pagine ROUTES

    Route::get('pagine', [
        'as'    => 'admin_pages',
        'uses'  => '\Ibi\Http\Controllers\Admin\PagineController@index'
        ]);

    Route::get('pagine/crea', [
        'as'    => 'admin_create_pages',
        'uses'  => '\Ibi\Http\Controllers\Admin\PagineController@create'
        ]);

    Route::post('pagine', [
        'as'    => 'admin_store_pages',
        'uses'  => '\Ibi\Http\Controllers\Admin\PagineController@store'
        ]);

    Route::get('pagine/{id}/modifica', [
        'as'    => 'admin_edit_pages',
        'uses'  => '\Ibi\Http\Controllers\Admin\PagineController@edit'
        ]);

    Route::put('pagine/{id}', [
        'as'    => 'admin_store_pages',
        'uses'  => '\Ibi\Http\Controllers\Admin\PagineController@update'
        ]);

    Route::delete('pagine/{id}', [
        'as'    => 'admin_delete_pages',
        'uses'  => '\Ibi\Http\Controllers\Admin\PagineController@destroy'
        ]);
