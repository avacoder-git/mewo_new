<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Desease;
use Faker\Generator as Faker;

$factory->define(Desease::class, function (Faker $faker) {
    return [
        'head'=>$faker->sentence,
        'body'=>$faker->paragraph
    ];
});
