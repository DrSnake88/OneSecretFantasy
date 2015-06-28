<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MediaVideo as Video;
use Illuminate\Http\Request;

class HomeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.videos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$video = new Video();

		$video->video = $request->input("video");
        $video->cover = $request->input("cover");
        $video->title = $request->input("title");
        $video->caption = $request->input("caption");
        $video->tags = $request->input("tags");

		$video->save();

		return redirect()->route('admin.media.videos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$video = Video::findOrFail($id);

		return view('admin.videos.show', compact('video'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$video = Video::findOrFail($id);

		return view('admin.videos.edit', compact('video'));
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
		$video = Video::findOrFail($id);

		$video->video = $request->input("video");
        $video->cover = $request->input("cover");
        $video->title = $request->input("title");
        $video->caption = $request->input("caption");
        $video->tags = $request->input("tags");

		$video->save();

		return redirect()->route('admin.media.videos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$video = Video::findOrFail($id);
		$video->delete();

		return redirect()->route('admin.media.videos.index')->with('message', 'Item deleted successfully.');
	}

}
