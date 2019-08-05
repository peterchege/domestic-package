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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home_customer', 'MainController@index')->name('home_customer');

Route::get('/premises', 'MainController@premises')->name('premises');

Route::get('/product_content', 'MainController@product_content')->name('product_content');

Route::get('/product_allrisk', 'MainController@product_allrisk')->name('product_allrisk');

Route::get('/product_domestic', 'MainController@product_domestic')->name('product_domestic');

Route::get('/general_information', 'MainController@general_information')->name('general_information');