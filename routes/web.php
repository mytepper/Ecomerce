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


route::get('/','HomeController@index')->name('home');
route::get('/books','HomeController@books')->name('books');
route::get('/book','HomeController@book')->name('book');
