<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Validator;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryList = Category::select('id', 'name', 'created_at')
            ->paginate(10);
        return view('admin.category.category_index', ['categoryList' => $categoryList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.category_create');
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
            'category_name' => 'required',
        ];

        $message = [
            'category_name.required' => 'Tên chủ đề là trường bắt buộc',
        ];

        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            $request->session()->flash('alert-warning', 'Chủ đề chưa được đăng ký thành công !!!');

            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $member = new Category();
            $member->name = $request->category_name;
            $member->created_at = date('Y-m-d H:i:s');
            $member->updated_at = date('Y-m-d H:i:s');
            $member->save();

            $request->session()->flash('alert-success', 'Chủ đề đã được đăng ký thành công !!!');

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
            //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryList = Category::select('id', 'name')
            ->where('id', '=', $id)
            ->get()->toArray();
        return view('admin.category.category_update', ['categoryList' => $categoryList[0]]);
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
        $rules = [
            'category_name' => 'required',
        ];

        $message = [
            'category_name.required' => 'Tên chủ đề là trường bắt buộc',
        ];

        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            $request->session()->flash('alert-warning', 'Chủ đề chưa được cập nhật thành công !!!');

            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $member = Category::find($id);
            $member->name = $request->category_name;
            $member->created_at = date('Y-m-d H:i:s');
            $member->updated_at = date('Y-m-d H:i:s');
            $member->save();

            $request->session()->flash('alert-success', 'Chủ đề đã được đăng ký thành công !!!');

            return redirect()->back();
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
        Category::destroy($id);
    }
}
