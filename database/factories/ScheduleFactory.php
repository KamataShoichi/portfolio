<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Schedule::class, function (Faker $faker) {
    return [
        'date' => $faker->date(),
        'competitive_team' => $faker->country,
        'place' => $faker->city(),
    ];
});
