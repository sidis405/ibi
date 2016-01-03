<?php

#   contenuti ROUTES

    Route::get('contenuti', [
        'as'    => 'admin_contenuti',
        'uses'  => '\Ibi\Http\Controllers\Admin\ContenutiController@index'
        ]);

    Route::get('contenuti/crea', [
        'as'    => 'admin_create_contenuti',
        'uses'  => '\Ibi\Http\Controllers\Admin\ContenutiController@create'
        ]);

    Route::post('contenuti', [
        'as'    => 'admin_store_contenuti',
        'uses'  => '\Ibi\Http\Controllers\Admin\ContenutiController@store'
        ]);

    Route::get('contenuti/{id}/modifica', [
        'as'    => 'admin_edit_contenuti',
        'uses'  => '\Ibi\Http\Controllers\Admin\ContenutiController@edit'
        ]);

    Route::put('contenuti/{id}', [
        'as'    => 'admin_store_contenuti',
        'uses'  => '\Ibi\Http\Controllers\Admin\ContenutiController@update'
        ]);

    Route::delete('contenuti/{id}', [
        'as'    => 'admin_delete_contenuti',
        'uses'  => '\Ibi\Http\Controllers\Admin\ContenutiController@destroy'
        ]);
