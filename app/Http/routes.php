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

//Route::get('/', 'WelcomeController@index');

Route::get('/', 'HomeController@index');
Route::get('/contact', 'HomeController@contact');
Route::get('/info', function() {
    return print_r(get_loaded_extensions());
});

Route::resource("blogs","BlogController");
Route::resource("blog_comments","BlogCommentController");
Route::resource("forum","ForumController");
Route::resource("media","MediaController");
Route::resource("game","GameController");

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
