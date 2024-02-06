<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\MangaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[AnimeController::class,"index"])->name("home");

Route::get("/anime/{id}",[AnimeController::class,"animeByGenre"])->name("genre");

Route::get("manga",[MangaController::class,"manga"])->name("manga");

Route::get("test1", function () {

    return view("test1");
});