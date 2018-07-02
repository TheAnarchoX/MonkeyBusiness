<?php

use Faker\Generator as Faker;

$factory->define(App\Message::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'mobile_number' => $faker->e164PhoneNumber,
        'subject' => encrypt($faker->sentence),
        'message' => encrypt($faker->realText(10))
    ];
});
