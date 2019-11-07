<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function showFormLogin()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($user)) {
            return redirect('/');
        }

        return back();
    }
}
