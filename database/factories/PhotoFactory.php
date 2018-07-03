<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Photo::class, function (Faker $faker) {
    $title = $faker->bs;
    return [
        'title' => $title,
        'description' => $faker->realText('128'),
        'img_path' => "images\photos\\".$faker->randomNumber(8, true).".jpg",
        'slug' => str_slug($title),
        'author_id' => $faker->numberBetween(1, User::all()->count())

    ];
});
