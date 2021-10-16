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

//Route::get('/', function () {
//    return view('home');
//});

//Route::get('/', 'Dashboard\IndexController@index');

Route::group(['prefix' => 'admin'], function () {
    Auth::routes([
        'register' => false, // Registration Routes...
        'reset' => false, // Password Reset Routes...
        'verify' => false, // Email Verification Routes...
    ]);
});


Route::group(['prefix' => 'admin', 'as'=>'admin.'], function () {
    Route::get('/dashboard', 'HomeController@index')->name('home');


//    Product List
//    Route::get('/product', 'Product\ProductController@index')->name('product_list');
    Route::get('/product', 'Product\ProductController@product')->name('product_list');
    Route::get('/product/test', 'Product\ProductController@product_list')->name('test');

//    Create Order
    Route::get('/order/create', 'Order\OrderController@create_order')->name('order_create');
    Route::get('/product/search', 'Order\OrderController@autocompleteSearch')->name('autocomplete');
    Route::get('/order/details', 'Order\OrderController@order_details')->name('order_details');

});




























