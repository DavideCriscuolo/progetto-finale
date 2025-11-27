<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use App\Models\Plattform;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();




        return view("games.index", compact("games"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        $categories = Category::all();

        //prendiamo tutte le piattaforme per poterle passare alla view index 
        $plattforms = Plattform::all();
        return view("games.create", compact("categories", "plattforms"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newGame = new Game();
        $newGame->title = $request["title"];
        $newGame->editor = $request["editor"];
        $newGame->classification = $request["classification"];
        $newGame->plot = $request["plot"];
        $newGame->price = $request["price"];
        $newGame->category_id = $request["category_id"];
        $newGame->date = $request["date"];
        $newGame->save();

        $newGame->plattforms()->attach($request["plattforms"]);
        return redirect()->route("game.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view("games.show", compact("game"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {

        $categories = Category::all();

        //prendiamo tutte le piattaforme per poterle passare alla view index 
        $plattforms = Plattform::all();
        return view("games.edit", compact("game", "categories", "plattforms"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {

        $game->title = $request["title"];
        $game->editor = $request["editor"];
        $game->classification = $request["classification"];
        $game->plot = $request["plot"];
        $game->price = $request["price"];
        $game->category_id = $request["category_id"];
        $game->date = $request["date"];
        $game->update();

        $game->plattforms()->attach($request["plattforms"]);
        return redirect()->route("game.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route("game.index");
    }
}
