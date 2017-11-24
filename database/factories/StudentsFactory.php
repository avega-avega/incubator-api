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
        'name' => $faker->name(),
        'photo' => $faker->imageUrl(380, 380, 'cats', true, 'Faker', true),
        'info' => $faker->sentence(),
        'is_active' => rand(0, 1),
        'points' => rand(0, 60),
    ];
});
