<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'intro' => $faker->sentences(8, true ),
        'image' => '/images/project-2.jpg',
    ];
});
