<?php

use App\Http\Classes\Hasher;

Auth::routes();

Route::get('/', 'HomeController')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::post('/game/create', 'GameController@create')->name('game.create');
    Route::get('/game/{game}', 'GameController@show')->name('game');
});
