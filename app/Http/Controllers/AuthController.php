<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard()
    {
        if(Auth::check() === true)
        {
            return view('home');
        }
        return redirect()->route('users.login');
    }

    public function dashboardLogin()
    {
        return view('users.userLogin');
    }

    public function login(Request $request)
    {
       dd($request->all());
       $credentials = [
           'email' => $request->email,
           'password' => $request->password
       ];
       Auth::attempt($credentials);
    }
}
