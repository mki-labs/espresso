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