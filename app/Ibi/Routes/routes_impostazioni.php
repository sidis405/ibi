<?php

#  impostazioni ROUTES


    Route::get('impostazioni', [
        'as'    => 'admin_edit_impostazioni',
        'uses'  => '\Ibi\Http\Controllers\Admin\ImpostazioniController@edit'
        ]);

    Route::put('impostazioni', [
        'as'    => 'admin_store_impostazioni',
        'uses'  => '\Ibi\Http\Controllers\Admin\ImpostazioniController@update'
        ]);