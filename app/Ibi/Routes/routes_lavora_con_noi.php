<?php

#   lavora-con-noi ROUTES

    Route::get('lavora-con-noi/candidature', [
        'as'    => 'admin_candidature',
        'uses'  => '\Ibi\Http\Controllers\Admin\CandidatureController@index'
        ]);

    Route::get('lavora-con-noi/candidature/crea', [
        'as'    => 'admin_create_candidature',
        'uses'  => '\Ibi\Http\Controllers\Admin\CandidatureController@create'
        ]);

    Route::post('lavora-con-noi/candidature', [
        'as'    => 'admin_store_candidature',
        'uses'  => '\Ibi\Http\Controllers\Admin\CandidatureController@store'
        ]);

    Route::get('lavora-con-noi/candidature/{type}/{path}', [
        'as'    => 'admin_attachments_candidature',
        'uses'  => '\Ibi\Http\Controllers\Admin\AllegatiController@show'
        ]);

    Route::get('lavora-con-noi/candidature/{id}', [
        'as'    => 'admin_edit_candidature',
        'uses'  => '\Ibi\Http\Controllers\Admin\CandidatureController@show'
        ]);

    Route::put('lavora-con-noi/candidature/{id}', [
        'as'    => 'admin_store_candidature',
        'uses'  => '\Ibi\Http\Controllers\Admin\CandidatureController@update'
        ]);

    Route::delete('lavora-con-noi/candidature/{id}', [
        'as'    => 'admin_delete_candidature',
        'uses'  => '\Ibi\Http\Controllers\Admin\CandidatureController@destroy'
        ]);




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
