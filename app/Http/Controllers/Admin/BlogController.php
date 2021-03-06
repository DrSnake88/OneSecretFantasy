<?php namespace App\Http\Controllers\Admin;

use App\Blog;
use App\BlogComment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Cocur\Slugify\Slugify;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BlogController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$blogs = Blog::all();

		return view('admin.blogs.index', compact('blogs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.blogs.create');
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
		$blog = new Blog();

		$blog->title = $request->input("title");
        $blog->body = $request->input("body");
        $blog->slug = $slugify->slugify($request->input('title'));
        $blog->tags = $request->input('tags');

        if ($request->hasFile('image')) {
            $last_blog = Blog::orderBy('created_at', 'DESC')->first();
            $file = $request->file('image');
            if ($last_blog) {
                $id = $last_blog->id + 1;
                $name = str_replace('/', '', $id) . '.' . $file->getClientOriginalExtension();
            } else {
                $name = str_replace('/', '', '1') . '.' . $file->getClientOriginalExtension();
            }
            $path = '/img/blog/' . $name;
            $file->move(public_path() . '/img/blog', $name);

            Image::make( public_path($file->getRealPath()) )->fit(440, 300)->save(public_path() . '/img/blog/thumb/' . $name)->destroy();

            $blog->image = $path;
        }

		$blog->save();

		return redirect()->route('admin.blogs.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$blog = Blog::findOrFail($id);

		return view('admin.blogs.show', compact('blog'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$blog = Blog::findOrFail($id);

		return view('admin.blogs.edit', compact('blog'));
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
		$blog = Blog::findOrFail($id);

		$blog->title = $request->input("title");
        $blog->body = $request->input("body");
        $blog->slug = $slugify->slugify($request->input('title'));
        $blog->tags = $request->input('tags');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = str_replace('/', '', $blog->id) . '.' . $file->getClientOriginalExtension();
            $path = '/img/blog/' . $name;

            Image::make( $file->getRealPath() )->fit(220, 150)->save(public_path() . '/img/blog/thumb/' . $name);
            Image::make( $file->getRealPath() )->fit(220, 150)->save(public_path() . '/img/blog/thumb/' . $name);

            $file->move(public_path() . '/img/blog', $name);


//            Image::make( public_path($file->getRealPath()) )->fit(220, 150)->save('/img/blog/thumb/' . $name)->destroy();

            $blog->image = $path;
        }

		$blog->save();

		return redirect()->route('admin.blogs.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $comments = BlogComment::where('blog_id', '=', $id)->orderBy('created_at', 'DESC')->get();

        foreach ($comments as $comment) {
            $comment->delete();
        }

		$blog = Blog::findOrFail($id);
		$blog->delete();

		return redirect()->route('admin.blogs.index')->with('message', 'Item deleted successfully.');
	}

}
