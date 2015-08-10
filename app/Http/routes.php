<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect()->route('posts.index');
});

// Posts
Route::get('posts/feed', 'PostsController@feed');
Route::resource("posts","PostsController");

// Comments - this could be cleaner
Route::resource("comments","CommentsController",['except' => ['show', 'create', 'edit']]);

// Authors
Route::get('authors/', 'AuthorsController@index');
Route::get('authors/index', 'AuthorsController@index');
Route::get('authors/{authors}/show', 'AuthorsController@show');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
