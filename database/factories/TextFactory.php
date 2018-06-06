<?php

use Faker\Generator as Faker;
use App\User;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Text::class, function (Faker $faker) {
    $views = ["landing.index", "posts.show", "posts.create", "events.create"];
    return [
        'key' => $faker->word."-".$faker->randomNumber(6),
        'view' => $faker->randomElement($views),
        'author' => $faker->numberBetween(1, User::all()->count())
    ];
});
