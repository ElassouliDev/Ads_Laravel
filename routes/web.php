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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('advert/')->name('advert.')->group(function (){

    Route::resource('/','Advert\AdvertController')->only('create','store','index');
    Route::resource('category','Advert\CategoryController')->except('update','delete','edit');

});
