<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
	$types = ['inara','dhaw','miyeh','bani'];
	$zones=['marsa medina','bousalsla','gammarth','marsa plage'];
	$years = [2015,2016,2017,2018];
	$places = ['nahj 1','nahj 2','nahj 3','nahj 4'];
	$steps = ['step1','step2','step3','step4'];
	$validations = ['yes','no','en attente'];

    return [
        'type' => $types[mt_rand(0,3)],
        'zone' => $zones[mt_rand(0,3)],
        'year' => $years[mt_rand(0,3)],
        'budget' => mt_rand(100,500),
        'place' => $places[mt_rand(0,3)],
        'step' => $steps[mt_rand(0,3)],
        'completion' => mt_rand(0,100),
        'validated' => $validations[mt_rand(0,2)],

    ];
});
