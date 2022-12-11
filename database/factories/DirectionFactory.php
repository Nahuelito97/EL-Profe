<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Direction;
use Faker\Generator as Faker;

$factory->define(Direction::class, function (Faker $faker) {
    return [
        'name' => $faker->word(50),
        'number' => $faker->numberBetween($min = 0000, $max = 9000) ,
    ];
});
