<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Word;
use Faker\Generator as Faker;

$factory->define(Word::class, function (Faker $faker) {
    return [
        'word' => $faker->firstName,
        'type' => $faker->lastName,
        'description' => $faker->realText(100,2)
    ];
});
