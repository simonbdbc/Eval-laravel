<?php

use Faker\Generator as Faker;

$factory->define(App\Photo::class, function (Faker $faker) {
    return [
        'legende' => $faker->text($maxNbChars = 75),
        'description' => $faker->text($maxNbChars = 255),
        'url' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
    ];
});
