<?php

namespace App\Http\Controllers\ClassRoom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlayController extends Controller
{
    /**
     * Play
     * 
     * @return view
     */
    public function index()
    {
        return view('classroom.videoplay');
    }
}
