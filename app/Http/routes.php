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

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

Route::get('blogs/feed', function(){

    // create new feed
    $feed = Feed::make();

    // cache the feed for 60 minutes (second parameter is optional)
    $feed->setCache(0);

    // check if there is cached feed and build new only if is not
    if (!$feed->isCached())
    {
        // creating rss feed with our most recent 20 posts
        $blogs = DB::table('blogs')->orderBy('created_at', 'desc')->take(20)->get();

        // set your feed's title, description, link, pubdate and language
        $feed->title = 'One Secret Fantasy Blog';
        $feed->description = 'Gain every update on One Secret Fantasy';
        $feed->logo = 'http://www.onesecretfantasy.com/img/logo/logo-rounded.png';
        $feed->link = URL::to('blogs');
        $feed->setDateFormat('datetime'); // 'datetime', 'timestamp' or 'carbon'
        $feed->pubdate = $blogs[0]->created_at;
        $feed->lang = 'en';
        $feed->setShortening(true); // true or false
        $feed->setTextLimit(100); // maximum length of description text

        foreach ($blogs as $blog)
        {
            $image = '<img width="100%" style="width:100%;" src="' . URL::to($blog->image) . '">';
            $description = '<p>' . $image . '</p>';
            $description .= '<p>' . Str::words($blog->body, 100) . '</p>';

            // set item's title, author, url, pubdate, description and content
            $feed->add($blog->title, 'One Secret Fantasy', URL::to('/blogs/'. $blog->slug), $blog->created_at, $description, $blog->body);
        }

    }

    // first param is the feed format
    // optional: second param is cache duration (value of 0 turns off caching)
    // optional: you can set custom cache key with 3rd param as string
    return $feed->render('atom');

    // to return your feed as a string set second param to -1
    // $xml = $feed->render('atom', -1);

});

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
});


Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function ()
{
    Route::get('admin/blogs/{blog}/comments', ['as' => 'admin.blog.comments.index', 'uses' => 'Admin\BlogCommentController@index']);
    Route::resource("admin/blogs/comments",'Admin\BlogCommentController');
    Route::resource("admin/blogs",'Admin\BlogController');

    Route::post('admin/media/pictures/mutliple', ['as' => 'admin.media.pictures.multiple', 'uses' => 'Admin\PictureController@multiple']);
    Route::resource("admin/media/pictures",'Admin\PictureController');
    Route::resource("admin/media/videos",'Admin\VideoController');

    Route::resource("admin/game/categories",'Admin\GameCategoryController');
    Route::resource("admin/game/information",'Admin\GameController');

    Route::resource("admin/users",'Admin\UserController');

    Route::resource("admin/forum/sections",'Admin\ForumSectionController');
    Route::resource("admin/forum/categories",'Admin\ForumCategoryController');

    Route::get("admin/forum/{category}/topics",['as' => 'admin.forum.topic.index', 'uses' => 'Admin\ForumTopicController@index']);
    Route::resource("admin/forum/topics", 'Admin\ForumTopicController');

    Route::get("admin/forum/{topic}/replies",['as' => 'admin.forum.reply.index', 'uses' => 'Admin\ForumReplyController@index']);
    Route::resource("admin/forum/replies", 'Admin\ForumReplyController');


    Route::get('admin', ['as' => 'admin.index', 'uses' => 'Admin\HomeController@index']);
});

Route::get('login/{provider}', 'Auth\AuthController@loginWithProvider');

///// SITEMAP
Route::get('sitemap', 'SitemapController@index');
Route::get('sitemap/blogs', 'SitemapController@blog');
Route::get('sitemap/forum', 'SitemapController@forum');
