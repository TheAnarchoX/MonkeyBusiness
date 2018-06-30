<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Activity::class, function (Faker $faker) {
    $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
    $title =  $faker->colorName." ".$faker->foodName." hunting ({$faker->unique()->randomNumber()})";
    static $targets = ['Iedereen', 'Gezinnen', 'Kinderen', 'Jongeren', 'Volwassenen', 'Ouderen', 'Mannen', 'Vrouwen', 'Non-Binary Conforming Feminists'];
    return [
        'title' => $title,
        'description' => $faker->realText(),
        'slug' => str_slug($title),
        'target' => $faker->randomElement($targets),
        'event_date' => $faker->date(),
        'location' => $faker->colorName." ".$faker->cityPrefix." ".$faker->stateAbbr,
        'author_id' => $faker->numberBetween(1, User::all()->count())
    ];
});
