<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard', [DashboardController::class, "getUser"]);
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get("/dashboard", [DashboardController::class, "getUser"])->middleware(["auth", "verified"])->name("dashboard");

Route::resource("game", GameController::class)->middleware(["auth", "verified"]);
Route::resource("category", CategoryController::class)->middleware(["auth", "verified"]);

require __DIR__ . '/auth.php';
