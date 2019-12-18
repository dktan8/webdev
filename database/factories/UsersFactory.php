<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName(),
        'email' => $faker->email(),
        'password' => $faker->password(),
        'friends' => $faker->numberBetween(2,200)
    ];
});
