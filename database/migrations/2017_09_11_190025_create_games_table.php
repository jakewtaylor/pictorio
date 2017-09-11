<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration {
    public function up () {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('max_users')->default(10);
        });
    }

    public function down () {
        Schema::dropIfExists('games');
    }
}
