<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Guests
// Products Index
Route::get('/products', 'GuestController@indexProducts') -> name('products.index');

// Products Show
Route::get('/products/{id}/show', 'GuestController@showProducts') -> name('products.show');

// Logged
// Products Create
Route::get('/products/create', 'LoggedController@createProducts') -> name('products.create');
Route::post('/products/store', 'LoggedController@storeProducts') -> name('products.store');

// Products Edit
Route::get('/products/{id}/edit', 'LoggedController@editProducts') -> name('products.edit');
Route::put('/products/{id}/update', 'LoggedController@updateProducts') -> name('products.update');

// Products Delete
Route::delete('/products/{id}/destroy', 'LoggedController@destroyProducts') -> name('products.destroy');
