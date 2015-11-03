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

Route::get('/', 'Auth\AuthController@getLogin');
Route::get('/home', function () {
    return redirect('posts/');
});
Route::get('/about', function () {
    return view('about');
});

Route::controllers([
	'posts' => 'PostController',
	'comments' => 'CommentController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	'img' => 'ImageController',
]);
