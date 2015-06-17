<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ForumCategory;
use Illuminate\Http\Request;

class ForumCategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        dd('test');
		$forumcategories = ForumCategory::all();

		return view('forumcategories.index', compact('forumcategories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('forumcategories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$forumcategory = new ForumCategory();

		

		$forumcategory->save();

		return redirect()->route('forumcategories.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($name)
	{
        $category = ForumCategory::where('name', '=', $name)->first();
        $topics = ForumTopic::where('category_id', '=', $category->id)->paginate(25);

        return view('forum.category', compact('topics', 'category'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$forumcategory = ForumCategory::findOrFail($id);

		return view('forumcategories.edit', compact('forumcategory'));
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
		$forumcategory = ForumCategory::findOrFail($id);

		

		$forumcategory->save();

		return redirect()->route('forumcategories.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$forumcategory = ForumCategory::findOrFail($id);
		$forumcategory->delete();

		return redirect()->route('forumcategories.index')->with('message', 'Item deleted successfully.');
	}

}
