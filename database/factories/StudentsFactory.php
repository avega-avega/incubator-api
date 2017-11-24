<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(incubator\Student::class, function (Faker $faker) {
    
    return [
        'name' => $faker->name,
        'info' => $faker->words($nb = 30, $asText = false),
        'is_active' => mt_rand(0, 1),
        'points' => mt_rand(0, 60),
    ];
});
