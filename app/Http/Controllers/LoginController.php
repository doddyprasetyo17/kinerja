<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($validator)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        // return back()->withErrors({
        //     'email' => 'Email tidak ada yang cocok',
        // })->onluInput('email');
    }
}

