<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Materias;
use Faker\Generator as Faker;

$factory->define(Materias::class, function (Faker $faker) {
    $name = $this->faker->unique()->word(15);

    return [
        'name' => $name,
        'description' => $faker->sentence(20),
        'profesor_id' => 1,
    ];
});
