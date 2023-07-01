<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; //add ProductController

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'App\Http\Controllers\ProductController@index')->name('index');
Route::get('/create', 'App\Http\Controllers\ProductController@create')->name('create');
Route::post('store/', 'App\Http\Controllers\ProductController@store')->name('store');
Route::get('show/{product}', 'App\Http\Controllers\ProductController@show')->name('show');
Route::get('edit/{product}', 'App\Http\Controllers\ProductController@edit')->name('edit');
Route::put('edit/{product}', 'App\Http\Controllers\ProductController@update')->name('update');
Route::delete('/{product}', 'App\Http\Controllers\ProductController@destroy')->name('destroy');
