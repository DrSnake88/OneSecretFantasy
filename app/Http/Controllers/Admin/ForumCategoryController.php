<?php namespace App\Http\Controllers\Admin;

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
		$categories = ForumCategory::all();

		return view('admin.forum.categories.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.forum.categories.create');
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
		$category = new ForumCategory();

		$category->name = $request->input("name");
        $category->slug = $slugify->slugify($request->input('name'));
        $category->description = $request->input("description");

        if ($request->hasFile('image')) {
            $last_forum_category = ForumCategory::orderBy('created_at', 'DESC')->first();

            $file = $request->file('image');
            $id = $last_forum_category->id + 1;

            if ($last_forum_category) {
                $name = str_replace('/', '', bcrypt($id)) . '.' . $file->getClientOriginalExtension();
            } else {
                $name = str_replace('/', '', bcrypt('1')) . '.' . $file->getClientOriginalExtension();
            }

            $path = '/img/forum/categories/' . $name;
            $file->move(public_path() . '/img/forum/categories', $name);
            $category->image = $path;
        }

        $category->section_id = $request->input("section_id");

		$category->save();

		return redirect()->route('admin.forum.categories.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$category = ForumCategory::findOrFail($id);

		return view('admin.forum.categories.show', compact('category'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$category = ForumCategory::findOrFail($id);

		return view('admin.forum.categories.edit', compact('category'));
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
		$category = ForumCategory::findOrFail($id);

		$category->name = $request->input("name");
        $category->slug = $slugify->slugify($request->input('name'));
        $category->description = $request->input("description");


        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $name = str_replace('/', '', bcrypt($id)) . '.' . $file->getClientOriginalExtension();

            $path = '/img/forum/categories/' . $name;
            $file->move(public_path() . '/img/forum/categories', $name);
            $category->image = $path;
        }

        $category->section_id = $request->input("section_id");

		$category->save();

		return redirect()->route('admin.forum.categories.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$category = ForumCategory::findOrFail($id);
		$category->delete();

		return redirect()->route('admin.forum.categories.index')->with('message', 'Item deleted successfully.');
	}

}
