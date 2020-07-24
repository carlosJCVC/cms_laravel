<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'UserController@details');
    Route::post('logout', 'UserController@logout');
    
    /**
     * Resources users
     */
    Route::group(['prefix' => 'users'], function(){
        Route::get('', 'Admin\UserController@index');
        Route::get('/{id}','UserController@show');
        Route::post('','UserController@store');
        Route::put('/{id}','UserController@update');
        Route::delete('/{id}','UserController@destroy');
    });

    Route::post('products','ProductController@store');
    Route::put('products/{id}','ProductController@update');
    Route::delete('products/{id}','ProductController@destroy');

    Route::post('colors','ColorController@store');
    Route::put('colors/{id}','ColorController@update');
    Route::delete('colors/{id}','ColorController@destroy');

    Route::post('categories','CategoryController@store');
    Route::put('categories/{id}','CategoryController@update');
    Route::delete('categories/{id}','CategoryController@destroy');
});

//Route PRODUCTS
Route::get('products','ProductController@index');
Route::get('products/{id}','ProductController@index');

//Route COLORS
Route::get('colors','ColorController@index');
Route::get('colors/{id}','ColorController@show');

//Route Categories
Route::get('categories','CategoryController@index');
Route::get('categories/{id}','CategoryController@show');
