<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function login()
    {
        return view("auth/login");
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required|email:dns",
            "password" => "required",
        ]);

        if (Auth::attempt($credentials)) {
            // dd("fakkk");
            if (auth()->user()->role == 'admin') {
                return redirect('/admin/home');
            } else if (auth()->user()->role == 'user') {
                return redirect('/user/home');
            }
        }
        return redirect('/login');
        return back()->with("LoginErorr", "Login failed");
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }
}
