<?php

/* Welcome Route */

Route::get('/', function () {
  return view('welcome');
});


/* Register Route */

Route::get('/users/register', 'Auth\RegisterController@show');
Route::post('/users/register', 'Auth\RegisterController@register');


/* Logout Route */

Route::get('/users/logout', 'Auth\LoginController@logout')->name('logout');


/* Login Route */

Route::get('users/login', 'Auth\LoginController@show');
Route::post('users/login', 'Auth\LoginController@login');


/* Admin Route Group */

Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'manager'], function () {
  Route::get('/','AdminController@index')->name('admin');
  Route::get('users', 'UserController@index')->name('view-users');
  Route::get('users/{id}/edit','UserController@edit');
  Route::post('users/{id}/edit','UserController@update');
  
  Route::get('/roles','RolesController@index')->name('view-roles');
  Route::get('/roles/create','RolesController@create');
  Route::post('/roles/create','RolesController@store');
  
  /* CategoryController */
  Route::get('category','CategoryController@index')->name('category');
  Route::get('category/create','CategoryController@create')->name('add-cat');
  Route::post('category/create','CategoryController@store');
  
  Route::get('category/{id}/edit','CategoryController@edit');
  Route::post('category/{id}/edit','CategoryController@update');

});

/* Post */
Route::group(['prefix'=>'postcreator','namespace'=>'postcreator','middleware'=>'postware'],function (){
  
  Route::get('posts/create','PostController@create')->name('create-post');
  Route::post('posts/create','PostController@store');
  
  Route::get('posts','PostController@index')->name('show-posts');
  
  Route::get('posts/{id}/edit','PostController@edit');
  Route::post('posts/{id}/edit','PostController@update');
  Route::get('posts/{id}/show','PostController@show');
  Route::post('posts/{id}/show','CommentController@store');

});