<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // dd(auth()->check());
        return view("/index.index");
    }
}
