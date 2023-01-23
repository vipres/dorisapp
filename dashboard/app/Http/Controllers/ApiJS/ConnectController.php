<?php

namespace App\Http\Controllers\ApiJS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ConnectController extends Controller
{
    public function postLogin(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];

        $messages = [
            'email.required' => __('lg.connect.v_email_required'),
            'email.email' => __('lg.connect.v_email_email'),
            'password.required' => __('lg.connect.v_password_required'),
            'password.min' => __('lg.connect.v_password_min'),
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) :
            $data = ['type' => 'error', 'title' => __('lg.general.error'), 'msg' => __('lg.general.error_validation'), 'msgs' => json_encode($validator->errors()->all())];
            return response()->json($data);
        else :
            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) :
                $data = ['type' => 'success'];
                return response()->json($data);
            else :
                $data = ['type' => 'error', 'title' => __('lg.general.error'), 'msg' => __('lg.connect.connect_fail')];
                return response()->json($data);
            endif;

        endif;
    }
}
