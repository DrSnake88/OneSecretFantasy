<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\GameInformationCategories as GameCategory;
use Illuminate\Http\Request;

class GameCategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$gamecategories = GameCategory::all();

		return view('admin.gamecategories.index', compact('gamecategories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.gamecategories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$gamecategory = new GameCategory();

		$gamecategory->title = $request->input("title");
        $gamecategory->subtitle = $request->input("subtitle");
        $gamecategory->tags = $request->input("tags");

		$gamecategory->save();

		return redirect()->route('admin.game.categories.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$gamecategory = GameCategory::findOrFail($id);

		return view('admin.gamecategories.show', compact('gamecategory'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$gamecategory = GameCategory::findOrFail($id);

		return view('admin.gamecategories.edit', compact('gamecategory'));
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
		$gamecategory = GameCategory::findOrFail($id);

		$gamecategory->title = $request->input("title");
        $gamecategory->subtitle = $request->input("subtitle");
        $gamecategory->tags = $request->input("tags");

		$gamecategory->save();

		return redirect()->route('admin.game.categories.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$gamecategory = GameCategory::findOrFail($id);
		$gamecategory->delete();

		return redirect()->route('admin.game.categories.index')->with('message', 'Item deleted successfully.');
	}

}
