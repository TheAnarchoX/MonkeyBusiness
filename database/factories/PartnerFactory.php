<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Partner::class, function (Faker $faker) {
    return [
        'name' => $faker->company."-".$faker->companySuffix."-".$faker->countryCode,
        'description' => $faker->catchPhrase,
        'email' => $faker->safeEmail,
        'phone_number' => $faker->e164PhoneNumber,
        'website' => $faker->domainName,
        'author' => $faker->numberBetween(1, User::all()->count())

    ];
});
