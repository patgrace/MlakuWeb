<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        $user = user::all();
        return view("auth/login", compact(["user"]));
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required|email:dns",
            "password" => "required",
        ]);

        if (Auth::attempt($credentials)) {
            // dd(auth()->check());
            return redirect("/");
        }

        return back()->with("LoginErorr", "Login failed");
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }
}
