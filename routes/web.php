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
Route::livewire('/product/{slug}', 'product-details');
Route::group(['middleware' => 'auth'], function () {
    Route::livewire('/cart', 'cart');
    Route::get('/add/{product}', 'CartController@store');
    Route::get('/delete/{product}', 'CartController@delete');
    Route::post('/checkout', 'PaymentController@redirectToGateway')->name('checkout');
    Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
    Route::livewire('/payment', 'payment');
    //Route::get('cart', "cartController@index");
});
Route::get('/favourite/{product}', 'CartController@favourite');
Route::livewire('/favorite', 'favorite');
Auth::routes();
