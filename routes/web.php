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
Route::group(['prefix'=>'Front'],function (){
    Route::get('/','FrontController@index')->name('home');
    Route::get('/shirts','Front\FrontController@shirts')->name('shirts');
    Route::get('/shirt','Front\FrontController@shirt')->name('shirt');
});


Auth::routes();

Route::get('/logout', 'Auth\loginController@logout')->name('logout');

Route::get('/admin', 'HomeController@index')->name('admin');
//admin route group
Route::resource('cart','CartController');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
    Route::get('/', function (){
        return view('admin.index');
    })->name('admin.index');
    Route::resource('product','ProductsController');
    Route::resource('category','ProductsController');
});

