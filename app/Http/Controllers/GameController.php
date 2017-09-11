<?php

namespace App\Http\Controllers;

use App\Game;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller {
    public function create () {
        $game = Game::create([
            'created_by' => Auth::user()->id,
        ]);

        return redirect()->route('game', [
            'game' => $game->id,
        ]);
    }

    public function show (Game $game) {
        $isOwner = Auth::user()->id === $game->created_by;
        if (!$isOwner) {
            return redirect()->route('home')->withErrors([
                'You are not part of that game!',
            ]);
        }
    }
}
