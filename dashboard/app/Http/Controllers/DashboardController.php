<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('two.factor');
    }
    public function getHome()
    {
        return view('dashboard.home');
    }
}
