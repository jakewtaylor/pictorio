<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameUserTable extends Migration {
    public function up () {
        Schema::create('game_user', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('game_id')->unsigned();
            $table->foreign('game_id')->references('id')->on('games');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('score');
        });
    }

    public function down () {
        Schema::dropIfExists('games_users');
    }
}
