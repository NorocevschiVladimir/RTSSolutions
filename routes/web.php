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

Route::get('/', 'front\HomeController@index')->name("front.home.index");
Route::get('/cancel', 'front\HomeController@cancel');
Route::get('/success', 'front\HomeController@success');
Route::post('/cvSend', 'front\HomeController@cvSend')->name('cvSend');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/listofcv', 'front\HomeController@listofcv')->middleware('admin.user');
});
