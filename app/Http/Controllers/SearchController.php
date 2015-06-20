<?php namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use App\BlogComment;
use App\ForumCategory;
use App\ForumReply;
use App\ForumTopic;
use App\GameInformation;
use App\GameInformationCategories;
use App\Http\Controllers\Controller;

use App\MediaPicture;
use App\MediaVideo;
use Illuminate\Http\Request;

class SearchController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('search.index');
	}

    public function post(Request $request){

        $q = $request->text;

        $blogs = Blog::whereRaw(
            "MATCH(title,body,tags) AGAINST(? IN BOOLEAN MODE)",
            array($q)
        )->get();

        $blog_categories = BlogCategory::whereRaw(
            "MATCH(name) AGAINST(? IN BOOLEAN MODE)",
            array($q)
        )->get();

        $blog_comments = BlogComment::whereRaw(
            "MATCH(comment) AGAINST(? IN BOOLEAN MODE)",
            array($q)
        )->get();

        $pictures = MediaPicture::whereRaw(
            "MATCH(title,caption,tags) AGAINST(? IN BOOLEAN MODE)",
            array($q)
        )->get();

        $videos = MediaVideo::whereRaw(
            "MATCH(title,caption,tags) AGAINST(? IN BOOLEAN MODE)",
            array($q)
        )->get();

        $game_information_categories = GameInformationCategories::whereRaw(
            "MATCH(title,subtitle,tags) AGAINST(? IN BOOLEAN MODE)",
            array($q)
        )->get();

        $game_information = GameInformation::whereRaw(
            "MATCH(title,body,tags) AGAINST(? IN BOOLEAN MODE)",
            array($q)
        )->get();


        $forum_categories = ForumCategory::whereRaw(
            "MATCH(name,description) AGAINST(? IN BOOLEAN MODE)",
            array($q)
        )->get();

        $forum_topics = ForumTopic::whereRaw(
            "MATCH(name) AGAINST(? IN BOOLEAN MODE)",
            array($q)
        )->get();

        $forum_replies = ForumReply::whereRaw(
            "MATCH(body) AGAINST(? IN BOOLEAN MODE)",
            array($q)
        )->get();

        return view('search.index', compact(
            'blogs',
            'blog_categories',
            'blog_comments',
            'pictures',
            'videos',
            'game_information_categories',
            'game_information',
            'forum_categories',
            'forum_topics',
            'forum_replies'));
        //return redirect()->route('search.index', compact('blogs'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
