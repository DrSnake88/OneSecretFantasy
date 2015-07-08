<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ForumTopic as Topic;
use Cocur\Slugify\Slugify;
use Illuminate\Http\Request;

class ForumTopicController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index( $category_id )
	{
		$topics = Topic::where('category_id', '=', $category_id)->get();

		return view('admin.forum.topics.index', compact('topics'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.forum.topics.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
        $slugify = new Slugify();
		$topic = new Topic();

		$topic->name = $request->input("name");
        $topic->slug = $slugify->slugify($request->input('name'));
        $topic->category_id = $request->input("category_id");
        $topic->user_id = $request->input("user_id");

		$topic->save();

		return redirect()->route('admin.forum.topic.index', $topic->category_id)->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$topic = Topic::where('slug', '=', $slug);

		return view('admin.forum.topics.show', compact('topic'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$topic = Topic::findOrFail($id);

		return view('admin.forum.topics.edit', compact('topic'));
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
        $slugify = new Slugify();
		$topic = Topic::findOrFail($id);

		$topic->name = $request->input("name");
        $topic->slug = $slugify->slugify($request->input('name'));
        $topic->category_id = $request->input("category_id");
        $topic->user_id = $request->input("user_id");

		$topic->save();

		return redirect()->route('admin.forum.topic.index', $topic->category_id)->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$topic = Topic::findOrFail($id);
		$topic->delete();

		return redirect()->route('admin.forum.topic.index', $topic->category_id)->with('message', 'Item deleted successfully.');
	}

}
