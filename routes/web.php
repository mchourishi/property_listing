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

Auth::routes();

// Frontend Routes
Route::get('/', 'SearchController@index');
Route::get('/home', 'SearchController@index')->name('home');
Route::get('/search', 'SearchController@search')->name('property.search');
Route::get('/property/{id}', 'SearchController@show')->name('property.show');


// Admin Routes
Route::group(['prefix'=>'admin','middleware'=>['auth', 'admin']], function(){
    Route::resource('/properties', 'PropertyController');
    Route::get('/', 'PropertyController@index')->name('admin.home');
});
