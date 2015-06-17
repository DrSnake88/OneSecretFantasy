<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ForumReply;
use Illuminate\Http\Request;

class ForumReplyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$forumreplies = ForumReply::all();

		return view('forumreplies.index', compact('forumreplies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('forumreplies.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$forumreply = new ForumReply();

		

		$forumreply->save();

		return redirect()->route('forumreplies.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$forumreply = ForumReply::findOrFail($id);

		return view('forumreplies.show', compact('forumreply'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$forumreply = ForumReply::findOrFail($id);

		return view('forumreplies.edit', compact('forumreply'));
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
		$forumreply = ForumReply::findOrFail($id);

		

		$forumreply->save();

		return redirect()->route('forumreplies.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$forumreply = ForumReply::findOrFail($id);
		$forumreply->delete();

		return redirect()->route('forumreplies.index')->with('message', 'Item deleted successfully.');
	}

}
