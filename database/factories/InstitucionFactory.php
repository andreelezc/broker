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

$factory->define(inetweb\Institucion::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->company,
        'email' => $faker->unique()->safeEmail,
        'direccion' =>$faker->Address,
        'telefono' =>$faker->phoneNumber,
        'password' => $password ?: $password = bcrypt('1234'),
        // 'remember_token' => str_random(10),
    ];
});

$factory->define(inetweb\Productor::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'direccion' =>$faker->Address,
        'password' => $password ?: $password = bcrypt('1234'),
        // 'remember_token' => str_random(10),
    ];
});
