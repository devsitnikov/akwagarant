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
Route::get('/blog/{article}', 'SiteController@article')->name('article');

Auth::routes();

/**
 * Роуты для админки
 */
Route::group(['prefix'=>'panel', 'middleware'=>'auth'], function() {
    Route::get('/', 'Admin\AdminController@index');
    Route::post('/addcategory', 'CategoryController@save')->name('addCategory');
    Route::post('/deletecategory', 'CategoryController@deleteCategory')->name('deleteCategory');
    Route::post('/addarticle', 'ArticleController@save')->name('addArticle');
    Route::post('/deletearticle', 'ArticleController@deleteArticles')->name('deleteArticle');
    Route::post('/udatearticle', 'ArticleController@updateArticle')->name('updateArticle');
    Route::get('/blog', 'Admin\AdminController@blog')->name('manageblog');
    Route::get('/filemanager', 'Admin\AdminController@filemanager')->name('filemanager');
    Route::get('/editor/add', 'Admin\EditorController@add')->name('addeditor');
    Route::get('/editor/edit/{article}', 'Admin\EditorController@edit')->name('editeditor');
});
Route::get('/home', 'HomeController@index')->name('home');
