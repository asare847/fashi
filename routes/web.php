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

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('/shop','ShopController@index')->name('shop.index');

Route::get('/products/{product}','ShopController@show')->name('product.show');
Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');

Route::patch('/cart/{product}','CartController@update')->name('cart.update');

Route::post('/ShopController/switchToSaveForLater/{product}', 'ShopController@switchToSaveForLater')->name('shop.switchToSaveForLater');

Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');

Route::get('/checkout','CheckoutController@index')->name('checkout.index');
Route::post('/checkout','CheckoutController@store')->name('checkout.store');
Route::get('/thankyou','ConfirmationController@index')->name('confirmation.index');

Route::post('/subscription','SubscribeController@store')->name('subscribe.store');

Route::get('/search','ShopController@search')->name('search');

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/{id}', 'PostController@show')->name('posts.show');
Route::get('/contact','ContactController@index')->name('contact.index');
Route::get('/contact','ContactController@create')->name('contact.create');
//Route::post('/contacts','ContactController@store')->name('contact.store');

