@extends('layouts.layout')

@section('content')
    <div class="col-md-8 text-left">
            <h6><b>Cập nhật mật khẩu</b></h6>

        <p class="small">Ngoài cách đăng nhập vào xem.vn bằng tài khoản Facebook, bạn có thể đặt mật khẩu để đăng nhập bằng email và mật khẩu trong trường hợp không vào được Facebook hoặc mất tài khoản Facebook.</p>
        <form enctype="multipart/form-data" action="#" method="POST">
            <div class="main_content">
                <div class="form-group input-upload">
                    <label><b>Mật khẩu cũ</b> <b class="red">*</b></label>
                    <input class="form-control input-login" type="password" name="old_pass">
                </div>

                <div class="form-group input-upload">
                    <label><b>Mật khẩu mới</b> <b class="red">*</b></label>
                    <input class="form-control input-login" type="password" name="new_pass"><br>
                </div>

                <div class="form-group input-upload">
                    <label><b>Xác nhận mật khẩu mới</b> <b class="red">*</b></label>
                    <input class="form-control input-login" type="password" name="new_pass_confirm"><br>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
            <button type="button" class="btn btn-secondary">Bỏ qua</button>
        </form>
        <br>
    </div>
@endsection