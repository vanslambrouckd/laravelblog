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

Route::get('/', function() {
   return 'Home page';
});
Route::get('/', 'WelcomeController@index');
//Route::get('/', ['middleware' => 'auth', 'uses' => 'WelcomeController@index']); //zo kan je ook middleware assignen (ipv in controller constructor)

/*
Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create'); //moet VOOR articles/{id} staan!!
Route::get('articles/{id}', 'ArticlesController@show'); //volgorde speelt een rol!!
Route::post('articles', 'ArticlesController@store');
Route::get('articles/{id}/edit', 'ArticlesController@edit');
*/
Route::resource('articles', 'ArticlesController'); //dit vervangt al het bovenstaande, resultaat kan je zien via php artisan route:list

Route::get('home', 'HomeController@index');
Route::get('contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');

Route::get('users', 'UsersController@index');
Route::get('users/{id}/articles', 'UsersController@show_articles');
Route::get('users/{id}', 'UsersController@show');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('managerslist', ['middleware' => 'manager', function() {
    /*
     * change app\Http\User.php isATeamManager() return val
     */
    return 'this page may only be viewed by managers (check using middleware)';
}]);