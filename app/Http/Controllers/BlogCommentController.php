<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\BlogComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogCommentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$blogcomments = BlogComment::all();

		return view('blogcomments.index', compact('blogcomments'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('blogcomments.create');
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

        $blogcomment->comment = $request->comment;
        $blogcomment->blog_id = $request->blog_id;

        if (Auth::user()) {
            $blogcomment->user_id = Auth::user()->id;
        } else {
            $blogcomment->name = $request->name;
            $blogcomment->email = $request->email;
        }

		$blogcomment->save();

		return redirect()->back()->with('message', 'Comment posted.');
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

		return view('blogcomments.show', compact('blogcomment'));
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

		return view('blogcomments.edit', compact('blogcomment'));
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

		

		$blogcomment->save();

		return redirect()->route('blogcomments.index')->with('message', 'Item updated successfully.');
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

		return redirect()->route('blogcomments.index')->with('message', 'Item deleted successfully.');
	}

}
