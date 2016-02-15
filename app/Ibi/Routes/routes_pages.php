<?php

Route::get('/', 'HomeController@home');
Route::get('index', 'HomeController@home');
Route::get('home', 'HomeController@home');
Route::get('chi-siamo', 'HomeController@chi_siamo');
Route::get('trasferimenti-di-valore', 'HomeController@tdv');
Route::get('prodotti-export', '\Ibi\Http\Controllers\ProdottiController@prodotti_export');
Route::get('prodotti-italia', '\Ibi\Http\Controllers\ProdottiController@prodotti_italia');

Route::get('prodotti-ibisqus', '\Ibi\Http\Controllers\ProdottiController@prodotti_ibisqus');
Route::get('prodotti-ibisqus-italia', '\Ibi\Http\Controllers\ProdottiController@prodotti_ibisqus_italia');
Route::get('prodotti-ibisqus-germania', '\Ibi\Http\Controllers\ProdottiController@prodotti_ibisqus_germania');
Route::get('prodotti-ibisqus-regno-unito', '\Ibi\Http\Controllers\ProdottiController@prodotti_ibisqus_uk');

Route::get('ibi-export', 'HomeController@ibi_export');
Route::get('ibi-italia', 'HomeController@ibi_italia');
Route::get('ibisqus-ospedale', 'HomeController@ibisqus_ospedale');

Route::get('trasferimenti-di-valore/documento', '\Ibi\Http\Controllers\TdvController@show');

Route::get('/prodotti/allegati/{type}/{path}', [
        'as'    => 'admin_attachments_prodotti',
        'uses'  => '\Ibi\Http\Controllers\Admin\AllegatiController@showExt'
        ])->middleware('schede_middleware');

Route::get('/allegati/{type}/{path}', [
        'as'    => 'admin_attachments_prodotti',
        'uses'  => '\Ibi\Http\Controllers\Admin\AllegatiController@show'
        ]);

// Route::get('/prodotti/allegati/{type}/{path}', [
//         'as'    => 'admin_attachments_prodotti',
//         'uses'  => '\Ibi\Http\Controllers\Admin\AllegatiController@showExt'
//         ]);


Route::get('area-riservata', 'HomeController@area_riservata');

Route::get('ibi-toll-manufacturer', 'HomeController@ibi_toll_manufacturer');
Route::get('reparti-toll-manufacturer', 'HomeController@reparti_toll_manufacturer');
Route::get('ricerca-innovazione', 'HomeController@ricerca_innovazione');

Route::get('contatti', 'HomeController@contatti');

Route::get('lavora-con-noi', '\Ibi\Http\Controllers\LavoraConNoiController@index');
Route::get('lavora-con-noi/invia-candidatura', '\Ibi\Http\Controllers\LavoraConNoiController@invia_candidatura');
Route::post('lavora-con-noi/invia-candidatura', '\Ibi\Http\Controllers\LavoraConNoiController@store');
Route::get('lavora-con-noi/{id}/{slug}/invia-candidatura', '\Ibi\Http\Controllers\LavoraConNoiController@invia_candidatura_selected');

Route::get('archivio-news', '\Ibi\Http\Controllers\NewsController@index');
Route::get('archivio-news/{id}/{slug}', '\Ibi\Http\Controllers\NewsController@show');


Route::get('farmaco-vigilanza', '\Ibi\Http\Controllers\FarmacoVigilanzaController@index');

Route::get('farmaco-vigilanza/segnalazione', '\Ibi\Http\Controllers\FarmacoVigilanzaController@create');
Route::post('farmaco-vigilanza/segnalazione', '\Ibi\Http\Controllers\FarmacoVigilanzaController@store');

Route::get('farmaco-vigilanza/comunicati/{id}/{slug}', '\Ibi\Http\Controllers\FarmacoVigilanzaController@comunicato');

Route::get('invia-candidatura', 'HomeController@invia_candidatura');
Route::get('benessere-del-paziente', 'HomeController@benessere_del_paziente');
Route::get('privacy-policy', 'HomeController@privacy_policy');

// Route::get('{view}', function ($view) {
//     try {
//       return view('pages.'.$view);
//     } catch (\Exception $e) {
//       abort(404);
//     }
//   })->where('view', '.*');