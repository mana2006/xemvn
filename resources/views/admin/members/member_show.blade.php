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
                                                <label class="form-control-label" for="lastname"><b>Họ : </b></label>
                                                {{$listMember->lastname}}
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label" for="firstname"><b>Tên : </b> </label>
                                                {{$listMember->firstname}}
                                            </div>

                                            <div class="form-group">
                                                <p><b>Avatar</b></p>
                                                <br><br>
                                                @if($listMember->image)
                                                    <img width="20%" src="{{ URL::to('/'.$listMember->image)  }}">
                                                @else
                                                    <img width="20%" src="{{ URL::to('/img/smile_user.jpg') }}">
                                                @endif
                                                
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label" for="email"><b>Trạng thái : </b></label>
                                                @if($listMember->statusName->name == 'active')
                                                    <span class="badge badge-success">Active</span>
                                                @elseif($listMember->statusName->name == 'inactive')
                                                    <span class="badge badge-default">Inactive</span>
                                                @elseif($listMember->statusName->name == 'pending')
                                                    <span class="badge badge-warning">Pending</span>
                                                @elseif($listMember->statusName->name == 'banned')
                                                    <span class="badge badge-danger">Banned</span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label" for="email"><b>Email :</b></label>
                                                {{ $listMember->email }}
                                            </div>

                                            <div class="form-group">
                                                <a class="btn btn-primary" href="{{ URL::to('/admin/member/')  }}">Trở lại</a>
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