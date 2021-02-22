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


Auth::routes();

Route::get('/','PaymentController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('my-store', 'PaymentController@show_products');
Route::post('pay-success', 'PaymentController@pay_success');
Route::get('thank-you', 'PaymentController@thank_you');