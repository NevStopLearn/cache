<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title'     => $faker->sentence,
        'user_id'   => App\User::all()->random()->id,
    ];
});
