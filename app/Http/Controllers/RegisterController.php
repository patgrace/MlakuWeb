<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $user = user::all();
        return view("index/register", compact(["user"]));
    }
    // public function login()
    // {
    //     return view('index/register');
    // }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            "username" => "required|max:255",
            "email" => "required|email|unique:users",
            "password" => "required|min:5|max:255",
        ]);

        $validateData["password"] = Hash::make($validateData["password"]);

        user::create($validateData);
        $request
            ->session()
            ->flash("success", "register successfull, please login");

        return redirect("index/login");

        // dd('berhasil');
    }
}
