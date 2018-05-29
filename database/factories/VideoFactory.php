<?php

use App\Video;
use App\Lesson;
use App\Instructor;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    // $instructors = Instructor::all();
    // $lessons = Lesson::all();

    return [
        'title' => $title = implode(' ',$faker->words(5)),
        'slug' => str_slug($title, '-'),
        'description' => $faker->paragraph(1),
        'duration' => $faker->time('i:s'),
        'banner' => $faker->imageUrl(258, 124),
        'video_url' => 'https://www.youtube.com/watch?v=pU9Q6oiQNd0',
        'instructor_id' => mt_rand(1, 10),
        'lesson_id' => mt_rand(1, 15)
    ];
});
