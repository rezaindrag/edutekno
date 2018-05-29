<?php

namespace App\Http\Controllers\Play;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlayController extends Controller
{
    public function index()
    {
    	return view('play.play');
    }
}
