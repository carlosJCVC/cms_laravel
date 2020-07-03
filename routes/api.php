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

Route::group(['prefix' => 'products'], function () {
    Route::get('/', 'Api\ProductController@index');
    Route::post('/', 'Api\ProductController@store');
    Route::put('/', 'Api\ProductController@update');
    Route::patch('/', 'Api\ProductController@update');
    Route::delete('/', 'Api\ProductController@destroy');
});