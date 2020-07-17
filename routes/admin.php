<?php
use Illuminate\Http\Request;
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
    Route::get('products', 'Admin\ProductController@index')->name('admin.products.index');
    Route::get('products/create', 'Admin\ProductController@create');
    Route::get('products/store', 'Admin\ProductController@store')->name('admin.products.store');
});