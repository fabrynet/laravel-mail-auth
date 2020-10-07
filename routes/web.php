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
Route::post('/products/{id}/update', 'LoggedController@updateProducts') -> name('products.update');

// Products Delete
Route::get('/products/{id}/destroy', 'LoggedController@destroyProducts') -> name('products.destroy');

// Mail
Route::get('/mailable', function() {
  $user = App\User::inRandomOrder() -> first();
  $prod = App\Product::inRandomOrder() -> first();
  $action = "DELETE";

  return new App\Mail\UserAction($user, $prod, $action);
});
