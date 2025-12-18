<?php

use App\Http\Controllers\Api\GameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get("/games", [GameController::class, "index"]);
Route::get("/game/{game}", [GameController::class, "show"]);
Route::get("/games/best-buy", [GameController::class, "bestBuy"]);
Route::get('games/{game}/related', [GameController::class, 'related']);
