<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Asistence;
use Faker\Generator as Faker;

$factory->define(Asistence::class, function (Faker $faker) {
    return [
        'status' => $faker->randomElement(['Ausente', 'Presente', 'Tardanza']),
    ];
});
