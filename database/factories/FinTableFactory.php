<?php

use Faker\Generator as Faker;

$factory->define(App\FinTable::class, function (Faker $faker) {
    return [
    	'prog_type' =>str_random(10),
    	'proj_type' => str_random(10),
        'amount' => mt_rand(0,500),
        'total_amount' => mt_rand(0,500),
        'loan' => mt_rand(0,500),
        'assistance' => mt_rand(0,500),
        'self-monetization' => mt_rand(0,500),
        'year' => mt_rand(0,500),
        'validates' => mt_rand(0,1)
    ];
});
