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
 * First page
 */
Route::get('/', function()
{
	return redirect('posts');
});

Route::get('about', function()
{
	return view('pages.about');
});

/**
 * Article route
 */
Route::post('posts', 'PostsController@store');
Route::get('posts', 'PostsController@index');
Route::get('create', 'PostsController@create');
Route::patch('posts/edit/{posts}', 'PostsController@update');
Route::get('posts/{posts}', 'PostsController@show');
Route::put('posts/edit/{posts}', 'PostsController@update');
Route::get('posts/edit/{posts}', 'PostsController@edit');
//Route::resource('posts', 'PostsController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);