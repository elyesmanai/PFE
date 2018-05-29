<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $roles = ['civil_society','admin','technician','delegate','financial'];
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'role' => $roles[mt_rand(0,4)],
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
