<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Http\Traits\ObfuscatesIds;

class Game extends Model {
    use ObfuscatesIds;

    protected $fillable = ['created_by', 'max_users'];
}
