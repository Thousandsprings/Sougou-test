<?php

use Illuminate\Support\Facades\Route;

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

// Route::resource('posts', 'PostController');
//↑resourceを使うことで下の記述を省略することができる

Route::get('/posts', 'PostController@index')->name('posts.index');

Route::get('/posts/create', 'PostController@create')->name('posts.create');

//新規投稿保存
Route::post('/posts', 'PostController@store')->name('posts.store');

Route::get('/posts/{id}', 'PostController@show')->name('posts.show');

Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');

Route::put('/posts/{id}', 'PostController@update')->name('posts.update');

Route::delete('/posts/{id}', 'PostController@destroy')->name('posts.destroy');

Route::get('/comments/create/{post_id}', 'COmmentController@create')->name('comments.create');

Route::post('/comments/create/{post_id}', 'COmmentController@store')->name('comments.store');
