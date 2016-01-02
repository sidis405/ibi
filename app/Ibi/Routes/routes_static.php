<?php


Route::get('static/{view}', function ($view) {
    try {
      return view('static.'.$view);
    } catch (\Exception $e) {
      abort(404);
    }
  })->where('view', '.*');

// Route::get('{view}', function ($view) {
//     try {
//       return view('static.'.$view);
//     } catch (\Exception $e) {
//       abort(404);
//     }
//   })->where('view', '.*');