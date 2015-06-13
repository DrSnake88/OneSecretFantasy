<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MediaPicture;
use Illuminate\Http\Request;

class MediaPictureController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mediapictures = MediaPicture::all();

		return view('mediapictures.index', compact('mediapictures'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('mediapictures.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$mediapicture = new MediaPicture();

		

		$mediapicture->save();

		return redirect()->route('mediapictures.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$mediapicture = MediaPicture::findOrFail($id);

		return view('mediapictures.show', compact('mediapicture'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mediapicture = MediaPicture::findOrFail($id);

		return view('mediapictures.edit', compact('mediapicture'));
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
		$mediapicture = MediaPicture::findOrFail($id);

		

		$mediapicture->save();

		return redirect()->route('mediapictures.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$mediapicture = MediaPicture::findOrFail($id);
		$mediapicture->delete();

		return redirect()->route('mediapictures.index')->with('message', 'Item deleted successfully.');
	}

}
