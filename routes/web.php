<?php

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
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'] , function (){
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
});

Route::group(['prefix' => 'user'], function (){
    Route::get('profile/create', 'User\ProfileController@add');
    Route::post('profile/create', 'User\ProfileController@create');
    Route::get('profile/create', 'TeamController@showList');
    Route::get('profile/edit', 'User\ProfileController@edit');
});

Route::get('/team', 'TeamController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

