<?php

namespace App\Http\Controllers;

use App\Category;
use App\Members;
use App\Posts;
use App\Status;
use App\User;
use Illuminate\Validation\Rule;
use Validator;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image; 
use Auth;

use File;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postList = Posts::select('id', 'title', 'content', 'image', 'views', 'user_id', 'status_id', 'category_id', 'members_id',
            'created_at')->where('del_flg', '<>', 1)->paginate(10);

        return view('admin.posts.post_index', ['posts' => $postList]);
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

        return view('admin.posts.post_create', ['listStatus' => $listStatus, 'listCategory' => $listCategory]);
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
            'title' => 'required',
            'post_images' => 'required|mimes:jpeg,bmp,png,jpg'
        ];

        $message = [
            'title.required' => 'Tiêu đề là trường bắt buộc',
            'post_images.required' => 'Hình ảnh là trường bắt buộc',
            'post_images.mimes' => 'Hình ảnh phải thuộc định dạng: jpeg,bmp,png,jpg'
        ];

        if (!empty($request->nickname)) {

            $rules['nickname'] = [
                Rule::exists('members')->where(function ($query) use ($request) {
                    $query->where([
                        ['nickname', $request->nickname],
                        ['status', 1],
                        ['del_flg', 0]
                    ]);
                })
            ];
            $message['nickname.exists'] = 'Biệt danh không tồn tại';
        }

        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {

            $request->session()->flash('alert-warning', 'Thành viên chưa được đăng ký thành công !!!');

            return redirect()->back()->withErrors($validator)->withInput();

        } else {

            $fileName = $this->uploadImage($request->file('post_images'), 'create');
            if ($request->nickname) {
                $member = Members::where([
                    ['nickname', $request->nickname],
                    ['status', 1],
                    ['del_flg', 0]
                ])->first();
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
            } else {
                $email = Auth::user()->email;
                $userId = User::where([
                    ['email', $email],
                    ['del_flg', 0]
                ])->first();
                $post = new Posts();
                $post->title = $request->title;
                $post->content = $request->content;
                $post->user_id = $userId->name;
                $post->image = $fileName;
                $post->category_id = $request->status;
                $post->status_id = $request->status;
                $post->created_at = date('Y-m-d H:i:s');
                $post->updated_at = date('Y-m-d H:i:s');
                $post->save();
            }
            
            

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
        $listStatus = Status::all();
        $listCategory = Category::all();
        $post = Posts::whereId($id)->get();
//        dd($post[0]->user_id);
        return view('admin.posts.post_update',
            ['post' => $post[0], 'listStatus' => $listStatus, 'listCategory' => $listCategory]);
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
        $rules = [
            'title' => 'required',
            'post_images' => 'mimes:jpeg,bmp,png,jpg'
        ];

        $message = [
            'title.required' => 'Tiêu đề là trường bắt buộc',

            'post_images.mimes' => 'Hình ảnh phải thuộc định dạng: jpeg,bmp,png,jpg'
        ];

        $post = Posts::whereId($id)->get();
        if (empty($post[0]->image)) {
            $rules['post_images'] = 'required';
            $message['post_images.required'] = 'Hình ảnh là trường bắt buộc';
        }

        if (!empty($request->nickname)) {

            $rules['nickname'] = [
                Rule::exists('members')->where(function ($query) use ($request) {
                    $query->where([
                        ['nickname', $request->nickname],
                        ['status', 1],
                        ['del_flg', 0]
                    ]);
                })
            ];
            $message['nickname.exists'] = 'Biệt danh không tồn tại';
        }

        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {

            $request->session()->flash('alert-warning', 'Thành viên chưa được cập nhật thành công !!!');

            return redirect()->back()->withErrors($validator)->withInput();

        } else {
            
            if (empty($request->file('post_images'))) {
                $fileName = $post[0]->image;
            } else {
                $fileName = $this->uploadImage($request->file('post_images'), 'update', $post[0]->image);
            }
            
            if ($request->nickname) {
                $member = Members::where([
                    ['nickname', $request->nickname],
                    ['status', 1],
                    ['del_flg', 0]
                ])->first();

                $post = Posts::find($id);
                $post->title = $request->title;
                $post->content = $request->content;
                $post->members_id = $member->id;
                $post->image = $fileName;
                $post->category_id = $request->status;
                $post->status_id = $request->status;
                $post->created_at = date('Y-m-d H:i:s');
                $post->updated_at = date('Y-m-d H:i:s');
                $post->save();
            } else {
                $email = Auth::user()->email;
                $userId = User::where([
                    ['email', $email],
                    ['del_flg', 0]
                ])->first();
                $post = Posts::find($id);
                $post->title = $request->title;
                $post->content = $request->content;
                $post->members_id = $userId->id;
                $post->image = $fileName;
                $post->category_id = $request->status;
                $post->status_id = $request->status;
                $post->created_at = date('Y-m-d H:i:s');
                $post->updated_at = date('Y-m-d H:i:s');
                $post->save();
            }

            $request->session()->flash('alert-success', 'Thành viên đã được đăng ký thành công !!!');

            return redirect()->back();
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
        dd("day la destroy");
    }

    /**
     * @param string $image
     * 
     * @param string $action
     * 
     * @return string $fileNameUrl
     * */
    private function uploadImage($image, $action = "", $url = "")
    {
        if ($image != null) {
            $img = Image::make($image->getRealPath());
            $img->resize('400');
            
            // water mark
            $img->insert('img/logo.png');
            $year = date('Y');
            $month = date('m');
            $destinationPath = 'uploads/images/comments/' . $year . '/' . $month . '/';
            $extension = $image->getClientOriginalExtension();
            $fileName = date('Ymd_His') . '.' . $extension;
            if ($action == 'update') {
                if(File::isFile($url)){
                    File::delete($url);
                }
            }
            $image->move($destinationPath, $fileName);
            $img->save($destinationPath.$fileName);

            return $fileNameUrl = $destinationPath . $fileName;
        } else {
            return $fileNameUrl = "";
        }
    }
}
