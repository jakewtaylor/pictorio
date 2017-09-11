<?php

namespace App\Http\Traits;

use App\Http\Classes\Hasher;

trait ObfuscatesIds {
    public function getObfuscatedIdAttribute () {
        return Hasher::encode($this->id);
    }
}
