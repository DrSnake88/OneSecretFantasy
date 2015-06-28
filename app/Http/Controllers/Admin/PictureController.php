<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MediaPicture as Picture;
use Illuminate\Http\Request;

class PictureController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pictures = Picture::all();

		return view('admin.pictures.index', compact('pictures'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.pictures.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$picture = new Picture();

		$picture->image = $request->input("image");
        $picture->title = $request->input("title");
        $picture->caption = $request->input("caption");
        $picture->tags = $request->input("tags");

		$picture->save();

		return redirect()->route('admin.media.pictures.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$picture = Picture::findOrFail($id);

		return view('admin.pictures.show', compact('picture'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$picture = Picture::findOrFail($id);

		return view('admin.pictures.edit', compact('picture'));
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
		$picture = Picture::findOrFail($id);

		$picture->image = $request->input("image");
        $picture->title = $request->input("title");
        $picture->caption = $request->input("caption");
        $picture->tags = $request->input("tags");

		$picture->save();

		return redirect()->route('admin.media.pictures.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$picture = Picture::findOrFail($id);
		$picture->delete();

		return redirect()->route('admin.media.pictures.index')->with('message', 'Item deleted successfully.');
	}

}
