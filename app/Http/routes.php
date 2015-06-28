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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/contact', 'HomeController@contact');

Route::post('contact', ['as' => 'contact.store', 'uses' => 'HomeController@store']);
Route::post('search', 'SearchController@post');
Route::post('subscriber', ['as' => 'subscriber.store', 'uses' => 'SubscriberController@store']);

Route::get('search', 'SearchController@index');

Route::resource("blogs","BlogController");
Route::resource("blog_comments","BlogCommentController");

//Route::resource("forum/{category}/{topic}","ForumTopicController");
//Route::resource("forum/","ForumCategoryController");
// FORUM
Route::post('forum/category', ['as' => 'topic.store', 'uses' => 'ForumController@storeTopic']);
Route::post('forum/topic', ['as' => 'reply.store', 'uses' => 'ForumController@storeReply']);

Route::get('forum/{category}/create', ['as' => 'topic.create', 'uses' => 'ForumController@create']);
Route::get('forum/{category}/{topic}', ['as' => 'forum.topic', 'uses' => 'ForumController@topic']);

Route::resource("forum","ForumController");

Route::resource("media","MediaController");
Route::resource("game","GameController");

//Route::resource("search","SearchController");

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'auth'], function() {
    Route::resource('profile', 'ProfileController');
    Route::get('/sign-out', ['as' => 'account.sign-out', 'uses' => 'Auth\AuthController@getLogout']);

    Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function ()
    {
        Route::get('admin/blogs/{blog}/comments', ['as' => 'admin.blog.comments.index', 'uses' => 'Admin\BlogCommentController@index']);
        Route::resource("admin/blogs/comments",'Admin\BlogCommentController');
        Route::resource("admin/blogs",'Admin\BlogController');

        Route::resource("admin/media/pictures",'Admin\PictureController');
        Route::resource("admin/media/videos",'Admin\VideoController');

        Route::resource("admin/game/categories",'Admin\GameCategoryController');
        Route::resource("admin/game/information",'Admin\GameController');

        Route::resource("admin/users",'Admin\UserController');
    });
});

Route::get('login/{provider}', 'Auth\AuthController@loginWithProvider');
