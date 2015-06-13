<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MediaVideo;
use Illuminate\Http\Request;

class MediaVideoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mediavideos = MediaVideo::all();

		return view('mediavideos.index', compact('mediavideos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('mediavideos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$mediavideo = new MediaVideo();

		

		$mediavideo->save();

		return redirect()->route('mediavideos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$mediavideo = MediaVideo::findOrFail($id);

		return view('mediavideos.show', compact('mediavideo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mediavideo = MediaVideo::findOrFail($id);

		return view('mediavideos.edit', compact('mediavideo'));
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
		$mediavideo = MediaVideo::findOrFail($id);

		

		$mediavideo->save();

		return redirect()->route('mediavideos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$mediavideo = MediaVideo::findOrFail($id);
		$mediavideo->delete();

		return redirect()->route('mediavideos.index')->with('message', 'Item deleted successfully.');
	}

}
