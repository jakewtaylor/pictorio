<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

use App\Game;

Broadcast::channel('game.{game}', function ($user, Game $game) {
    $isOwner = $user->id === $game->created_by;

    $isInvited = $game->players->contains(function ($u) use ($user) {
        return $u->id === $user->id;
    });

    return $isInvited || $isOwner;
});
