<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Localidad;
use Faker\Generator as Faker;

$factory->define(Localidad::class, function (Faker $faker) {
    return [
        'name' => $faker->word(50),
        'cod_post' => $faker->numberBetween($min = 0000, $max = 9000) ,
    ];
});
