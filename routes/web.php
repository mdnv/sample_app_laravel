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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');

Route::get('/users', 'UsersController@index')->name('users_path');
// Route::post('/users', 'UsersController@create')->name('users_path'); 5
// Route::get('/users/new', 'UsersController@new')->name('new_user_path'); 4
Route::get('/users/{id}/edit', 'UsersController@edit')->name('edit_user_path');
Route::get('/users/{id}', 'UsersController@show')->name('user_path');
Route::patch('/users/{id}', 'UsersController@update')->name('user_path');
Route::put('/users/{id}', 'UsersController@update')->name('user_path');
Route::delete('/users/{id}', 'UsersController@destroy')->name('user_path');

Route::get('/users/{user_id}/comments', 'CommentController@index')->name('user_comments_path');
Route::post('/users/{user_id}/comments', 'CommentController@create')->name('user_comments_path');
Route::get('/users/{user_id}/comments/new', 'CommentController@new')->name('new_user_comment_path');
Route::get('/users/{user_id}/comments/{id}/edit', 'CommentController@edit')->name('edit_user_comment_path');
Route::get('/users/{user_id}/comments/{id}', 'CommentController@show')->name('user_comment_path');
Route::patch('/users/{user_id}/comments/{id}', 'CommentController@update')->name('user_comment_path');
Route::put('/users/{user_id}/comments/{id}', 'CommentController@update')->name('user_comment_path');
Route::delete('/users/{user_id}/comments/{id}', 'CommentController@destroy')->name('user_comment_path');

Route::post('/relationships/{id}', 'RelationshipsController@create')->name('relationships_path');
Route::delete('/relationships/{id}', 'RelationshipsController@destroy')->name('relationships_path');;

Route::get('/users/{user_id}/following', 'UsersController@following')->name('following_user_path');
Route::get('/users/{user_id}/followers', 'UsersController@followers')->name('followers_user_path');
