<?php

#   staff-info ROUTES

    Route::get('lavora-con-noi/percentuale-dipendenti', [
        'as'    => 'admin_staff-info',
        'uses'  => '\Ibi\Http\Controllers\Admin\StaffInfoController@index'
        ]);

    Route::get('lavora-con-noi/percentuale-dipendenti/{id}/modifica', [
        'as'    => 'admin_edit_staff-info',
        'uses'  => '\Ibi\Http\Controllers\Admin\StaffInfoController@edit'
        ]);

    Route::put('lavora-con-noi/percentuale-dipendenti/{id}', [
        'as'    => 'admin_store_staff-info',
        'uses'  => '\Ibi\Http\Controllers\Admin\StaffInfoController@update'
        ]);