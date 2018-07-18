<?php

namespace App\Http\Controllers\Home;

use App\Course;
use App\Lesson;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	/**
	 * Home Page
	 *
	 * @return view
	 */
    public function index()
    {	
		// Courses
		$courses = Course::with('lessons')->limit(8)->inRandomOrder()->get();
		foreach ($courses as $course) {
			if ($course->lessons) {
				$course->total_lessons = count($course->lessons);
				unset($course->lessons);
			}
		}

		// Categories
		$topics = Category::where('type', 'topic')->limit(8)->inRandomOrder()->get();
		$softwares = Category::where('type', 'software')->limit(8)->inRandomOrder()->get();

    	return view('home.home', compact('courses', 'topics', 'softwares'));
    }
}
