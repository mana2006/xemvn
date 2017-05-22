<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin() {
        return view('layouts.body.login');
    }

    public function postLogin(Request $request) {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:6',

        ];

        $message = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không hợp lệ',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải bao gồm tối thiểu 6 ký tự ',

        ];
        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $email = $request->input('email');
            $password = $request->input('password');

            if( Auth::attempt(['email' => $email, 'password' =>$password])) {
                return redirect()->intended('/');
            } else {
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }

    public function getLogout() {
        Auth::logout();
        Session::flush();
        return view('/');
    }
}
