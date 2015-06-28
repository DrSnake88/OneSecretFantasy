<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ForumSection;
use Illuminate\Http\Request;

class ForumSectionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sections = ForumSection::all();

		return view('admin.forum.sections.index', compact('sections'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.forum.sections.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$section = new ForumSection();

		$section->name = $request->input("name");
        $section->description = $request->input("description");

		$section->save();

		return redirect()->route('admin.forum.sections.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$section = ForumSection::findOrFail($id);

		return view('admin.forum.sections.show', compact('section'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$section = ForumSection::findOrFail($id);

		return view('admin.forum.sections.edit', compact('section'));
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
		$section = ForumSection::findOrFail($id);

		$section->name = $request->input("name");
        $section->description = $request->input("description");

		$section->save();

		return redirect()->route('admin.forum.sections.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$section = ForumSection::findOrFail($id);
		$section->delete();

		return redirect()->route('admin.forum.sections.index')->with('message', 'Item deleted successfully.');
	}

}
