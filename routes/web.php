<?php

use Illuminate\Support\Facades\Route;
use App\Models\Game;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', function () {
    $games = Game::all();
    $games = Game::where(['name' => 'kel'])->get();
    return view('games.index', compact('games'));
});

Route::get('/games/create', function (){
   return view('games.create');
});

