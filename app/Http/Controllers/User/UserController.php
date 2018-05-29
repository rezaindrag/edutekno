<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	/**
	 * Profile Page
	 *
	 * @return view
	 */
    public function profile()
    {
    	return view('user.profile');
    }
}
