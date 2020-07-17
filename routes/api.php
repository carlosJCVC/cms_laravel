<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user', function () {
    $user  = User::find(1);
    return response()->json($user, 200);
});
//Route USERS
Route::get('users', 'UsersController@index');
Route::get('users/{id}','UsersController@show');
Route::post('users','UsersController@store');
Route::put('users/{id}','UsersController@update');

//Route PRODUCTS
Route::get('products','ProductsController@index');


//Route COLORS
Route::get('colors','ColorsController@index');


//Route Categories
Route::get('categories','CategoriesController@index');