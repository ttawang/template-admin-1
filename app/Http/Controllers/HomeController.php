<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function front()
    {
        return view('auth.auth-master');
    }
    public function home()
    {
        return view('page.dashboard');
    }
}
