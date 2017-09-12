<?php

namespace App\Events;

use App\Game;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class GameCreated implements ShouldBroadcast {
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $game;

    public function __construct (Game $game) {
        $this->game = $game;
    }

    public function broadcastOn () {
        return new PrivateChannel("game.{$this->game->obfuscated_id}");
    }
}
