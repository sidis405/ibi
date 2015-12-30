<?php

#   categorie-terapeutiche ROUTES

    Route::get('categorie-terapeutiche', [
        'as'    => 'admin_categorie-terapeutiche',
        'uses'  => '\Ibi\Http\Controllers\Admin\CategorieTerapeuticheController@index'
        ]);

    Route::get('categorie-terapeutiche/crea', [
        'as'    => 'admin_create_categorie-terapeutiche',
        'uses'  => '\Ibi\Http\Controllers\Admin\CategorieTerapeuticheController@create'
        ]);

    Route::post('categorie-terapeutiche', [
        'as'    => 'admin_store_categorie-terapeutiche',
        'uses'  => '\Ibi\Http\Controllers\Admin\CategorieTerapeuticheController@store'
        ]);

    Route::get('categorie-terapeutiche/{id}/modifica', [
        'as'    => 'admin_edit_categorie-terapeutiche',
        'uses'  => '\Ibi\Http\Controllers\Admin\CategorieTerapeuticheController@edit'
        ]);

    Route::put('categorie-terapeutiche/{id}', [
        'as'    => 'admin_store_categorie-terapeutiche',
        'uses'  => '\Ibi\Http\Controllers\Admin\CategorieTerapeuticheController@update'
        ]);

    Route::delete('categorie-terapeutiche/{id}', [
        'as'    => 'admin_delete_categorie-terapeutiche',
        'uses'  => '\Ibi\Http\Controllers\Admin\CategorieTerapeuticheController@destroy'
        ]);