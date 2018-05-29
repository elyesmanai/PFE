<?php

use Faker\Generator as Faker;

$factory->define(App\Convocation::class, function (Faker $faker) {
    return [
        'to' => mt_rand(0,50),
        'from' => mt_rand(0,50),
        'convocation_place' => str_random(10),
        'convocation_time' => date('Y-m-d h-i-s'),
        'reason' => str_random(10)
    ];
});
