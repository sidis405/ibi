<?php

#   contenuti ROUTES

    Route::get('modifiche-contenuti-sito', [
        'as'    => 'admin_modifiche',
        'uses'  => '\Ibi\Http\Controllers\Admin\ModificheController@index'
        ]);


    Route::get('modifiche-contenuti-sito/{id}', [
        'as'    => 'admin_show_modifiche',
        'uses'  => '\Ibi\Http\Controllers\Admin\ModificheController@show'
        ]);


    Route::put('modifiche-contenuti-sito/{id}/conferma', [
        'as'    => 'admin_conferma_modifiche',
        'uses'  => '\Ibi\Http\Controllers\Admin\ModificheController@conferma'
        ]);

    Route::delete('modifiche-contenuti-sito/{id}', [
        'as'    => 'admin_cancella_modifiche',
        'uses'  => '\Ibi\Http\Controllers\Admin\ModificheController@cancella'
        ]);




