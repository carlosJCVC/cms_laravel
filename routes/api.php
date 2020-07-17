<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\User as UserController;
use App\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');







Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'Api\UserController@details');

    //USERS
    Route::get('users', 'Api\UserController@index')->name('admin.users.index');
    Route::get('users/create', 'Api\UserController@create')->name('admin.users.create');
    Route::get('users/{id}/edit', 'Api\UserController@edit')->name('admin.users.edit');

    Route::post('users/store', 'Api\UserController@store')->name('admin.users.store');
    Route::put('users/{id}', 'Api\UserController@update')->name('admin.users.update');   
    Route::delete('users/delete/{id}', 'Api\UserController@destroy')->name('admin.users.destroy');


    //PRODUCTS
    Route::post('products/store', 'Api\ProductController@store')->name('admin.products.store');   
    Route::put('products/{id}', 'Api\ProductController@update')->name('admin.products.update');   
    Route::get('products/delete/{id}', 'Api\ProductController@destroy')->name('admin.products.destroy');

    //COLOR

    Route::post('colors/store', 'ApiColorController@store')->name('admin.colors.store'); 
    Route::put('colors/{id}', 'ApiColorController@update')->name('admin.colors.update');   
    Route::get('colors/delete/{id}', 'Api\ColorController@destroy')->name('admin.colors.destroy');
     
    //CATEGORIES

    Route::post('categories/store', 'Api\CategoryController@store')->name('admin.categories.store'); 
    Route::put('categories/{id}', 'Api\CategoryController@update')->name('admin.categories.update');   
    Route::get('categories/delete/{id}', 'Api\CategoryController@destroy')->name('admin.categories.destroy');

});

//USER
Route::get('users', 'Api\UserController@index')->name('admin.users.index');
Route::get('users/create', 'Api\UserController@create')->name('admin.users.create');
Route::get('users/{id}/edit', 'Api\UserController@edit')->name('admin.users.edit');

//PRODUCT
Route::get('products', 'Api\ProductController@index')->name('admin.products.index');
Route::get('products/create', 'Api\ProductController@create')->name('admin.products.create');;
Route::get('products/{id}/edit', 'Api\ProductController@edit')->name('admin.products.edit'); 

//COLOR
Route::get('colors', 'Api\ColorController@index')->name('admin.colors.index');
Route::get('colors/create', 'Api\ColorController@create')->name('admin.colors.create');
Route::get('colors/{id}/edit', 'Api\ColorController@edit')->name('admin.colors.edit');

//CATEGORY
Route::get('categories', 'Api\CategoryController@index')->name('admin.categories.index');
Route::get('categories/create', 'Api\CategoryController@create')->name('admin.categories.create');
Route::get('categories/{id}/edit', 'Api\CategoryController@edit')->name('admin.categories.edit');

// Route::apiresource('users','Admin\UserController');
// Route::apiresource('products','Admin\ProductController');
// Route::apiresource('colors','Admin\ColorController');
// Route::apiresource('categories','Admin\CategoriesController');