<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'intro' => $faker->sentences(1, true ),
        'image' => '/images/project-2.jpg',
        'completed' => $faker -> boolean
    ];
});
