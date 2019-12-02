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
Route::get('/booking/{id}', 'PageController@getBooking')->name('booking');
Route::get('/create', 'PageController@getbook');
Route::post('/create', 'PageController@getbook');
Route::get('/login', 'PageController@getLogin');
Route::get('/register', 'PageController@getRegister');
Route::post('login', "TestController@check");
Auth::routes();

Route::get('/home', 'PageController@getIndex')->name('home');
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');

//admin.
Route::get('/charts', function(){
    return view('layouts.admin.charts');
});
Route::get('/listfilm', function(){
    return view('layouts.admin.listfilm');
});

Route::get('/admin', 'AdminController@showLogin');
Route::post('/admin/login','AdminController@login');

Route::group(['middleware'=>['auth']], function(){
    Route::get('admin/logout', 'AdminController@logout');
    Route::get('/indexadmin', function(){
        return view('layouts.admin.index');
    });
    Route::get('/table-rooms','TestController@tableroom');
    Route::get('/deleteroom/{id}', 'TestController@deleteroom')->name('deleteroom');
    Route::post('/editroom', 'TestController@editroom')->name('editroom');
    Route::post('/createroom', 'TestController@createroom')->name('createroom');

    Route::get('/table-films', 'TestController@listfilm');
    Route::get('/deletefilm/{id}', 'TestController@deletefilm')->name('deletefilm');
    Route::post('/editfilm', 'TestController@editfilm')->name('editfilm');
    Route::post('/createfilm', 'TestController@createfilm')->name('createfilm');

    Route::get('/time-table-film', 'TestController@timetablefilm');
    Route::get('/delete/{id}', 'TestController@deletetimetablefilm')->name('deletetimetablefilm');
    Route::post('/edittimetablefilm', 'TestController@edittimetablefilm')->name('edittimetablefilm');
    Route::post('/createtimetablefilm', 'TestController@createtimetablefilm')->name('createtimetablefilm');

    Route::get('/table-pricelist', 'TestController@tablepricelist');
    Route::get('/deletepricelist/{id}', 'TestController@deletepricelist')->name('deletepricelist');
    Route::post('/editpricelist', 'TestController@editpricelist')->name('editpricelist');
    Route::post('/createpricelist', 'TestController@createpricelist')->name('createpricelist');

    Route::get('/table-orders', 'TestController@ordertable');
    Route::get('/deleteorder/{id}', 'TestController@deleteorder')->name('deleteorder');
    Route::post('/editorder', 'TestController@editorder')->name('editorder');
    Route::post('/createorder', 'TestController@createorder')->name('createorder');
});