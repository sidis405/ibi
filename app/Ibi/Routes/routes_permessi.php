<?php

#   permessi ROUTES

    Route::get('utenti/permessi', [
        'as'    => 'admin_permessi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PermessiController@index'
        ]);

    Route::get('utenti/permessi/crea', [
        'as'    => 'admin_create_permessi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PermessiController@create'
        ]);

    Route::post('utenti/permessi', [
        'as'    => 'admin_store_permessi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PermessiController@store'
        ]);

    Route::get('utenti/permessi/{id}/modifica', [
        'as'    => 'admin_edit_permessi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PermessiController@edit'
        ]);

    Route::put('utenti/permessi/{id}', [
        'as'    => 'admin_store_permessi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PermessiController@update'
        ]);

    Route::delete('utenti/permessi/{id}', [
        'as'    => 'admin_delete_permessi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PermessiController@destroy'
        ]);
