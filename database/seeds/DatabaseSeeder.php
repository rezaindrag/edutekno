<?php

use App\Post;
use App\User;
use App\Video;
use App\Course;
use App\Lesson;
use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        Category::truncate();
        Course::truncate();
        Lesson::truncate();
        Video::truncate();
        Post::truncate();
        DB::table('category_course')->truncate();
        DB::table('category_video')->truncate();
        DB::table('category_post')->truncate();

        factory(User::class, 5)->create();
        factory(Category::class, 15)->create();
        factory(Lesson::class, 100)->create();
        factory(Course::class, 8)->create()->each(function($course) {
            $categories = Category::all()->random(mt_rand(1, 5))->pluck('id');
            $course->categories()->attach($categories);
        });
        factory(Video::class, 500)->create();//->each(function($video) {
        //     $categories = Category::all()->random(mt_rand(1, 5))->pluck('id');
        //     $video->categories()->attach($categories);
        // });
        /*factory(Post::class, 100)->create();//->each(function($post) {
        //     $categories = Category::all()->random(mt_rand(1, 5))->pluck('id');
        //     $post->categories()->attach($categories);
        // });*/
    }
}
