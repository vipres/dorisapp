<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        Auth::logout();
        return redirect('/login');
    }
}
