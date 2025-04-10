<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function getDataLogin(Request $request) {
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|min:6'
        // ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            $request->session()->regenerate();
            return redirect()->route('admin.index')->with('success', 'Login successful');
        }else
        {
            return redirect()->back()->with('error',"Please enter current email and password");
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login.index')->with('success', 'Login successful');
    }
}
