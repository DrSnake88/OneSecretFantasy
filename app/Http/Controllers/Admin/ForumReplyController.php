<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ForumReply as Reply;
use Illuminate\Http\Request;

class ForumReplyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index( $topic_id )
	{
		$replies = Reply::where('topic_id', '=', $topic_id)->get();

		return view('admin.forum.replies.index', compact('replies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.forum.replies.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$reply = new Reply();

		$reply->body = $request->input("body");
        $reply->topic_id = $request->input("topic_id");
        $reply->user_id = $request->input("user_id");

		$reply->save();

		return redirect()->route('admin.forum.reply.index', $reply->topic_id)->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$reply = Reply::findOrFail($id);

		return view('admin.forum.replies.show', compact('reply'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$reply = Reply::findOrFail($id);

		return view('admin.forum.replies.edit', compact('reply'));
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
		$reply = Reply::findOrFail($id);

		$reply->body = $request->input("body");
        $reply->topic_id = $request->input("topic_id");
        $reply->user_id = $request->input("user_id");

		$reply->save();

		return redirect()->route('admin.forum.reply.index', $reply->topic_id)->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$reply = Reply::findOrFail($id);
		$reply->delete();

		return redirect()->route('admin.forum.reply.index', $reply->topic_id)->with('message', 'Item deleted successfully.');
	}

}
