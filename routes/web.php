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

Route::get('/', 'PhotoController@index')->name('accueil');

Route::get('/show/{id}', 'PhotoController@show')->name('show');

Route::group(['prefix' => 'admin'], function(){

    Route::get('/', 'PhotoAdminController@index')->name('admin');

    Route::get('/create-photo', 'PhotoAdminController@create')->name('create');

    Route::get('/edit-photo/{id}', 'PhotoAdminController@show')->name('edit');

    Route::put('/update-photo/{id}', 'PhotoAdminController@update')->name('update');

    Route::get('/delete-photo/{id}', 'PhotoAdminController@destroy')->name('delete');

    Route::post('/save-photo', 'PhotoAdminController@store')->name('save');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
