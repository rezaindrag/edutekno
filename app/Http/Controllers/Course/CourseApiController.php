<?php

namespace App\Http\Controllers\Course;

use App\Course;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ApiController as BaseController;

class CourseApiController extends BaseController
{
    use ApiResponser;

    /**
     * Show all courses
     *
     * @param Request $request
     * @param Course $course
     * 
     * @return response json
     */
    public function index(Request $request, Course $course)
    {
        $level = $request->query('level');
        $topic = $request->query('topic');
        $software = $request->query('software');
        $q = $request->query('q');
        
        $stmt = "SELECT courses.*, ";
        $stmt .= "(SELECT slug FROM lessons WHERE course_id = courses.id LIMIT 1) as lesson_slug, ";
        $stmt .= "(SELECT slug FROM videos WHERE lesson_id = lessons.id LIMIT 1) as video_slug ";
        $stmt .= "FROM courses JOIN category_course catcour ON catcour.course_id = courses.id ";
        $stmt .= "JOIN categories ON categories.id = catcour.category_id ";
        $stmt .= "JOIN lessons ON lessons.course_id = courses.id ";
        $stmt .= "WHERE courses.deleted_at IS NULL";

        if ($q) {
            $stmt .= " AND title LIKE '%$q%' OR description LIKE '%$q%' ";
        } else {
            if ($level) {
                if (strpos($level, ',')) {
                    $levels = explode(',', $level);
                    $level = '';
                    foreach($levels as $l) {
                        $level .= "'$l',";
                    }
                    $level = rtrim($level, ',');
                } else {
                    $level = "'$level'";
                }
                $stmt .= " AND level IN ($level) ";
            }
            if ($topic && $software) {
                if (strpos($topic, ',')) {
                    $topics = explode(',', $topic);
                    $topic = '';
                    foreach($topics as $t) {
                        $topic .= "'$t',";
                    }
                    $topic = rtrim($topic, ',');
                } else {
                    $topic = "'$topic'";
                }
                if (strpos($software, ',')) {
                    $softwares = explode(',', $software);
                    $software = '';
                    foreach($softwares as $s) {
                        $software .= "'$s',";
                    }
                    $software = rtrim($software, ',');
                } else {
                    $software = "'$software'";
                }

                $stmt .= " AND (categories.slug IN ($topic) ";
                $stmt .= " OR categories.slug IN ($software)) ";
            } else {
                if ($topic && !$software) {
                    if (strpos($topic, ',')) {
                        $topics = explode(',', $topic);
                        $topic = '';
                        foreach($topics as $t) {
                            $topic .= "'$t',";
                        }
                        $topic = rtrim($topic, ',');
                    } else {
                        $topic = "'$topic'";
                    }
                    $stmt .= " AND categories.slug IN ($topic) ";
                } else if (!$topic && $software) {
                    if (strpos($software, ',')) {
                        $softwares = explode(',', $software);
                        $software = '';
                        foreach($softwares as $s) {
                            $software .= "'$s',";
                        }
                        $software = rtrim($software, ',');
                    } else {
                        $software = "'$software'";
                    }
                    $stmt .= " AND categories.slug IN ($software) ";
                }
            }
        }

        // die($stmt);

        $courses = collect(DB::select(DB::raw($stmt), $bindParams ?? []));

        $courses = $courses->unique('id');

        $courses->foo = 'bar';

        // echo '<pre>';
        // print_r($courses); die;

        $html = '';
        foreach ($courses as $course) {
            $html .= '
                <div class="card post-container mb-3" style="width: 266px;">
                    <img class="post-thumb" src="'.$course->banner.'" alt="">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <a href="'.url('play/'.$course->slug.'/'.$course->lesson_slug.'/'.$course->video_slug).'" class="course-title text-dark mb-2">'.$course->title.'</a>
                        <p class="post-attrs mb-3"><span class="mr-2">15 Lessons</span><span>37m 57s</span></p>
                        <a href="'.url('play/'.$course->slug.'/'.$course->lesson_slug.'/'.$course->video_slug).'" class="btn btn-success btn-sl px-3" style="border-radius: 100px">Start Learn &rarr;</a>
                    </div>
                </div>
            ';
        }
        $html .= '<div style="width: 263px;"></div>';

        return response($html, 200);
    }
}
