<?php

namespace App\Http\Classes;

use Hashids\Hashids;

class Hasher {
    public static function encode (...$args) {
        return app(Hashids::class)->encode(...$args);
    }

    public static function decode ($hash) {
        return is_int($hash)
            ? $hash
            : app(Hashids::class)->decode($hash)[0];
    }
}
