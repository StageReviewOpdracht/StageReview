<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstname, 
        'last_name' => $faker->lastname,
        'student_number' => $faker-> numberBetween($min = '10000000', $max = '99999999')
    ];
});