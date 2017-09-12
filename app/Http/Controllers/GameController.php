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

        $game->players()->attach(Auth::user());

        return redirect()->route('game', [
            'game' => $game->id,
        ]);
    }

    public function show (Game $game) {
        $uid = Auth::user()->id;

        $isOwner = $uid === $game->created_by;

        $isPlayer = $game->players->contains(function ($u) use ($uid) {
            return $u->id === $uid;
        });

        if (!$isOwner && !$isPlayer) {
            return redirect()->route('home')->withErrors(['You are not part of that game!']);
        }

        return view('app.game', [
            'game' => $game,
        ]);
    }
}
