<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::get('/admin', function () {
    dd('estoy en rutas admin');
})->middleware('isAdmin');


Route::get('/users/{user}', function (Request $request, User $user) {
    //User::find($id)
    if ($$user->exits) {
        
    }
})->middleware('isAdmin');


Route::prefix('admin')->group(function () {
    Route::get('users', 'Admin\UserController@index')->name('admin.users.index');
    Route::get('users/create', 'Admin\UserController@create')->name('admin.users.create');
    Route::get('users/store', 'Admin\UserController@store')->name('admin.users.store');
    Route::get('users/{id}/edit', 'Admin\UserController@edit')->name('admin.users.edit');
    Route::put('users/{id}/update', 'Admin\UserController@update')->name('admin.users.update');
    Route::get('users/{id}/destroy','Admin\UserController@destroy')->name('admin.users.destroy');
});

Route::prefix('admin')->group(function () {
    Route::get('products', 'Admin\ProductController@index')->name('admin.products.index');
    Route::get('products/create', 'Admin\ProductController@create')->name('admin.products.create');;
    Route::get('products/store', 'Admin\ProductController@store')->name('admin.products.store');
    Route::get('products/{id}/edit', 'Admin\ProductController@edit')->name('admin.product.edit');
    Route::put('products/{id}/update', 'Admin\ProductController@update')->name('admin.product.update');
    Route::get('products/{id}/destroy','Admin\ProductController@destroy')->name('admin.product.destroy');
});


Route::prefix('admin')->group(function () {
    Route::get('categories', 'Admin\CategoriesController@index')->name('admin.categories.index');
    Route::get('categories/create', 'Admin\CategoriesController@create')->name('admin.categories.create');;
    Route::get('categories/store', 'Admin\CategoriesController@store')->name('admin.categories.store');
    Route::get('categories/{id}/edit', 'Admin\CategoriesController@edit')->name('admin.categories.edit');
    Route::put('categories/{id}/update', 'Admin\CategoriesController@update')->name('admin.categories.update');
    Route::get('categories/{id}/destroy','Admin\CategoriesController@destroy')->name('admin.categories.destroy');
});

Route::prefix('admin')->group(function () {
    Route::get('colors', 'Admin\ColorController@index')->name('admin.colors.index');
    Route::get('colors/create', 'Admin\ColorController@create')->name('admin.colors.create');
    Route::get('colors/store', 'Admin\ColorController@store')->name('admin.colors.store');
    Route::get('colors/{id}/edit', 'Admin\ColorController@edit')->name('admin.colors.edit');
    Route::put('colors/{id}/update', 'Admin\ColorController@update')->name('admin.colors.update');
    Route::get('colors/{id}/destroy','Admin\ColorController@destroy')->name('admin.colors.destroy');
});