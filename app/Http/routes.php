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

Route::get('/', 'WelcomeController@index');
Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');



Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');
Route::get('users', 'UsersController@index');
Route::get('users/{id}', 'UsersController@show');


Route::get('test', function() {
	$users = DB::table('users')->get();

	$users = DB::select(DB::raw('SELECT * FROM users WHERE id = ?', array(1)));
	dd($users);
});
