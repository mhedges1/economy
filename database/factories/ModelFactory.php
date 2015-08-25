<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Stock::class, function ($faker) {

    return [
        'name' => $faker->word,
        'long_name' => $faker->sentence,
        'count' => $faker->numberBetween(1000, 1000000),
        'ask' => $faker->numberBetween(0, 1000),
        'bid' => $faker->numberBetween(0, 1000)
    ];

});
