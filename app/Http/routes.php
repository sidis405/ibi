<?php


// Route::get('/', function () {
//     return view('pages.index');
// });

Route::get('/langs/{locale}', '\Ibi\Http\Controllers\LocaleController@setLocale');

Route::get('pull', 'HomeController@pull');

Route::get('area-riservata', 'HomeController@area_riservata');

include(__DIR__.'/../Ibi/Routes/routes_auth.php');

Route::group(array('prefix' => 'admin', 'middleware' => 'auth'), function () {

    Route::get('/', '\Ibi\Http\Controllers\Admin\HomeController@index');

    include(__DIR__.'/../Ibi/Routes/routes_fascie.php');

    include(__DIR__.'/../Ibi/Routes/routes_paesi.php');

    include(__DIR__.'/../Ibi/Routes/routes_categorie_terapeutiche.php');
    
    include(__DIR__.'/../Ibi/Routes/routes_principi_attivi.php');
    
    include(__DIR__.'/../Ibi/Routes/routes_prodotti.php');

    include(__DIR__.'/../Ibi/Routes/routes_listini.php');
    
    include(__DIR__.'/../Ibi/Routes/routes_ruoli.php');

    include(__DIR__.'/../Ibi/Routes/routes_permessi.php');

    include(__DIR__.'/../Ibi/Routes/routes_utenti.php');

    include(__DIR__.'/../Ibi/Routes/routes_news.php');
    
    include(__DIR__.'/../Ibi/Routes/routes_comunicati_farmacovigilanza.php');
    
    include(__DIR__.'/../Ibi/Routes/routes_segnalazioni_farmacovigilanza.php');

    include(__DIR__.'/../Ibi/Routes/routes_schede_farmacovigilanza.php');

    include(__DIR__.'/../Ibi/Routes/routes_tdv.php');

    include(__DIR__.'/../Ibi/Routes/routes_lavora_con_noi.php');
    
    include(__DIR__.'/../Ibi/Routes/routes_pagine.php');
    
    include(__DIR__.'/../Ibi/Routes/routes_contenuti.php');

    include(__DIR__.'/../Ibi/Routes/routes_slider.php');
    
    include(__DIR__.'/../Ibi/Routes/routes_menu_items.php');
    
    include(__DIR__.'/../Ibi/Routes/routes_staff_info.php');

});

include(__DIR__.'/../Ibi/Routes/routes_pages.php');
include(__DIR__.'/../Ibi/Routes/routes_static.php');

