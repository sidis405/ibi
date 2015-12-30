<?php

#   principi-attivi ROUTES

    Route::get('principi-attivi', [
        'as'    => 'admin_principi-attivi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PrincipiAttiviController@index'
        ]);

    Route::get('principi-attivi/crea', [
        'as'    => 'admin_create_principi-attivi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PrincipiAttiviController@create'
        ]);

    Route::post('principi-attivi', [
        'as'    => 'admin_store_principi-attivi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PrincipiAttiviController@store'
        ]);

    Route::get('principi-attivi/{id}/modifica', [
        'as'    => 'admin_edit_principi-attivi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PrincipiAttiviController@edit'
        ]);

    Route::put('principi-attivi/{id}', [
        'as'    => 'admin_store_principi-attivi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PrincipiAttiviController@update'
        ]);

    Route::delete('principi-attivi/{id}', [
        'as'    => 'admin_delete_principi-attivi',
        'uses'  => '\Ibi\Http\Controllers\Admin\PrincipiAttiviController@destroy'
        ]);