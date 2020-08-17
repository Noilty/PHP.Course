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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::resource('News', 'NewsController@index');

Route::get('/','HomeController@index')->name('home');
Route::get('/admin','Admin\IndexController@index')->name('admin');

Route::get('/test1','Admin\IndexController@test1')->name('test1');
Route::get('/test2','Admin\IndexController@test2')->name('test2');

Route::get('/news','NewsController@news')->name('news');
Route::get('/news/{nId}','NewsController@newsOne');
