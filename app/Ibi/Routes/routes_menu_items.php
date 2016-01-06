<?php

#   menu_item ROUTES

    Route::get('voci-menu', [
        'as'    => 'admin_menu_item',
        'uses'  => '\Ibi\Http\Controllers\Admin\MenuItemsController@index'
        ]);

    Route::get('voci-menu/crea', [
        'as'    => 'admin_create_menu_item',
        'uses'  => '\Ibi\Http\Controllers\Admin\MenuItemsController@create'
        ]);

    Route::post('voci-menu', [
        'as'    => 'admin_store_menu_item',
        'uses'  => '\Ibi\Http\Controllers\Admin\MenuItemsController@store'
        ]);

    Route::get('voci-menu/{id}/modifica', [
        'as'    => 'admin_edit_menu_item',
        'uses'  => '\Ibi\Http\Controllers\Admin\MenuItemsController@edit'
        ]);

    Route::put('voci-menu/{id}', [
        'as'    => 'admin_store_menu_item',
        'uses'  => '\Ibi\Http\Controllers\Admin\MenuItemsController@update'
        ]);

    Route::delete('voci-menu/{id}', [
        'as'    => 'admin_delete_menu_item',
        'uses'  => '\Ibi\Http\Controllers\Admin\MenuItemsController@destroy'
        ]);
