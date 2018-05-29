<?php

use App\Post;
use App\Author;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $authors = Author::where('admin', 1)->get();

    return [
        'title' => $title = ucwords(str_replace('.', '', $faker->sentence(6))),
        'slug' => str_slug($title, '-'),
        'content' => $faker->paragraph(5),
        'banner' => $faker->imageUrl(640, 200),
        'author_id' => $authors->random()->id
    ];
});
