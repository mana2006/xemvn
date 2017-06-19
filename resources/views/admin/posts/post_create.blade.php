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
                                <i class="icon-note"></i> Thêm bài viết
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
                                        <form id="create_member" method="POST" action="{{route('member.store')}}" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label class="form-control-label" for="title">Chủ đề </label><span class="error">(*)</span>
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Chủ đề" value="{{ old('title') }}" aria-describedby="title-error" aria-required="true" aria-invalid="true">
                                                @if($errors->has('title'))
                                                    <div class="error">{{ $errors->first('title') }}</div>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label" for="content">Nội dung</label><span class="error">(*)</span>
                                                <input type="text" class="form-control" id="content" name="content" placeholder="Nội dung" value="{{ old('content') }}">
                                                @if($errors->has('content'))
                                                    <div class="error">{{ $errors->first('content') }}</div>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <p>Hình ảnh</p>
                                                <e></e>
                                                <br><br> <label class="custom-file">
                                                    <span class="custom-file-control"></span>
                                                    <input type="file" id="article_images" class="custom-file-input" name="article_images">

                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label" for="email">Trạng thái</label><span class="error">(*)</span>
                                                <select id="select" name="status" class="form-control" size="1">
                                                    @foreach($listStatus as $status)
                                                        <option value="{{ $status->id }}" {{ old('status') == $status->id ? "selected" : "" }}>{{$status->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label" for="email">Thể loại</label><span class="error">(*)</span>
                                                <select id="select" name="status" class="form-control" size="1">
                                                    @foreach($listCategory as $category)
                                                        <option value="{{ $category->id }}" {{ old('$category') == $category->id ? "selected" : "" }}>{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up"> Tạo mới </button>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-secondary" name="cacel" value="Cancel" onclick="clearForm('create_member')">Huỷ bỏ</button>
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