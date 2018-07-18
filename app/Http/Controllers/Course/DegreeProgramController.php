<?php

namespace App\Http\Controllers\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DegreeProgramController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        return view('courses.degreeprogram');
    }
}
