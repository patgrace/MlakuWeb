<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function index(){

        // dd('berhasil');
        if (auth()->user()->role == 'user') {
            return view('user.dashboard', [
                'title' => 'Dashboard',
                'user' => Auth::user()
            ]);
        } else if (auth()->user()->role == 'admin') {
            return view('admin.dashboard', [
                'title' => 'Dashboard',
                'user' => Auth::user()
            ]);
        }
    }
}
