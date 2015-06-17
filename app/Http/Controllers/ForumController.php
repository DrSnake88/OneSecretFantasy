<?php namespace App\Http\Controllers;

use App\ForumCategory;
use App\ForumReply;
use App\ForumSection;
use App\ForumTopic;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class ForumController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $sections = ForumSection::all();
        $categories = ForumCategory::all();

		return view('forum.index', compact('categories', 'sections'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($category)
	{
        $category = ForumCategory::where('name', '=', $category)->first();
		return view('forum.create_topic', compact('category'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

    public function storeTopic(Request $request)
    {
        if (Auth::check()) {
            $category = ForumCategory::findOrFail($request->category_id);
            $last_topic = ForumTopic::orderBy('created_at', 'DESC')->first();

            $slug = $last_topic->id . '-'. str_replace(' ', '-', $request->title);

            $topic = ForumTopic::create(['name' => $request->title, 'slug' => $slug, 'user_id' => Auth::user()->id, 'category_id' => $category->id]);
            $topic->save();

            $reply = ForumReply::create(['body' => $request->message, 'topic_id' => $topic->id, 'user_id' => Auth::user()->id]);
            $reply->save();

            $topic->replies = ForumReply::where('topic_id', '=', $topic->id)->count();
            $topic->save();

            return Redirect::to(URL::to('/forum/' . $category->name . '/' . $slug));
        } else {
            return Redirect::back()->with('message', 'You dont have permission to view this page');
        }
    }

    public function storeReply(Request $request)
    {
        $reply = ForumReply::create(['body' => $request->message, 'user_id' => Auth::user()->id, 'topic_id' => $request->topic_id]);
        $reply->save();

//        $replies = ForumReply::where('topic_id', '=', $request->topic_id)->get();
        $topic = ForumTopic::find($request->topic_id);

        $topic->replies = ForumReply::where('topic_id', '=', $request->topic_id)->count();
        $topic->save();

        return Redirect::back()->with('message', 'Reply succesfully posted');
    }

	/**
	 * Display the specified resource.
     * Shows Forum Category
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
     * Display the specified resource.
     * Shows Forum Topic
     *
     * @param  int  $id
     * @return Response
     */
    public function topic($category, $topic)
    {
        $topic = ForumTopic::where('slug', '=', $topic)->first();
        $replies = ForumReply::where('topic_id', '=', $topic->id)->paginate(20);

        $topic->views++;
        $topic->save();

        return view('forum.topic', compact('topic', 'replies'));
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
