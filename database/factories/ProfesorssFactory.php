<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profesorss;
use Faker\Generator as Faker;

$factory->define(Profesorss::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->word(50),
        'dni' => $faker->ean8,
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'phone' => $faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'date_of_address' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        'especialitis_id' => factory(\App\Especiality::class),
        'pais_id' => 1,
        'provincies_id' => 1,
        'localities_id' => $faker->numberBetween(1, 46),
        'directions_id' => $faker->numberBetween(1, 5),

    ];
});

