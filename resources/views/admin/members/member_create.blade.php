@extends('admin.dashboard.dashboard')

@section('content_main')
    <!-- Main content -->
    <main class="main">
        <div class="container-fluid pt-2">

            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="icon-note"></i> Thêm thành viên
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form id="create_member" method="POST" action="{{route('member.store')}}">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label class="form-control-label" for="lastname">Họ </label><span class="error">(*)</span>
                                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Họ">
                                                @if($errors->has('lastname'))
                                                    <div class="error">{{ $errors->first('lastname') }}</div>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label" for="firstname">Tên</label><span class="error">(*)</span>
                                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Tên">
                                                @if($errors->has('firstname'))
                                                    <div class="error">{{ $errors->first('firstname') }}</div>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label" for="email">Email</label><span class="error">(*)</span>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                                @if($errors->has('email'))
                                                    <div class="error">{{ $errors->first('email') }}</div>
                                                @endif
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label" for="password">Mật khẩu</label><span class="error">(*)</span>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                                                    @if($errors->has('password'))
                                                        <div class="error">{{ $errors->first('password') }}</div>
                                                    @endif
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label" for="confirm_password">Xác nhận lại mật khẩu</label><span class="error">(*)</span>
                                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Xác nhận lại mật khẩu">
                                                    @if($errors->has('confirm_password'))
                                                        <div class="error">{{ $errors->first('confirm_password') }}</div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Đăng ký</button>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-secondary" name="cacel" value="Cancel">Huỷ bỏ</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>

        </div>
    </main>



@endsection