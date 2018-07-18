<?php

namespace App\Http\Controllers\Course;

use App\Course;
use App\Category;
use App\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Courses Page
     *
     * @return view
     */
    public function index()
    {
        // Skill Levels
        $skillLevels = Level::all()->sortByDesc('id');
        // Category Topics
        $topics = Category::all()->where('type', 'topic');
        // Category Softwares
        $softwares = Category::all()->where('type','software');

        // Courses
        $courses = Course::all();

        return view('courses.courses', compact('skillLevels', 'topics', 'softwares', 'courses', 'totalCourses'));
    }

    /**
     * Show Detail
     * 
     * @return view
     */
    public function show($slug, Course $course)
    {
        $course = $course->where('slug', $slug)
                    ->with('instructor')
                    ->with('lessons.videos')
                    ->first();

        if (count($course->subjects) > 0) {
            $course->subjects = explode(';', $course->subjects);
        }

        return view('courses.detail', compact('course'));
    }

    /**
     * Preview Course
     * 
     * @param string $courseSlug
     * @param string $lessonSlug
     * @param string $videoSlug
     * @return view
     */
    public function preview($courseSlug, $lessonSlug, $videoSlug, Course $course)
    {
        $course = $course->where('slug', $courseSlug)
                    ->with('instructor')
                    ->with('lessons.videos')
                    ->first();

        // Lesson Play
        $lessonPlay = $course->lessons->filter(function($lesson) use ($lessonSlug) {
            return $lesson->slug == $lessonSlug;
        })->first();
        if (!$lessonPlay) {
            abort(404);
        }

        // Video Play
        $videoPlay = collect([]);
        foreach ($course->lessons as $lesson) {
            foreach ($lesson->videos as $video) {
                if ($video->slug == $videoSlug) {
                    $videoPlay->push($video);
                }
            }
        }
        $videoPlay = $videoPlay->first();
        if (!$videoPlay) {
            abort(404);
        }

        return view('courses.preview', compact('course', 'videoPlay', 'lessonPlay'));
    }

    /**
     * Play Course
     * 
     * @param string $courseSlug
     * @param string $lessonSlug
     * @param string $videoSlug
     * @return view
     */
    public function play($courseSlug, $lessonSlug, $videoSlug, Course $course)
    {
        $course = $course->where('slug', $courseSlug)
                    ->with('instructor')
                    ->with('lessons.videos')
                    ->first();

        // Lesson Play
        $lessonPlay = $course->lessons->filter(function($lesson) use ($lessonSlug) {
            return $lesson->slug == $lessonSlug;
        })->first();
        if (!$lessonPlay) {
            abort(404);
        }

        // Video Play
        $videoPlay = collect([]);
        foreach ($course->lessons as $lesson) {
            foreach ($lesson->videos as $video) {
                if ($video->slug == $videoSlug) {
                    $videoPlay->push($video);
                }
            }
        }
        $videoPlay = $videoPlay->first();
        if (!$videoPlay) {
            abort(404);
        }

        return view('courses.play', compact('course', 'videoPlay', 'lessonPlay'));
    }
}
