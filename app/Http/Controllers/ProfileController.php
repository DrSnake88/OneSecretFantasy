<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller {

	/**
	 * Display a listing of the resource.
        *
        * @return Response
    */
	public function index()
    {
        $user = Auth::user();

        return view('profile.index', compact('user'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
	public function update(Request $request, $id)
	{

        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password != "") {
            if ($request->password == $request->password_again) {
                $user->password = Hash::make($request->password);
            } else {
                return Redirect::back()->with('error', 'Passwords do not match');
            }
        }


        if ($request->hasFile('avatar')) {

            $file = $request->file('avatar');
            $name = str_replace('/', '', bcrypt(Auth::user()->id)) . '.' . $file->getClientOriginalExtension();
            $path = '/img/avatars/' . $name;
            $file->move(public_path() . '/img/avatars', $name);
            $user->avatar = $path;
        }

        $user->save();

        return Redirect::back()->with('message', 'Profile successfully updated.');
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
