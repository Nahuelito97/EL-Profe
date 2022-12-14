<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Students;
use Faker\Generator as Faker;

$factory->define(Students::class, function (Faker $faker) {
    return [

        'name' => $faker->name,
        'surname' => $faker->surname,
        'dni' => $faker->ean8,
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'phone' => $faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'date_of_address' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        'pais_id' => 1,
        'provincies_id' => 1,
        'localities_id' => $faker->numberBetween(1, 46),
        'directions_id' => $faker->numberBetween(1, 5),
        'status' => 'AUSENTED',
    ];
});
