<?php

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->randomElement([ucfirst($faker->word), ucwords(implode(' ', $faker->words(2)))]),
        'slug' => str_slug($name),
        'type' => $faker->randomElement(['software', 'topic']),
        'color' => str_replace('#', '', $faker->hexcolor)
    ];
});
