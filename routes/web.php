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
Route::get('/', function(){
    return redirect()->route('vendors');
} );

Route::get('/landing', function(){
    return view('landing');
} );

Auth::routes();

Route::group(['middleware' => 'auth'],function () {
//vendors
Route::get('/vendors', 'SupplyChainController@vendor')->name('vendors');
Route::get('/vendors/create', 'SupplyChainController@vendorcreate')->name('createvendor');
Route::get('/vendors/edit', 'VendorsController@edit');
Route::post('/vendors', 'VendorsController@store')->name('postvendor');

//rfq
Route::get('/rfq', 'SupplyChainController@rfq')->name('rfq');
Route::get('/rfq/create', 'RfqController@create')->name('createrfq');
Route::get('/rfq/edit', 'RfqController@edit');
Route::post('/rfq', 'RfqController@store')->name('postrfq');

//purchase
Route::get('/purchase', 'SupplyChainController@purchase')->name('purchase');
Route::get('/purchase/create', 'PurchaseController@create')->name('createpurchase');
Route::get('/purchase/edit', 'PurchaseController@edit');
Route::post('/purchase', 'PurchaseController@store')->name('postpurchase');

//produk
Route::get('/product/create', 'ProductController@create')->name('createproduk');
Route::post('/product', 'ProductController@store')->name('storeproduk');



});




Route::get('/home', 'HomeController@index')->name('home');
