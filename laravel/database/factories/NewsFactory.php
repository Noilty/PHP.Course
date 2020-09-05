<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
//use Faker\Generator as Faker;

$factory->define(News::class, function (/*Faker $faker*/) {
    $faker = \Faker\Factory::create('ru_RU');

    return [
        'title' => $faker->realText(rand(10,50)),
        'text' => $faker->realText(rand(1000,2000)),
        'isPrivate' => false,
    ];
});
