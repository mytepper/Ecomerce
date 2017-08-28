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


route::get('/','FrontController@index')->name('home');
route::get('/books','FrontController@books')->name('books');
route::get('/book','FrontController@book')->name('book');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-items/{id}', 'CartController@addItem')->name('cart.addItem');

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function(){
  Route::get('/', function(){
    return view ('admin.index');
  })->name('admin.index');

  Route::resource('product','ProductsController');
  Route::resource('category','CategoriesController');
});

route::get('checkout','CheckoutController@step1');
route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');