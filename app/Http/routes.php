<?php

Route::get('/', function () {
    return view('pages.index');
});

// Route::get('home', 'HomeController@home');
Route::get('pull', 'HomeController@pull');

include(__DIR__.'/../Ibi/Routes/routes_auth.php');

Route::group(array('prefix' => 'admin', 'middleware' => 'auth'), function () {

    Route::get('/', '\Ibi\Http\Controllers\Admin\HomeController@index');

    include(__DIR__.'/../Ibi/Routes/routes_fascie.php');

    include(__DIR__.'/../Ibi/Routes/routes_paesi.php');

    include(__DIR__.'/../Ibi/Routes/routes_categorie_terapeutiche.php');
    
    include(__DIR__.'/../Ibi/Routes/routes_principi_attivi.php');
    
    include(__DIR__.'/../Ibi/Routes/routes_prodotti.php');

    include(__DIR__.'/../Ibi/Routes/routes_ruoli.php');

    include(__DIR__.'/../Ibi/Routes/routes_permessi.php');

    include(__DIR__.'/../Ibi/Routes/routes_utenti.php');

    include(__DIR__.'/../Ibi/Routes/routes_news.php');
    
    // include(__DIR__.'/../Ibi/Routes/routes_comunicati_farmacovigilanza.php');

    // include(__DIR__.'/../Ibi/Routes/routes_schede_farmacovigilanza.php');

    include(__DIR__.'/../Ibi/Routes/routes_lavora_con_noi.php');

});

include(__DIR__.'/../Ibi/Routes/routes_pages.php');
include(__DIR__.'/../Ibi/Routes/routes_static.php');

