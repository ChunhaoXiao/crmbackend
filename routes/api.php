<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/authuser', 'AuthController@store');


Route::middleware('auth:api')->group(function() {
    Route::resource('/thread', 'ThreadController');
    Route::resource('/customer', 'CustomerController');
    Route::resource('/contact', 'ContactController');
    Route::post('/upload', 'UploadController@store');
    Route::resource('/product', 'ProductController');
    Route::resource('/business', 'BusinessController');
    Route::get('/options/{type}', 'DataSourceController@index');
    Route::resource('contract', 'ContractController');
});



