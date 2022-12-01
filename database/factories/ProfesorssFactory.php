<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profesorss;
use Faker\Generator as Faker;

$factory->define(Profesorss::class, function (Faker $faker) {
    return [
        'name' => $faker->word(50),
        'surname' => $faker->word(50),
        'dni' => $faker->ean8,
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'phone' => $faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'date_of_address' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        'especiality_id' => $faker->numberBetween(1, 20),
    ];
});

