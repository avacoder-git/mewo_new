<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Application;
use Faker\Generator as Faker;

$factory->define(Application::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'phone'=>random_int(100000000,999999999),
        'region'=>$faker->city
        ];
});
