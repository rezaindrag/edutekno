<?php

use App\User;
use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    $instructors = User::where('admin', 1)->where('verified', 1)->get();

    return [
        'title' => $title = ucwords(str_replace('.', '', $faker->sentence(6))),
        'slug' => str_slug($title, '-'),
        'description' => $faker->paragraph(3),
        'banner' => 'https://via.placeholder.com/258x124',
        'price' => $faker->randomElement(['125000', '134000', '153000']),
        'total_duration' => $faker->time('i:s'),
        'instructor_id' => $instructors->random()->id,
        'level' => $faker->randomElement(['beginner', 'intermediate', 'advanced'])
    ];
});
