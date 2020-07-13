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

Route::prefix('admin')->group(function () {
    

   
    //COLOR
    Route::get('colors', 'Admin\ColorController@index')->name('admin.colors.index');
    Route::get('colors/create', 'Admin\ColorController@create')->name('admin.colors.create');;
    Route::post('colors/store', 'Admin\ColorController@store')->name('admin.colors.store');
    Route::get('colors/{id}/edit', 'Admin\ColorController@edit')->name('admin.colors.edit'); 
    Route::put('colors/{id}', 'Admin\ColorController@update')->name('admin.colors.update');   
    Route::get('colors/delete/{id}', 'Admin\ColorController@destroy')->name('admin.colors.destroy');

});