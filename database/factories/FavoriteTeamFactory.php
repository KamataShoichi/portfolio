<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FavoriteTeam;
use Faker\Generator as Faker;

$factory->define(App\FavoriteTeam::class, function (Faker $faker) {
    return [
        'team_name' => $faker->country,
        //
    ];
});
