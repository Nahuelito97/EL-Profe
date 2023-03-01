<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Seting;
use Faker\Generator as Faker;

$factory->define(Seting::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
