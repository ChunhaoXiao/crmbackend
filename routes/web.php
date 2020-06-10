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

// Route::get('/', function () {
//     //echo 'adasd';
//     //return view('welcome');
// });

//Route::get('mat', 'Admin\MaterialController@index')->name('admin.mater');

Route::namespace('Admin')->name('admin.')->prefix('admin')->group(function() {

    Route::get('/', 'IndexController@index')->name('index');
    Route::resource('/datasrc', 'DataSourceController');
    Route::resource('material', 'MaterialController');
    Route::resource('users', 'UserController');
    //Route::get('mater', 'MaterialController@index')->name('mater');

    Route::resource('/{user}/thread', 'ThreadController');
    Route::resource('/{user}/products', 'ProductController');

});

