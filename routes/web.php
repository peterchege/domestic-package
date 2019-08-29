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

Route::get('/home-customer', 'MainController@index')->name('home_customer');

Route::get('/premises', 'MainController@premises')->name('premises');

Route::get('/product-content', 'MainController@product_content')->name('product_content');

Route::get('/product-allrisk', 'MainController@product_allrisk')->name('product_allrisk');

Route::get('/product-domestic', 'MainController@product_domestic')->name('product_domestic');

Route::get('/general-information', 'MainController@general_information')->name('general_information');

//changed controller form main controller so as to load the information from db using the premises controller
//Route::get('/billing_details', 'PremisesController@billingDetailsFetch')->name('billing_detail');

//removed this and replaced it with premisesController@invoiceDetailsFetch
//Route::get('/invoice', 'MainController@invoice')->name('invoice');

Route::get('/calculator', 'CalculatorController@calculator')->name('calculator');

//dictates the path to be taken
Route::post('/premises-submit', 'PremisesController@start')->name('premisesSubmit');

// content submit
Route::post('/content-submit', 'PremisesController@contentSubmit')->name('contentSubmit');

//all risk submit
Route::post('/allrisk-submit', 'PremisesController@allriskSubmit')->name('allriskSubmit');

//domestic submit
Route::post('/domestic-submit', 'PremisesController@domesticSubmit')->name('domesticSubmit');

//general information
Route::post('/general-information-submit', 'PremisesController@generalInformationSubmit')->name('generalInformationSubmit');

Route::get('/billing-details-fetch', 'PremisesController@billingDetailsFetch')->name('billingDetailsFetch');

Route::post('/billing-details-submit', 'PremisesController@billingDetailsSubmit')->name('billingDetailsSubmit');

Route::get('/invoice-details-fetch', 'PremisesController@invoiceDetailsFetch')->name('invoiceDetailsFetch');
