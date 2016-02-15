<?php

#   schede ROUTES

    Route::get('trasferimenti-di-valore', [
        'as'    => 'admin_schede',
        'uses'  => '\Ibi\Http\Controllers\Admin\TdvController@index'
        ]);

    Route::get('trasferimenti-di-valore/crea', [
        'as'    => 'admin_create_schede',
        'uses'  => '\Ibi\Http\Controllers\Admin\TdvController@create'
        ]);

    Route::post('trasferimenti-di-valore', [
        'as'    => 'admin_store_schede',
        'uses'  => '\Ibi\Http\Controllers\Admin\TdvController@store'
        ]);

    Route::get('trasferimenti-di-valore/{id}/modifica', [
        'as'    => 'admin_edit_schede',
        'uses'  => '\Ibi\Http\Controllers\Admin\TdvController@edit'
        ]);

    Route::put('trasferimenti-di-valore/{id}', [
        'as'    => 'admin_store_schede',
        'uses'  => '\Ibi\Http\Controllers\Admin\TdvController@update'
        ]);

    Route::delete('trasferimenti-di-valore/{id}', [
        'as'    => 'admin_delete_schede',
        'uses'  => '\Ibi\Http\Controllers\Admin\TdvController@destroy'
        ]);
