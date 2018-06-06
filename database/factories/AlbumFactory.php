<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Album::class, function (Faker $faker) {
    return [
        'name' => $faker->catchPhrase,
        'description' => $faker->sentences(1, true),
        'author' => $faker->numberBetween(1, User::all()->count())

    ];
});
