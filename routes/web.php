<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    echo 'adasd';
    //return view('welcome');
});
Route::namespace('Admin')->prefix('admin')->group(function() {
    Route::get('/', 'IndexController@index')->name('admin.index');
    Route::resource('/datasrc', 'DataSourceController');
});

