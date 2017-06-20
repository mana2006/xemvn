<?php

namespace App\Http\Controllers;

use App\Category;
use App\Members;
use App\Posts;
use App\Status;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("day la index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listStatus = Status::all();
        $listCategory = Category::all();

        return view('admin.posts.post_create',
            ['listStatus' => $listStatus, 'listCategory' => $listCategory]);
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
            'title'         => 'required',
            'post_images'   => 'required|mimes:jpeg,bmp,png,jpg'
        ];

        $message = [
            'title.required'            => 'Tiêu đề là trường bắt buộc',
            'post_images.required'      => 'Hình ảnh là trường bắt buộc',
            'post_images.mimes'         => 'Hình ảnh phải thuộc định dạng: jpeg,bmp,png,jpg'
        ];

        if (!empty($request->member_nickname)) {
            $rules['member_nickname'] =  'exists:members,nickname';
            $message['member_nickname.exists'] = 'Biệt danh không tồn tại';
        }

        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            $request->session()->flash('alert-warning', 'Thành viên chưa được đăng ký thành công !!!');

            return redirect()->back()->withErrors($validator)->withInput();
        } else {

            $fileName = $this->uploadImage('post_images');
            $member = Members::where('nickname', $request->member_nickname)->first();
            $post = new Posts();
            $post->title = $request->title;
            $post->content = $request->content;
            $post->members_id = $member->id;
            $post->image = $fileName;
            $post->category_id = $request->status;
            $post->status_id = $request->status;
            $post->created_at = date('Y-m-d H:i:s');
            $post->updated_at = date('Y-m-d H:i:s');
            $post->save();

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
        dd("day la show");
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
        dd("day la edit");
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
        dd("day la update");
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
        dd("day la destroy");
    }

    private function uploadImage($fileNameUpload) {
        if (Input::file($fileNameUpload) != null) {
            $destinationPath = 'uploads/images/comments/';
            $extension = Input::file($fileNameUpload)->getClientOriginalExtension();
            $fileName = date('Ymd_His') . '.' . $extension;
            Input::file($fileNameUpload)->move($destinationPath, $fileName);
            return $fileNameUrl = $destinationPath . $fileName;
        } else {
            return $fileNameUrl = "";
        }
    }
}
