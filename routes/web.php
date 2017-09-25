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

Route::get('/',"searchController@index");
/*
    検索　ここから
 *  */
Route::get('search',"searchController@search");


/*
    検索　ここまで
 *  */