<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/billing_details', 'MainController@billing_details')->name('billing_details');

Route::get('/invoice', 'MainController@invoice')->name('invoice');

Route::get('/calculator', 'CalculatorController@calculator')->name('calculator');

//dictates the path to be taken
Route::post('/premisesSubmit', 'PremisesController@start')->name('premisesSubmit');

// facebook
Route::get('/redirect', 'SocialAuthFacebookController@redirect');

Route::get('/callback', 'SocialAuthFacebookController@callback');
