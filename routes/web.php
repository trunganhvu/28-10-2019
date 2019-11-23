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

Route::get('/home', 'PageController@getHome')->name('home');
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');

//admin.
Route::get('/indexadmin', function(){
    return view('layouts.admin.index');
});
Route::get('/admin', function(){
    return view('layouts.admin.login');
});
Route::get('/charts', function(){
    return view('layouts.admin.charts');
});
Route::get('/listfilm', function(){
    return view('layouts.admin.listfilm');
});
Route::get('/table-rooms', function(){
    return view('layouts.admin.rooms');
});
Route::get('/table-films', function(){
    return view('layouts.admin.films');
});
Route::get('/time-table-film', function(){
    return view('layouts.admin.timetablefilm');
});
Route::get('/table-pricelist', function(){
    return view('layouts.admin.pricelist');
});