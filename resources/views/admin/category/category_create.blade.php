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
                                <i class="icon-note"></i> Thêm thể loại
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="flash-message">
                                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                                @if(Session::has('alert-' . $msg))

                                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    </p>
                                                @endif
                                            @endforeach
                                        </div> <!-- end .flash-message -->
                                        <form id="create_member" method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
                                            {{csrf_field()}}

                                            <div class="form-group">
                                                <label class="form-control-label" for="content">Tên thể loại</label><span class="error">(*)</span>
                                                <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Tên thể loại" value="{{ old('category_name') }}">
                                                @if($errors->has('category_name'))
                                                    <div class="error">{{ $errors->first('category_name') }}</div>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up"> Tạo mới </button>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-secondary" name="cancel" value="Cancel" onclick="clearForm('create_member')">Huỷ bỏ</button>
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