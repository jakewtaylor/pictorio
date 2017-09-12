<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use App\Http\Traits\ObfuscatesIds;
use App\Events\GameCreated;

class Game extends Model {
    use ObfuscatesIds, Notifiable;

    protected $fillable = ['created_by', 'max_users'];

    protected $dispatchesEvents = [
        'created' => GameCreated::class,
    ];

    /*
     * Relationship
     */
    public function players () {
        return $this->belongsToMany(User::class);
    }
}
