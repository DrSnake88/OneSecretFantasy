<?php namespace App\Http\Controllers;

use App\Blog;
use App\ContactRequest;
use App\MediaPicture;
use App\MediaVideo;
use App\Subscriber;
use Illuminate\Http\Request;
use Thujohn\Twitter\Facades\Twitter;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
//		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $pictures = MediaPicture::orderBy('created_at', 'DESC')->where('featured', '=', 1)->take(2)->get();
        $videos = MediaVideo::orderBy('created_at', 'DESC')->take(1)->get();

        $blogs = Blog::orderBy('created_at', 'DESC')->take(3)->get();
        $tweets = json_decode(Twitter::getUserTimeline(['screen_name' => 'OSFtheGame', 'count' => 2, 'format' => 'json']));

        foreach ($blogs as $blog) {
            $blog->image = str_replace('/img/blog/', '/img/blog/thumb/', $blog->image);
        }

		return view('home/home', compact('pictures', 'videos', 'blogs', 'tweets'));
	}

    public function contact()
    {
        return view('home/contact');
    }

    public function store (Request $request){
        $contactRequest = new ContactRequest();
        $contactRequest->name = $request->name;
        $contactRequest->email = $request->email;
        $contactRequest->message = $request->message;

        $contactRequest->save();

        if ($request->subscribe == "on") {
            $subscribe = Subscriber::create([
                'email' => $request->email
            ]);
            $subscribe->save();
        }

        return redirect()->back()->with('message', 'Message sent.');
    }
}
