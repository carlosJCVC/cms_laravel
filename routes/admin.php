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
    

    //PRODUCTS
    Route::get('products', 'Admin\ProductController@index')->name('admin.products.index');
    Route::get('products/create', 'Admin\ProductController@create')->name('admin.products.create');;
    Route::post('products/store', 'Admin\ProductController@store')->name('admin.products.store');   
    Route::get('products/{id}/edit', 'Admin\ProductController@edit')->name('admin.products.edit'); 
    Route::put('products/{id}', 'Admin\ProductController@update')->name('admin.products.update');   
    Route::get('products/delete/{id}', 'Admin\ProductController@destroy')->name('admin.products.destroy');
    
    //USERS
    Route::get('users', 'Admin\UserController@index')->name('admin.users.index');
    Route::get('users/create', 'Admin\UserController@create')->name('admin.users.create');;
    Route::post('users/store', 'Admin\UserController@store')->name('admin.users.store');
    Route::get('users/{id}/edit', 'Admin\UserController@edit')->name('admin.users.edit'); 
    Route::put('users/{id}', 'Admin\UserController@update')->name('admin.users.update');   
    Route::get('users/delete/{id}', 'Admin\UserController@destroy')->name('admin.users.destroy');
    
    //CATEGORIES
    Route::get('categories', 'Admin\CategoryController@index')->name('admin.categories.index');
    Route::get('categories/create', 'Admin\CategoryController@create')->name('admin.categories.create');;
    Route::post('categories/store', 'Admin\CategoryController@store')->name('admin.categories.store');
    Route::get('categories/{id}/edit', 'Admin\CategoryController@edit')->name('admin.categories.edit'); 
    Route::put('categories/{id}', 'Admin\CategoryController@update')->name('admin.categories.update');   
    Route::get('categories/delete/{id}', 'Admin\CategoryController@destroy')->name('admin.categories.destroy');

    //COLOR
    Route::get('colors', 'Admin\ColorController@index')->name('admin.colors.index');
    Route::get('colors/create', 'Admin\ColorController@create')->name('admin.colors.create');;
    Route::post('colors/store', 'Admin\ColorController@store')->name('admin.colors.store');
    Route::get('colors/{id}/edit', 'Admin\ColorController@edit')->name('admin.colors.edit'); 
    Route::put('colors/{id}', 'Admin\ColorController@update')->name('admin.colors.update');   
    Route::get('colors/delete/{id}', 'Admin\ColorController@destroy')->name('admin.colors.destroy');

    

});