<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class landingController extends Controller
{
    public function dashboard()
    {
        return view('landing.dashboard');
    }

    public function login()
    {
        return view('landing.login');
    }
}
