<?php

use App\Course;
use App\Lesson;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    // $courses = Course::all()->random();

    return [
        'name' => $name = implode(' ',$faker->words(2)),
        'slug' => str_slug($name, '-'),
        'description' => $faker->sentence(10),
        'course_id' => mt_rand(1, 8)
    ];
});
