<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/',  function (){
   return redirect()->route('login');
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);


Route::group(['prefix' => 'admin', 'as'=>'admin.'], function () {
    Route::get('/dashboard', 'HomeController@index')->name('home');

    //Customer
//    Route::resource('/customer',  'Customer\CustomerController');
    Route::get('/customer', 'Customer\CustomerController@index')->name('customer.index');
    Route::post('/customer/store', 'Customer\CustomerController@store')->name('customer.store');
    Route::post('/customer/check', 'Customer\CustomerController@check')->name('customer.check');

//    Product List
//    Route::get('/product', 'Product\ProductController@index')->name('product_list');
    Route::get('/product-list', 'Product\ProductController@index')->name('product_all');
    Route::get('/product', 'Product\ProductController@product')->name('product_list');
    Route::get('/product/test', 'Product\ProductController@product_list')->name('test');

//    Create Order
    Route::get('/order/create', 'Order\OrderController@create_order')->name('order_create');
    Route::get('/product/search', 'Order\OrderController@autocompleteSearch')->name('autocomplete');
    Route::get('/order/details', 'Order\OrderController@order_details')->name('order_details');

});




























