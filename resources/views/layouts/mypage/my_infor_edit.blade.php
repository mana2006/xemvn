@extends('layouts.layout')

@section('content')
    <div class="col-md-8 text-left">
        <div class="row">
            <div class="col-sm-6">
                <h6><b>Cập nhật thông tin</b></h6>
            </div>
            <div class="col-sm-6 text-right right_a_tag">
                <h6><b><a class="none_decorate" href="/upload_videos">Đổi mật khẩu</a></b></h6>
            </div>
        </div>

        <form enctype="multipart/form-data" action="#" method="POST">
            <div class="main_content">
                <div class="form-group input-upload">
                    <label><b>Email</b> <b class="red">*</b></label>
                    <input class="form-control" type="text" name="email" disabled>
                </div>

                <div class="form-group input-upload">
                    <label><b>Tên đăng nhập</b> <b class="red">*</b></label><br>
                    <i class="red">Tên đăng nhập sẽ được hiển thị trên đường link đến trang cá nhân của bạn (vd xem.vn/u/admin). Tên đăng nhập không thể thay đổi sau khi cập nhật.</i>
                    <input class="form-control" type="text" name="source_image"><br>
                </div>

                <div class="form-group input-upload">
                    <label><b>Tên hiển thị</b> <b class="red">*</b></label>
                    <input class="form-control" type="text" name="name_show">
                </div>

                <div class="form-group">
                    <b>Avatar</b><br>
                    <p><img src="{!! URL::to('img/smile_user.jpg') !!}"/></p>
                    <label class="custom-file">
                        <span class="custom-file-control"></span>
                        <input type="file" id="file" class="custom-file-input"  name="upload_avatar">
                    </label>
                </div>

                <div class="form-group input-upload">
                    <label><b>Website</b></label>
                    <input class="form-control" type="text" name="website">
                </div>

                <div class="form-group input-upload">
                    <label><b>Giới thiệu</b></label>
                    <input class="form-control" type="text" name="introduce">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
            <button type="button" class="btn btn-secondary">Bỏ qua</button>
        </form>
        <br>
    </div>
@endsection