<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Especiality;
use Faker\Generator as Faker;

$factory->define(Especiality::class, function (Faker $faker) {

    $name = $this->faker->unique()->word(15);

    return [
        'name' => $name,
        'description' => $faker->sentence(20),
    ];
});
