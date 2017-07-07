<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Members;
use Illuminate\Support\Facades\Input;
use App\Status;


class AdminMemberController extends Controller
{
    protected $app;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memberList = Members::select('id', 'image', 'firstname', 'lastname', 'nickname', 'status', 'created_at')
            ->where('del_flg', '<>', 1)
            ->paginate(10);
        return view('admin.members.member_index', ['members' => $memberList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listStatus = Status::all();
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
            'nickname'          => 'required|unique:members,nickname',
            'email'             => 'required|email|unique:members,email',
            'password'          => 'required|min:6',
            'confirm_password'  => 'required|min:6|same:password'
        ];

        $message = [
            'lastname.required'             => 'Họ là trường bắt buộc',
            'firstname.required'            => 'Tên là trường bắt buộc',
            'nickname.required'             => 'Biệt danh là trường bắt buộc',
            'nickname.unique'               => 'Tên là trường bắt buộc',
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

            $member = new Members();
            $member->lastname = $request->lastname;
            $member->firstname = $request->firstname;
            $member->nickname = $request->nickname;
            $member->image = $fileName;
            $member->email = $request->email;
            $member->password = bcrypt($request->password);
            $member->status = $request->status;
            $member->created_at = date('Y-m-d H:i:s');
            $member->updated_at = date('Y-m-d H:i:s');
            $member->save();

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
        $listStatus = Members::whereId($id)->with('statusName')->get();
        return view('admin.members.member_show', ['listMember' => $listStatus[0]]);

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
        $listStatus = Status::all();
        $memberList = Members::select('id', 'image', 'firstname', 'lastname', 'email', 'status')
            ->where('id', '=', $id)
            ->get()->toArray();
        return view('admin.members.member_update', ['memberList' => $memberList[0], 'listStatus' => $listStatus]);
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
        if ($request->password != "" && $request->confirm_password != "") {
            $rules = [
                'lastname'          => 'required',
                'firstname'         => 'required',
                'nickname'          => 'required|unique:members,nickname',
                'email'             => "required|email|unique:members,email,$id",
                'password'          => 'required|min:6',
                'confirm_password'  => 'required|min:6|same:password'

            ];

            $message = [
                'lastname.required'             => 'Họ là trường bắt buộc',
                'firstname.required'            => 'Tên là trường bắt buộc',
                'nickname.required'             => 'Biệt danh là trường bắt buộc',
                'nickname.unique'               => 'Tên là trường bắt buộc',
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
                    $member = Members::find($id);
                    $member->lastname = $request->lastname;
                    $member->firstname = $request->firstname;
                    $member->nickname = $request->nickname;
                    $member->image = $fileName;
                    $member->email = $request->email;
                    $member->password = bcrypt($request->password);
                    $member->status = $request->status;
                    $member->updated_at = date('Y-m-d H:i:s');
                    $member->save();

                } else {
                    $member = Members::find($id);
                    $member->lastname = $request->lastname;
                    $member->firstname = $request->firstname;
                    $member->nickname = $request->nickname;
                    $member->email = $request->email;
                    $member->password = bcrypt($request->password);
                    $member->status = $request->status;
                    $member->updated_at = date('Y-m-d H:i:s');
                    $member->save();
                }
                

                $request->session()->flash('alert-success', 'Thành viên đã được cập nhật thành công !!!');

                return redirect()->back();
            }
        } else {
            $rules = [
                'lastname'          => 'required',
                'firstname'         => 'required',
                'email'             => "required|email|unique:members,email,$id",
            ];

            $message = [
                'lastname.required'             => 'Họ là trường bắt buộc',
                'firstname.required'            => 'Tên là trường bắt buộc',
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

                    $member = Members::find($id);
                    $member->lastname = $request->lastname;
                    $member->firstname = $request->firstname;
                    $member->nickname = $request->nickname;
                    $member->image = $fileName;
                    $member->email = $request->email;
                    $member->status = $request->status;
                    $member->updated_at = date('Y-m-d H:i:s');
                    $member->save();

                } else {

                    $member = Members::find($id);
                    $member->lastname = $request->lastname;
                    $member->firstname = $request->firstname;
                    $member->nickname = $request->nickname;
                    $member->email = $request->email;
                    $member->status = $request->status;
                    $member->updated_at = date('Y-m-d H:i:s');
                    $member->save();

                }

                $request->session()->flash('alert-success', 'Thành viên đã được cập nhật thành công !!!');

                return redirect()->back();
            }
        }
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
        Members::where('id', '=', $id)
        ->update([
            'del_flg' => '1' 
        ]);
    }
    
    /**
     * Upload and save image
     * 
     * @param string $fileNameUpload
     * 
     * @return string
     * */
    
    private function uploadImage($fileNameUpload) {
        if (Input::file($fileNameUpload) != null) {
            $year = date('Y');
            $month = date('m');
            $destinationPath = 'uploads/avatars/members/'.$year.'/'.$month.'/';
            $extension = Input::file($fileNameUpload)->getClientOriginalExtension();
            $fileName = date('Ymd_His') . '.' . $extension;
            Input::file($fileNameUpload)->move($destinationPath, $fileName);
            return $fileNameUrl = $destinationPath . $fileName;
        } else {
            return $fileNameUrl = "";
        }
    }

}
