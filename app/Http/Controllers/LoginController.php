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
        return view("index/login", compact(["user"]));
    }

    public function authenticate(Request $request)
    {
        // FacedesSession:: flash('email', $credentials -> email);
        $credentials = $request->validate([
            "email" => "required|email:dns",
            "password" => "required",
        ]);

        // dd($credentials, Auth::attempt($credentials));

        if (Auth::attempt($credentials)) {
            // dd(auth()->check());
            // $request-> session() -> regenerate();
            return redirect("/index");
        }

        return back()->with("LoginErorr", "Login failed");
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/index");
    }
}
