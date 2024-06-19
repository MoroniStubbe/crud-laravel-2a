<?php

use Illuminate\Support\Facades\Route;
use App\Models\Game;

Route::get('/', function () {
    return redirect('games');
});

Route::get('/games', function () {
    $games = Game::all();
    return view('games.index', compact('games'));
})->name('games');

Route::get('/games/{id}', function ($id) {
    $games = Game::all();
    return view('games.show', compact('games'));
})->name('games');

Route::post('/games', function (\Illuminate\Http\Request $request) {
    $game =  $request->validate([
        'name' => 'required|string',
    ]);

    Game::create($game);
    return redirect()->route('/games');
});

Route::get('/games/create', function () {
    return view('games.create');
});
