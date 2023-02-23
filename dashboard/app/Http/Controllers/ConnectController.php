<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class ConnectController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('getLogout');
    }

    public function getLogin()
    {
        return view('connect.login');
    }

    public function getLogout()
    {
        Cookie::queue(Cookie::forget('doris_device_trusted'));
        Auth::logout();
        return redirect('/login');
    }
}
