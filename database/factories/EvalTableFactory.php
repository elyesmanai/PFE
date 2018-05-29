<?php

use Faker\Generator as Faker;

$factory->define(App\EvalTable::class, function (Faker $faker) {
    return [
        'year' => date('Y'),
        'validated' => str_random(10)
    ];
});
