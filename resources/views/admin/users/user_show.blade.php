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
                                        <form id="show_member"  enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="form-control-label" for="name"><b>Tên : </b> </label>
                                                {{$user['name']}}
                                            </div>

                                            <div class="form-group">
                                                <p><b>Avatar</b></p>
                                                <br><br>
                                                @if($user['image'])
                                                    <img width="20%" src="{{ URL::to('/'.$user['image'])  }}">
                                                @else
                                                    <img width="20%" src="{{ URL::to('/img/smile_user.jpg') }}">
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label" for="email"><b>Email :</b></label>
                                                {{ $user['email'] }}
                                            </div>

                                            <div class="form-group">
                                                <a class="btn btn-primary" href="{{ URL::to('/admin/user/')  }}">Trở lại</a>
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