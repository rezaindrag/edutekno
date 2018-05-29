<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Login
     * 
     * @return view
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Authenticate
     * 
     * @return redirect
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ( ! Auth::attempt($credentials)) {
            return redirect('login');
        }

        return redirect('classroom/dashboard');
    }
}
