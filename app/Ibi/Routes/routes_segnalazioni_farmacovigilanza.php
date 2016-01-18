<?php

#   farmaco-vigilanza ROUTES

    Route::get('farmaco-vigilanza/segnalazioni', [
        'as'    => 'admin_segnalazioni',
        'uses'  => '\Ibi\Http\Controllers\Admin\SegnalazioniController@index'
        ]);


    Route::get('farmaco-vigilanza/segnalazioni/{id}', [
        'as'    => 'admin_edit_segnalazioni',
        'uses'  => '\Ibi\Http\Controllers\Admin\SegnalazioniController@show'
        ]);


    Route::delete('farmaco-vigilanza/segnalazioni/{id}', [
        'as'    => 'admin_delete_segnalazioni',
        'uses'  => '\Ibi\Http\Controllers\Admin\SegnalazioniController@destroy'
        ]);


