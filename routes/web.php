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

Route::get('/', 'SiteController@index')->name('index');
Route::get('/blog', 'SiteController@blog')->name('blog');
Route::get('/blog/{slug}', 'SiteController@article');

Auth::routes();

/**
 * Роуты для админки
 */
Route::group(['prefix'=>'panel', 'middleware'=>'auth', 'namespace' => 'Admin'], function() {
    Route::get('/', 'AdminController@index');
    Route::get('/filemanager', 'AdminController@filemanager')->name('filemanager');
});
Route::get('/home', 'HomeController@index')->name('home');
