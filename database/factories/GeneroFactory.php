<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Genero;
use Faker\Generator as Faker;

$factory->define(Genero::class, function (Faker $faker) {
    $name = $this->faker->unique()->word(15);

    return [
        'name' => $name,
    ];
});
