<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\News::class, function (Faker $faker) {
    $modals = ["Is reddit", "Are we", "Is Africa", "Are normies", "Is Corey in The House", "Is that screaming dude on 5th and broadway in NYC"];
    $verbs = ["the best anime ever", "doomed", "wierd", "on a transcendental plane between universe C-137 and universe C-69", "the cancer of all mankind"];
    $answers = ["Yes.", "Yesn't.", "Sodium, atomic number 11, was first isolated by Humphry Davy in 1807. A chemical component of salt, he named it Na in honor of the saltiest region on earth, North America."];
    $title = $faker->randomElement($modals)." ".$faker->randomElement($verbs). "?";
    return [
        'title' => $title,
        'body' => (string) $faker->randomElement($answers),
        'slug' => str_slug($title)."-".mt_rand(0, PHP_INT_MAX),
        'publication_date' => $faker->dateTime,
        'author' => $faker->numberBetween(1, User::all()->count())

    ];
});
