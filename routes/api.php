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

/*Route::middleware('auth:api')->get('user', function (Request $request) {
    return $request->user();
});*/
Route::get('/', function () {
    return response()->json('bienvenido');
});
//Route USERS
Route::get('users', 'UserController@index')->middleware('client');


Route::get('users/{id}','UserController@show');
Route::post('users','UserController@store');
Route::put('users/{id}','UserController@update');
Route::delete('users/{id}','UserController@destroy');



//Route PRODUCTS
Route::get('products','ProductController@index');
Route::get('products/{id}','ProductController@index');
Route::post('products','ProductController@store');
Route::put('products/{id}','ProductController@update');
Route::delete('products/{id}','ProductController@destroy');

//Route COLORS
Route::get('colors','ColorController@index');
Route::get('colors/{id}','ColorController@show');
Route::post('colors','ColorController@store');
Route::put('colors/{id}','ColorController@update');
Route::delete('colors/{id}','ColorController@destroy');

//Route Categories
Route::get('categories','CategoryController@index');
Route::get('categories/{id}','CategoryController@show');
Route::post('categories','CategoryController@store');
Route::put('categories/{id}','CategoryController@update');
Route::delete('categories/{id}','CategoryController@destroy');