<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;
use App\Http\Resources\User as UserController;
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
    Route::post('details', 'API\UserController@details');
    });


// Route::apiresource('users','Admin\UserController');
// Route::apiresource('products','Admin\ProductController');
// Route::apiresource('colors','Admin\ColorController');
// Route::apiresource('categories','Admin\CategoriesController');


Route::get('users', 'Admin\UserController@index');
Route::get('users/{user}', 'Admin\UserController@show');
Route::post('users', 'Admin\UserController@store');
Route::put('users/{user}', 'Admin\UserController@update');
Route::delete('users/{user}', 'Admin\UserController@destroy');

Route::get('products', 'Admin\ProductController@index');
Route::get('products/{product}', 'Admin\ProductController@show');
Route::post('products', 'Admin\ProductController@store');
Route::put('products/{product}', 'Admin\ProductController@update');
Route::delete('products/{product}', 'Admin\ProductController@destroy');

Route::get('colors', 'Admin\ColorController@index');
Route::get('colors/{color}', 'Admin\ColorController@show');
Route::post('colors', 'Admin\ColorController@store');
Route::put('colors/{color}', 'Admin\ColorController@update');
Route::delete('colors/{color}', 'Admin\ColorController@destroy');

Route::get('categories', 'Admin\CategoriesController@index');
Route::get('categories/{category}', 'Admin\CategoriesController@show');
Route::post('categories', 'Admin\CategoriesController@store');
Route::put('categories/{category}', 'Admin\CategoriesController@update');
Route::delete('categories/{category}', 'Admin\CategoriesController@destroy');