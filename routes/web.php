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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::resource('/channels', 'ChannelsController');
Route::resource('/admin/channels', 'AdminChannelsController');
Route::resource('/channels/{channel_id}/magazines', 'MagazinesController');
Route::resource('/admin/magazines', 'AdminMagazinesController');
Route::resource('/channels/magazines/{magazine_id}/articles', 'ArticlesController');
Route::get('/articles/create', 'ArticlesController@createArticle');
Route::resource('/admin/articles', 'AdminArticlesController');
Route::resource('/admin/categories', 'AdminCategoriesController');
Route::resource('/admin/users', 'AdminUsersController');
Route::get('/categories/{id}', 'CategoriesController@show');

// Route::get('/channels/{id}/magazines/create', 'MagazinesController@create');