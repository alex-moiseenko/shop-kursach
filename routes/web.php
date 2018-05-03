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

Auth::routes();

Route::get('/laravel', 'HomeController@index')->name('home');

Route::get('/', function (){
    return view('index');
});

Route::get('/catalog', function (){
    return view('catalog');
});

Route::get('/product', function (){
    return view('product');
});

Route::get('/checkout', function (){
    return view('checkout');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
