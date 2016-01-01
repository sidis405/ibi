<?php

#   news ROUTES

    Route::get('news', [
        'as'    => 'admin_news',
        'uses'  => '\Ibi\Http\Controllers\Admin\NewsController@index'
        ]);

    Route::get('news/crea', [
        'as'    => 'admin_create_news',
        'uses'  => '\Ibi\Http\Controllers\Admin\NewsController@create'
        ]);

    Route::post('news', [
        'as'    => 'admin_store_news',
        'uses'  => '\Ibi\Http\Controllers\Admin\NewsController@store'
        ]);

    Route::get('news/{id}/modifica', [
        'as'    => 'admin_edit_news',
        'uses'  => '\Ibi\Http\Controllers\Admin\NewsController@edit'
        ]);

    Route::put('news/{id}', [
        'as'    => 'admin_store_news',
        'uses'  => '\Ibi\Http\Controllers\Admin\NewsController@update'
        ]);

    Route::delete('news/{id}', [
        'as'    => 'admin_delete_news',
        'uses'  => '\Ibi\Http\Controllers\Admin\NewsController@destroy'
        ]);
