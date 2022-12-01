<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Especiality;
use Faker\Generator as Faker;

$factory->define(Especiality::class, function (Faker $faker) {
    return [
        'name' => $faker->word(50),
        'description' => $faker->sentence(20),
    ];
});
