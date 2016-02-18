<?php

#   prodotti ROUTES

    Route::get('prodotti', [
        'as'    => 'admin_prodotti',
        'uses'  => '\Ibi\Http\Controllers\Admin\ProdottiController@index'
        ]);

    Route::get('prodotti/allegati/{type}/{path}', [
        'as'    => 'admin_attachments_prodotti',
        'uses'  => '\Ibi\Http\Controllers\Admin\AllegatiController@show'
        ]);

    Route::get('prodotti/crea', [
        'as'    => 'admin_create_prodotti',
        'uses'  => '\Ibi\Http\Controllers\Admin\ProdottiController@create'
        ]);

    Route::post('prodotti', [
        'as'    => 'admin_store_prodotti',
        'uses'  => '\Ibi\Http\Controllers\Admin\ProdottiController@store'
        ]);

    Route::get('prodotti/{id}/modifica', [
        'as'    => 'admin_edit_prodotti',
        'uses'  => '\Ibi\Http\Controllers\Admin\ProdottiController@edit'
        ]);

    Route::put('prodotti/{id}', [
        'as'    => 'admin_store_prodotti',
        'uses'  => '\Ibi\Http\Controllers\Admin\ProdottiController@update'
        ]);

    Route::delete('prodotti/{id}', [
        'as'    => 'admin_delete_prodotti',
        'uses'  => '\Ibi\Http\Controllers\Admin\ProdottiController@destroy'
        ]);

    Route::get('prodotti/{section}', [
        'as'    => 'admin_prodotti_sectopm',
        'uses'  => '\Ibi\Http\Controllers\Admin\ProdottiController@indexSection'
        ]);
