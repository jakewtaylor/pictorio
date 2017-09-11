<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Hashids\Hashids;

class AppServiceProvider extends ServiceProvider {
    public function register () {
        $this->app->bind(Hashids::class, function () {
            return new Hashids(
                env('HASHIDS_SALT'),
                env('HASHIDS_LENGTH'),
                env('HASHIDS_ALPHA')
            );
        });
    }
}
