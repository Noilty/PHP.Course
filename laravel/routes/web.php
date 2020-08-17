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

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function () {
    Route::get('/','IndexController@index')->name('index');
    Route::get('/test1','IndexController@test1')->name('test1');
    Route::get('/test2','IndexController@test2')->name('test2');
});

//Route::get('/admin','Admin\IndexController@index')->name('admin');
//Route::get('/test1','Admin\IndexController@test1')->name('test1');
//Route::get('/test2','Admin\IndexController@test2')->name('test2');

Route::group([
    'prefix' => 'news',
    'as' => 'news.'
], function () {
    Route::get('/','NewsController@newsAll')->name('all');
    Route::get('/categories','NewsController@newsCategories')->name('categories');
    Route::get('/{id}','NewsController@newsOne')->name('one');
    Route::get('/categories/{id}','NewsController@newsCategoriesId')->name('allCategory');

});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
