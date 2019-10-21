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

Route::get('/', 'PageController@getIndex' );
Route::get('/detail', 'PageController@getDetail');
Route::get('/schedule', 'PageController@getMovieSchedule');
Route::get('/info', 'PageController@getInformation');
Route::get('/news', 'PageController@getNews');
Route::get('/promotion', 'PageController@getPromotion');
Route::get('/booking', 'PageController@getBooking');