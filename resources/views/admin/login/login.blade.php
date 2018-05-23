@extends('admin.index')

@section('content')
    <body class="flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form class='form' action="/admin/login" name="login_form" method="POST" accept-charset="UTF-8">
                    {!! csrf_field() !!}
                    @if($errors->has('errorlogin'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{$errors->first('errorlogin')}}
                        </div>
                    @endif
                    <div class="card-group mb-0">
                        <div class="card p-2">
                            <div class="card-block">
                                <h1>Login</h1>
                                <p class="text-muted">Sign In to your account</p>
                                <div class="input-group mb-1">
                                    <span class="input-group-addon"><i class="icon-user"></i>
                                    </span> <input type="text" name="email" class="form-control" placeholder="Username">
                                </div>
                                @if($errors->has('email'))
                                    <p style="color:red">{{$errors->first('email')}}</p>
                                @endif
                                <div class="input-group mb-2">
                                    <span class="input-group-addon"><i class="icon-lock"></i>
                                    </span>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                @if($errors->has('password'))
                                    <p style="color:red">{{$errors->first('password')}}</p>
                                @endif

                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary px-2 btn-login">Login</button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button type="button" class="btn btn-link px-0">Forgot password?</button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-facebook text" style="margin-bottom: 4px">
                                            <span>Sign up with Facebook</span>
                                        </button>

                                        <button type="button" class="btn btn-google-plus text" style="margin-bottom: 4px">
                                            <span>Sign up with Google</span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card card-inverse card-primary py-3 hidden-md-down" style="width:44%">
                            <div class="card-block text-center">
                                <div>
                                    <h2>Sign up</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <button type="button" class="btn btn-primary active mt-1">Register Now!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Bootstrap and necessary plugins -->
    <script src="js/libs/jquery.min.js"></script>
    <script src="js/libs/tether.min.js"></script>
    <script src="js/libs/bootstrap.min.js"></script>

    </body>
@endsection