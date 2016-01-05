<?php

#   slider ROUTES

    Route::get('slider', [
        'as'    => 'admin_slider',
        'uses'  => '\Ibi\Http\Controllers\Admin\SliderController@index'
        ]);

    Route::get('slider/crea', [
        'as'    => 'admin_create_slider',
        'uses'  => '\Ibi\Http\Controllers\Admin\SliderController@create'
        ]);

    Route::post('slider', [
        'as'    => 'admin_store_slider',
        'uses'  => '\Ibi\Http\Controllers\Admin\SliderController@store'
        ]);

    Route::get('slider/{id}/modifica', [
        'as'    => 'admin_edit_slider',
        'uses'  => '\Ibi\Http\Controllers\Admin\SliderController@edit'
        ]);

    Route::put('slider/{id}', [
        'as'    => 'admin_store_slider',
        'uses'  => '\Ibi\Http\Controllers\Admin\SliderController@update'
        ]);

    Route::delete('slider/{id}', [
        'as'    => 'admin_delete_slider',
        'uses'  => '\Ibi\Http\Controllers\Admin\SliderController@destroy'
        ]);
