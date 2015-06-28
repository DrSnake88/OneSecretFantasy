<?php namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\BlogComment;
use Illuminate\Http\Request;

class BlogCommentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index( $id )
	{
        $blog = Blog::find($id);
		$blogcomments = BlogComment::where('blog_id', '=', $blog->id)->get();

		return view('admin.blogcomments.index', compact('blogcomments', 'blog'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/blogcomments.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$blogcomment = new BlogComment();

		$blogcomment->title = $request->input("title");
        $blogcomment->body = $request->input("body");

		$blogcomment->save();

		return redirect()->route('admin.blog.comments.index', $blogcomment->blog_id)->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$blogcomment = BlogComment::findOrFail($id);

		return view('admin.blogcomments.show', compact('blogcomment'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$blogcomment = BlogComment::findOrFail($id);

		return view('admin.blogcomments.edit', compact('blogcomment'));
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
		$blogcomment = BlogComment::findOrFail($id);

		$blogcomment->comment = $request->input("comment");

		$blogcomment->save();

		return redirect()->route('admin.blog.comments.index', $blogcomment->blog_id)->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$blogcomment = BlogComment::findOrFail($id);
		$blogcomment->delete();

		return redirect()->route('admin.blog.comments.index', $blogcomment->blog_id)->with('message', 'Item deleted successfully.');
	}

}
