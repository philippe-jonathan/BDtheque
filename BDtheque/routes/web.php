<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/decouvrir', 'decouvrirController@show');
Route::get('/mesBd', 'mesBdController@show');

Route::get('/collection', 'collectionController@tom');

Route::get('/infoBd', 'collectionController@showCollection');
