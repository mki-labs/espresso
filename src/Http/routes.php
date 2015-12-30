<?php

/*
|--------------------------------------------------------------------------
| Espresso Admin Routes
|--------------------------------------------------------------------------
| 
| Here is where you can register all of the routes for Admin.
|
*/

Route::group(['namespace' => 'MkiLabs\Espresso\Http\Controllers', 'prefix'=>'es-admin'], function(){
	Route::get('/', ['as'=>'index', 'uses'=>'EsAdminController@hello']);
});

Route::group(['namespace' => 'MkiLabs\Espresso\Http\Controllers'], function(){
	Route::get('{slug?}', ['as'=>'index', 'uses'=>'EspressoController@index'])->where('slug', '([A-Za-z0-9\-\/]+)');
});

// Route::get('{slug?}', ['as'=>'index', 'uses'=>'MkiLabs\Espresso\Http\Controllers\EspressoController@index']);