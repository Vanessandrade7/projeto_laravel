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

//Route::get('/', function () {
//    return view('product.index');
//})->name('home');

Route::get('/', '\App\Http\Controllers\ProductController@index')->name('home');

Route::get('/product/create', '\App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/product/create', '\App\Http\Controllers\ProductController@store')->name('product.create');

Route::get('/products/{id}', '\App\Http\Controllers\ProductController@show')->name('product.show');

Route::put('/products/{id}/edit', '\App\Http\Controllers\ProductController@update')->name('product.update');


//Route::post('/product/create', function(\Illuminate\Http\Request $request) {
//    dd($request->all());
//});

//Route::post('/product')

// POST
// PUT
// DELETE
