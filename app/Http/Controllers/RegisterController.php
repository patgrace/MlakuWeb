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
        return view("auth/register", compact(["user"]));
    }


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
            ->session();

        return redirect("/login");

        // dd('berhasil');
    }
}
