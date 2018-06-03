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

//Route::get('/laravel', 'HomeController@index')->name('home');

Route::get('/', 'IndexController@index')->name('index');

Route::get('/catalog', 'CatalogController@index')->name('catalog');
Route::get('/catalog/filter', 'CatalogController@filter')->name('catalog-filter');
Route::get('/catalog/{category}', 'CatalogController@category')->name('catalog-category');

Route::get('/product/{id}', 'CatalogController@product');

Route::get('/categories', 'IndexController@categories')->name('categories');

//cart
Route::get('/cart/add','CartController@addItem')->name('addItem');
Route::get('/cart/get','CartController@getCart')->name('getCart');
Route::get('/cart/remove','CartController@remove')->name('remove');
Route::get('/cart/item_count','CartController@item_count')->name('item_count');
Route::get('/checkout','CartController@checkout_page')->name('checkout_page');
Route::post('/checkout','CartController@checkout')->name('checkout');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::group(['middleware' => 'admin.user'], function (){
        Route::get('products', 'AdminController@products');
        Route::get('products/create', 'AdminController@create_product')->name('create_product');
        Route::post('products/create', 'AdminController@save_product')->name('save_product');
        Route::post('products/edit', 'AdminController@edit_product')->name('edit_product');
        Route::get('products/delete/{id}','AdminController@delete_product')->name('delete_product');
        Route::get('products/{id}', 'AdminController@overview_product');
    });
});
