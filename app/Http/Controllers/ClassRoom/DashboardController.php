<?php

namespace App\Http\Controllers\ClassRoom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Dashboard
     * 
     * @return view
     */
    public function index()
    {
        return view('classroom.dashboard');
    }

    /**
     * Logout
     */
    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }
}
