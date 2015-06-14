<?php namespace App\Http\Controllers;

use App\BlogComment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Blog;
use Illuminate\Http\Request;
use Thujohn\Twitter\Facades\Twitter;

class BlogController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$blogs = Blog::all();

		return view('blogs.index', compact('blogs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('blogs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$blog = new Blog();

		$blog->title = $request->input("title");
        $blog->body = $request->input("body");

		$blog->save();

		return redirect()->route('blogs.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$blog = Blog::findOrFail($id);
        $blog->tags = $blog->getTags();

        $related = $blog->getRelated();

        $blog_comments = BlogComment::where('blog_id', '=', $id)->get();
        $tweets = json_decode(Twitter::getUserTimeline(['screen_name' => 'OSFtheGame', 'count' => 6, 'format' => 'json']));

		return view('blogs.show', compact('blog', 'blog_comments', 'tweets', 'related'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$blog = Blog::findOrFail($id);

		return view('blogs.edit', compact('blog'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$blog = Blog::findOrFail($id);

		$blog->title = $request->input("title");
        $blog->body = $request->input("body");

		$blog->save();

		return redirect()->route('blogs.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$blog = Blog::findOrFail($id);
		$blog->delete();

		return redirect()->route('blogs.index')->with('message', 'Item deleted successfully.');
	}

}
