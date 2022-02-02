<?php

use Illuminate\Support\Facades\Routes;

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
Auth::routes();
Route::group(['middleware' => 'auth'], function(){
Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@delete');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories/{category}', 'CategoryController@index');
Route::get('/user', 'UserController@index');
Route::resource('/users', 'UserController');

Route::get('/comments/create', 'CommentController@create');
Route::post('/comments/{post}', 'CommentController@store');


});
