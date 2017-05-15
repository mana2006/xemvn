<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Members;
use Illuminate\Support\Facades\Input;
use App\Status;

class AdminMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memberList = Members::select('id', 'image', 'firstname', 'lastname', 'status', 'created_at')
            ->where('del_flg', '<>', 1)
            ->paginate(10);
        return view('admin.members.member_show', ['members' => $memberList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listStatus = Status::select('*')->get();
        return view('admin.members.member_create', ['listStatus' => $listStatus]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'lastname'          => 'required',
            'firstname'         => 'required',
            'email'             => 'required|email|unique:members,email',
            'password'          => 'required|min:6',
            'confirm_password'  => 'required|min:6|same:password'

        ];

        $message = [
            'lastname.required'             => 'Họ là trường bắt buộc',
            'firstname.required'            => 'Tên là trường bắt buộc',
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
            $destinationPath = 'uploads/avatars'; // upload path
            $extension = Input::file('upload_images')->getClientOriginalExtension(); // getting image extension
            $fileName = date('Ymd_His') . '.' . $extension; // renameing image
            Input::file('upload_images')->move($destinationPath, $fileName); // uploading file to given path
            Members::insert([
                'lastname'      => $request->lastname,
                'firstname'     => $request->firstname,
                'image'         => 'uploads/avatars/' . $fileName,
                'email'         => $request->email,
                'password'      => bcrypt($request->password),
                'status'        => $request->status,
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
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd("bbbb");
        //        return view('user.profile', ['user' => User::findOrFail($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        dd("cccc");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        dd("eeeeeeee");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        dd("fffffff");
    }
}
