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
    return view('auth.login');
});



Auth::routes();

Route::get('/home', 'PostController@index')->name('home')->middleware('auth');

Route::get('/posts', 'PostController@create')->name('posts')->middleware('auth');

Route::post('posts', 'PostController@store')->name('add.post')->middleware('auth');

Route::get('/posts/{id}', 'PostController@show')->name('posts.show')->middleware('auth');

Route::get('/profile', 'ProfileController@profile')->name('profile')->middleware('auth');

Route::get('/categories', 'CategoryController@category')->name('category')->middleware('auth');

Route::post('/addCategory', 'CategoryController@addCategory')->name('addCat')->middleware('auth');

Route::post('comments/{post_id}', 'CommentController@store')->name('add.comment')->middleware('auth');

Route::get('/posts/{id}', 'PostController@show')->name('posts.show')->middleware('auth');


