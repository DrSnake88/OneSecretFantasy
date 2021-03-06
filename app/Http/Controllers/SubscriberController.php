<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Subscriber;
use Illuminate\Http\Request;

class subscriberController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$subscribers = subscriber::all();

		return view('subscribers.index', compact('subscribers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('subscribers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
        $this->validate($request, [
            'EMAIL'   => 'required|email'
        ]);

		$subscriber = new Subscriber();
        $subscriber->email = $request->EMAIL;
		

		$subscriber->save();

//        ->with('subscribed', 'Successfully subscribed.')
		return redirect()->away("//onesecretfantasy.us8.list-manage.com/subscribe/post?u=86ac611bda021b84f6a76d655&amp;id=b54a5005c6")
            ->with($request->EMAIL);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$subscriber = subscriber::findOrFail($id);

		return view('subscribers.show', compact('subscriber'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$subscriber = subscriber::findOrFail($id);

		return view('subscribers.edit', compact('subscriber'));
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
		$subscriber = subscriber::findOrFail($id);

		

		$subscriber->save();

		return redirect()->route('subscribers.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$subscriber = subscriber::findOrFail($id);
		$subscriber->delete();

		return redirect()->route('subscribers.index')->with('message', 'Item deleted successfully.');
	}

}
