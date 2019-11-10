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

Route::get('/', 'PageController@getIndex' )->name('index');
Route::get('/detail/{id}', 'PageController@getDetail')->name('detail');
Route::get('/schedule', 'PageController@getMovieSchedule');
Route::get('/info', 'PageController@getInformation');
Route::get('/news', 'PageController@getNews');
Route::get('/promotion', 'PageController@getPromotion');
Route::get('/booking', 'PageController@getBooking');
Route::get('/login', 'PageController@getLogin');
Route::get('/register', 'PageController@getRegister');
Route::post('login', "TestController@check");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
