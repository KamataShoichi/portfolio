<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'birthday' => $faker->date(),
        'gender' => $faker->boolean(),
        'favorite_team' => $faker->country,
    ];
});
