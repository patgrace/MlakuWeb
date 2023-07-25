<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    function home() {
        // dd('berhasill');
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return view('admin.home', [
                    'title' => "Home",
                ]);
            } else if (Auth::user()->role == 'user') {
                return view('user.home', [
                    'title' => "Home"
                ]);
            }
        }  else if (Auth::user() == null) {
            return view("/layout/home", [
                'title' => "Home"
            ]);
        }
    }
}

