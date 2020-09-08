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

Route::get('/vue', function () {
    return view('vue');
})->name('vue');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'is_admin']
], function () {
    Route::match(['post','get'], '/profile', 'ProfileController@update')
    ->name('profile.update');
    Route::get('/','NewsController@index')->name('index');

    Route::match(['post', 'get'], '/news/add','NewsController@addNews')->name('add.news');
    Route::get('/news/{news}/update','NewsController@updateNews')->name('update.news');
    Route::post('/news/{news}/save','NewsController@saveNews')->name('save.news');
    //Route::get('/news/{news}/delete','NewsController@deleteNews')->name('delete.news');

    Route::get('/news/add2','IndexController@addNews2')->name('add.news2');
    Route::get('/test1','IndexController@test1')->name('test1');
    Route::get('/test2','IndexController@test2')->name('test2');
    Route::get('/test3','IndexController@test3')->name('test3');

    Route::resource('/news','NewsController')->except('show');
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
    Route::get('/{news}','NewsController@newsOne')->name('one');
    Route::get('/categories/{id}','NewsController@newsCategoriesId')->name('allCategory');

});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
