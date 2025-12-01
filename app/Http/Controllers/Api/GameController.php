<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {

        // with per ottenre tutte le relazioni
        $games = Game::with("category", "plattforms", "medias")->get();

        return response()->json(
            [
                "Sucess" => true,

                "data" => $games
            ]
        );
    }
}
