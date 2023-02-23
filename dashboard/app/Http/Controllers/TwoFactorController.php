<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendCodeTwoFactor;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Auth;

class TwoFactorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCode()
    {
        $this->getSendCodeTwoFactor();
        return view('connect.twofactor');
    }

    public function getSendCodeTwoFactor()
    {
        $code = rand(100001, 999999);
        $data = ['code' => $code, 'name' => Auth::user()->name];
        $user = User::find(Auth::id());
        $user->auth_code = $code;
        $user->save();
        Mail::to(Auth::user()->email)->send(new SendCodeTwoFactor($data));
    }
}
