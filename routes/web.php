<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Game;

Route::get('/', function () {
    return redirect('games');
})->name('index');

Route::get('/games', function () {
    $games = Game::all();
    return view('games.index', compact('games'));
})->name('games');

Route::post('/games', function (Request $request) {
    $game =  $request->validate([
        'name' => 'required|string',
        'price' => 'required|numeric',
        'release_year' => 'required|integer'
    ]);

    Game::create($game);
    return redirect()->route('games');
});

Route::get('/games/create', function () {
    return view('games.create');
})->name('games.create');

Route::get('/games/{id}', function ($id) {
    return view('games.show', compact('id'));
})->name('games.show');

Route::get('/games/update/{id}', function ($id) {
    return view('games.update', compact('id'));
})->name('update');

Route::post('/games/update', function (Request $request) {
    $id = $request->input('id');
    $game = Game::find($id);
    $game->name = $request->input('name');
    $game->save();
    return view('games.update', compact('id'));
});
