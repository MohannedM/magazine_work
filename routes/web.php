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
Route::resource('/admin/channels', 'AdminChannelsController', ['as'=>'admin']);
Route::resource('/channels/{channel_id}/magazines', 'MagazinesController');
Route::resource('/admin/magazines', 'AdminMagazinesController', ['as'=>'admin']);
Route::resource('/magazines/{magazine_id}/articles', 'ArticlesController');
Route::get('/articles/create', 'ArticlesController@createArticle');
Route::resource('/admin/articles', 'AdminArticlesController', ['as'=>'admin']);
Route::resource('/admin/categories', 'AdminCategoriesController');
Route::resource('/admin/users', 'AdminUsersController');
Route::get('/categories/{id}', 'CategoriesController@show');
Route::resource('/articles/{article_id}/photos', 'PhotosController');
Route::resource('/admin/sponsors', 'AdminSponsorsController');
Route::get('/admin/magazines/{magazine_id}/sponsors', 'AdminMagazinesController@addSponsor');
Route::put('/admin/magazines/{magazine_id}/attach/{sponsor_id}', 'AdminMagazinesController@attachSponsor');
Route::put('/admin/magazines/{magazine_id}/detach/{sponsor_id}', 'AdminMagazinesController@detachSponsor');
Route::resource('/articles/{article_id}/comments', 'CommentsController');
Route::resource('/admin/comments', 'AdminCommentsController');
Route::resource('/comments/{comment_id}/replies', 'RepliesController');
Route::resource('/admin/replies', 'AdminRepliesController');

// Route::get('/channels/{id}/magazines/create', 'MagazinesController@create');