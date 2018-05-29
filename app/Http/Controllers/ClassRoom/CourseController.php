<?php

namespace App\Http\Controllers\ClassRoom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Dashboard
     * 
     * @return view
     */
    public function index()
    {
        return view('classroom.mycourses');
    }

    /**
     * Dashboard
     * 
     * @return view
     */
    public function show($slug)
    {
        return view('classroom.mycourse_detail');
    }
}
