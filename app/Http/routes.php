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

/**
 * Root page.
 */
Route::get('/', function()
{
	return redirect('posts');
});

/**
 * About page.
 */
Route::get('about', function()
{
	return view('pages.about');
});

/**
 * Post routes.
 */
Route::post('posts', 'PostsController@store');
Route::get('posts', 'PostsController@index');
Route::get('create', 'PostsController@create');
Route::patch('posts/edit/{posts}', 'PostsController@update');
Route::get('posts/{posts}', 'PostsController@show');
Route::put('posts/edit/{posts}', 'PostsController@update');
Route::get('posts/edit/{posts}', 'PostsController@edit');

/*
 * Auth route.
 */
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);