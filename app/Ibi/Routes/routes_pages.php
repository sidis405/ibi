<?php

Route::get('/', 'HomeController@home');
Route::get('index', 'HomeController@home');
Route::get('chi-siamo', 'HomeController@chi_siamo');
Route::get('prodotti-export', 'HomeController@prodotti_export');
Route::get('prodotti-ibisqus', 'HomeController@prodotti_ibisqus');
Route::get('prodotti-italia', 'HomeController@prodotti_italia');

Route::get('ibi-export', 'HomeController@ibi_export');
Route::get('ibi-italia', 'HomeController@ibi_italia');
Route::get('ibisqus-ospedale', 'HomeController@ibisqus_ospedale');


Route::get('ibi-toll-manufacturer', 'HomeController@ibi_toll_manufacturer');
Route::get('ricerca-innovazione', 'HomeController@ricerca_innovazione');

Route::get('contatti', 'HomeController@contatti');

Route::get('lavora-con-noi', '\Ibi\Http\Controllers\LavoraConNoiController@index');
Route::get('lavora-con-noi/{id}/{slug}/invia-candidatura', '\Ibi\Http\Controllers\LavoraConNoiController@invia_candidatura');

Route::get('news/{id}/{slug}', '\Ibi\Http\Controllers\NewsController@show');
Route::get('farmaco-vigilanza', '\Ibi\Http\Controllers\FarmacoVigilanzaController@index');
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