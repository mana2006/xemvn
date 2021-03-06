<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Validator;
use Laravel\Passport\HasApiTokens;
use Socialite;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers, HasApiTokens;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function getLogin()
    {
        if (!Auth::check()) {
            return view('admin.login.login');
        } else {
            return redirect('admin/index');
        }

    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        dd($user);
    }

    public function postLogin(Request $request)
    {
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

            if (Auth::attempt(['email' => $email, 'password' => $password, 'del_flg' => 0])) {
                return redirect()->intended('/admin/index');
            } else {
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }
    
    public function getLogout()
    {
        Auth::guard('web')->logout();
        return redirect('/admin/login');
    }
}
