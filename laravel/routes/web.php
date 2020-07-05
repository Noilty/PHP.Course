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

Route::get('/', 'HomeController@index')->name('home');

//Route::get('/admin', 'Admin\IndexController@index')->name('admin');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function () {
    Route::get('/', 'IndexController@index')->name('admin');
    Route::get('/test', 'IndexController@test')->name('test');
});

Route::get('/news', 'NewsController@news')->name('news');
Route::get('/news/{id}', 'NewsController@newsOne')->name('newsOne');

