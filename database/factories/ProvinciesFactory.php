<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Provincies;
use Faker\Generator as Faker;

$factory->define(Provincies::class, function (Faker $faker) {
    return [
        'name' => $faker->word(50),
    ];
});
