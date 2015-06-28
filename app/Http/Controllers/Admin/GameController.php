<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\GameInformation as Game;
use Illuminate\Http\Request;

class GameController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$games = Game::all();

		return view('admin.games.index', compact('games'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.games.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$game = new Game();

		$game->title = $request->input("title");
        $game->body = $request->input("body");
        $game->tags = $request->input("tags");
        $game->game_information_category_id = $request->input("category");

		$game->save();

		return redirect()->route('admin.game.information.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$game = Game::findOrFail($id);

		return view('admin.games.show', compact('game'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$game = Game::findOrFail($id);

		return view('admin.games.edit', compact('game'));
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
		$game = Game::findOrFail($id);

		$game->title = $request->input("title");
        $game->body = $request->input("body");
        $game->tags = $request->input("tags");
        $game->game_information_category_id = $request->input("category");

		$game->save();

		return redirect()->route('admin.game.information.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$game = Game::findOrFail($id);
		$game->delete();

		return redirect()->route('admin.game.information.index')->with('message', 'Item deleted successfully.');
	}

}
