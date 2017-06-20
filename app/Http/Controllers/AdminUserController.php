<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Validator;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $userList = User::select('id', 'name', 'email', 'created_at')
            ->where('del_flg', '<>', 1)
            ->paginate(10);
        return view('admin.users.user_index', ['users' => $userList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.user_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name'              => 'required',
            'email'             => 'required|email|unique:users,email',
            'password'          => 'required|min:6',
            'confirm_password'  => 'required|min:6|same:password'
        ];

        $message = [
            'name.required'                 => 'Tên là trường bắt buộc',
            'email.required'                => 'Email là trường bắt buộc',
            'email.email'                   => 'Email không hợp lệ',
            'email.unique'                  => 'Email đã được dùng',
            'password.required'             => 'Mật khẩu là trường bắt buộc',
            'password.min'                  => 'Mật khẩu phải bao gồm tối thiểu 6 ký tự ',
            'confirm_password.required'     => 'Xác nhân lại mật khẩu là trường bắt buộc',
            'confirm_password.min'          => 'Mật khẩu phải bao gồm tối thiểu 6 ký tự',
            'confirm_password.confirmed'    => 'Mật khẩu không khớp',
        ];

        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            $request->session()->flash('alert-warning', 'Thành viên chưa được đăng ký thành công !!!');

            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $fileName = $this->uploadImage('upload_images');

            User::insert([
                'name'          => $request->name,
                'image'         => $fileName,
                'email'         => $request->email,
                'password'      => bcrypt($request->password),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'del_flg'       => 0
            ]);

            $request->session()->flash('alert-success', 'Thành viên đã được đăng ký thành công !!!');

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::select('id', 'name', 'image', 'email')
            ->where('id', '=', $id)
            ->get()->toArray();
        return view('admin.users.user_show', ["user" => $user[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::select('id', 'image', 'name', 'email')
            ->where('id', '=', $id)
            ->get()->toArray();
        return view('admin.users.user_update', ['user' => $user[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->password != "" && $request->confirm_password != "") {
            $rules = [
                'name'              => 'required',
                'email'             => "required|email|unique:users,email,$id",
                'password'          => 'required|min:6',
                'confirm_password'  => 'required|min:6|same:password'

            ];

            $message = [
                'name.required'                 => 'Tên là trường bắt buộc',
                'email.required'                => 'Email là trường bắt buộc',
                'email.email'                   => 'Email không hợp lệ',
                'email.unique'                  => 'Email đã được dùng',
                'password.required'             => 'Mật khẩu là trường bắt buộc',
                'password.min'                  => 'Mật khẩu phải bao gồm tối thiểu 6 ký tự ',
                'confirm_password.required'     => 'Xác nhân lại mật khẩu là trường bắt buộc',
                'confirm_password.min'          => 'Mật khẩu phải bao gồm tối thiểu 6 ký tự',
                'confirm_password.confirmed'    => 'Mật khẩu không khớp',
            ];

            $validator = Validator::make($request->all(), $rules, $message);
            if ($validator->fails()) {
                $request->session()->flash('alert-warning', 'Thành viên chưa được cập nhật thành công !!!');

                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                $fileName = $this->uploadImage('upload_images');
                if ($fileName != null) {
                    User::where('id', '=', $id)
                        ->update([
                            'name'          => $request->name,
                            'image'         => $fileName,
                            'email'         => $request->email,
                            'password'      => bcrypt($request->password),
                            'updated_at'    => date('Y-m-d H:i:s'),
                            'del_flg'       => 0
                        ]);
                } else {
                    User::where('id', '=', $id)
                        ->update([
                            'name'          => $request->name,
                            'email'         => $request->email,
                            'password'      => bcrypt($request->password),
                            'updated_at'    => date('Y-m-d H:i:s'),
                            'del_flg'       => 0
                        ]);
                }

                $request->session()->flash('alert-success', 'Thành viên đã được cập nhật thành công !!!');

                return redirect()->back();
            }
        } else {
            $rules = [
                'name'              => 'required',
                'email'             => "required|email|unique:users,email,$id",
            ];

            $message = [
                'name.required'                 => 'Tên là trường bắt buộc',
                'email.required'                => 'Email là trường bắt buộc',
                'email.email'                   => 'Email không hợp lệ',
                'email.unique'                  => 'Email đã được dùng',
            ];

            $validator = Validator::make($request->all(), $rules, $message);
            
            if ($validator->fails()) {
                $request->session()->flash('alert-warning', 'Thành viên chưa được cập nhật thành công !!!');

                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                $fileName = $this->uploadImage('upload_images');
                if ($fileName != null) {
                    User::where('id', '=', $id)
                        ->update([
                            'name'          => $request->name,
                            'image'         => $fileName,
                            'email'         => $request->email,
                            'updated_at'    => date('Y-m-d H:i:s'),
                            'del_flg'       => 0
                        ]);
                } else {
                    User::where('id', '=', $id)
                        ->update([
                            'name'          => $request->name,
                            'email'         => $request->email,
                            'updated_at'    => date('Y-m-d H:i:s'),
                            'del_flg'       => 0
                        ]);
                }


                $request->session()->flash('alert-success', 'Thành viên đã được cập nhật thành công !!!');

                return redirect()->back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', '=', $id)
            ->update([
                'del_flg' => '1'
            ]);
    }

    private function uploadImage($fileNameUpload) {
        if (Input::file($fileNameUpload) != null) {
            $destinationPath = 'uploads/avatars/users/';
            $extension = Input::file($fileNameUpload)->getClientOriginalExtension();
            $fileName = date('Ymd_His') . '.' . $extension;
            Input::file($fileNameUpload)->move($destinationPath, $fileName);
            return $fileNameUrl = $destinationPath . $fileName;
        } else {
            return $fileNameUrl = "";
        }
    }
}
