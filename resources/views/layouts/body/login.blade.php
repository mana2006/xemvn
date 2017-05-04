@extends('layouts.layout')

@section('content')
    <div class="col-md-8 text-left">
        <h5>Đăng nhập</h5>
        <form class="form-login" action="{{ url('/login') }}" method="POST" role="form">
            @if($errors->has('errorlogin'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{$errors->first('errorlogin')}}
                </div>
            @endif
            <b><label>Email</label> <span class="red">*</span></b>
            <div class="form-group">
                <input class="form-control input-login" type="text" name="email">
            </div>
            @if($errors->has('email'))
                <p style="color:red">{{$errors->first('email')}}</p>
            @endif
            <b><label>Mật khẩu</label> <span class="red">*</span></b>
            <div class="form-group">
                <input class="form-control input-login" type="password" name="password">
            </div>
            @if($errors->has('password'))
                <p style="color:red">{{$errors->first('password')}}</p>
            @endif
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="login" class="btn btn-info" value="Đăng nhập">
        </form>

        <div class="login-help">
            <a class="login-help" href="#">Đăng ký</a> - <a class="login-help" href="#">Quên mật khẩu</a>
        </div>
    </div>
@endsection