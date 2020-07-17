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
    Route::get('/test2', 'IndexController@test2')->name('test2');
    Route::get('/test3', 'IndexController@test3')->name('test3');
    Route::get('/test4', 'IndexController@test4')->name('test4');
//    Route::get('/news/add', 'IndexController@addNews')->name('addNews');
    Route::match(['post', 'get'], '/news/add', 'IndexController@addNews')->name('addNews');
    Route::get('/news/add2', 'IndexController@addNews2')->name('addNews2');
});

Route::group([
    'prefix' => 'news',
    'as' => 'news.'
], function () {
    Route::get('/all', 'NewsController@news')->name('all');
    Route::get('/category/all', 'NewsController@categories')->name('categories');
    Route::get('/{id}', 'NewsController@newsOne')->name('one');
    Route::get('/category/{id}', 'NewsController@categoryOne')->name('categoryOne');
});




Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
