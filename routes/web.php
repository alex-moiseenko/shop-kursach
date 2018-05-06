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

Route::get('/gallery', function () {
    return view('gallery');
});

Auth::routes();

Route::get('/laravel', 'HomeController@index')->name('home');

Route::get('/', 'IndexController@index')->name('index');

Route::get('/catalog', 'CatalogController@index')->name('catalog');
Route::post('/catalog/filter', 'CatalogController@filter')->name('catalog-filter');

Route::get('/product/{id}', 'IndexController@product');

Route::get('/checkout', 'IndexController@checkout')->name('checkout');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
