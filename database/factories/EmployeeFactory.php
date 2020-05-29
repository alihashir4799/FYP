<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'Email' => $faker->unique()->safeEmail,
        'Password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'Firstname' => $faker->name,
        'Lastname' => $faker->name,
        'Username' => $faker->name,
        'City' => $faker->name,
        'State' => $faker->name,
        'Zip' => random_int(25000,40000),
    ];
});
