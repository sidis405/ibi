<?php

#   lavora-con-noi ROUTES

    Route::get('lavora-con-noi', [
        'as'    => 'admin_lavora_con_noi',
        'uses'  => '\Ibi\Http\Controllers\Admin\LavoraConNoiController@index'
        ]);

    Route::get('lavora-con-noi/crea', [
        'as'    => 'admin_create_lavora_con_noi',
        'uses'  => '\Ibi\Http\Controllers\Admin\LavoraConNoiController@create'
        ]);

    Route::post('lavora-con-noi', [
        'as'    => 'admin_store_lavora_con_noi',
        'uses'  => '\Ibi\Http\Controllers\Admin\LavoraConNoiController@store'
        ]);

    Route::get('lavora-con-noi/{id}/modifica', [
        'as'    => 'admin_edit_lavora_con_noi',
        'uses'  => '\Ibi\Http\Controllers\Admin\LavoraConNoiController@edit'
        ]);

    Route::put('lavora-con-noi/{id}', [
        'as'    => 'admin_store_lavora_con_noi',
        'uses'  => '\Ibi\Http\Controllers\Admin\LavoraConNoiController@update'
        ]);

    Route::delete('lavora-con-noi/{id}', [
        'as'    => 'admin_delete_lavora_con_noi',
        'uses'  => '\Ibi\Http\Controllers\Admin\LavoraConNoiController@destroy'
        ]);
