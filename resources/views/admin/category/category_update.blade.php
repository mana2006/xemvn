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
                                <i class="icon-note"></i> Cập nhật chủ đề
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
                                        <form id="update_article" method="POST" action="{{route('category.update', $categoryList['id'])}}">
                                            {{csrf_field()}}
                                            {{method_field('PUT')}}
                                            <div class="form-group">
                                                <label class="form-control-label" for="content">Tên chủ đề</label><span class="error">(*)</span>
                                                <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Tên chủ đề" value="{{ !empty(old('category_name')) ? old('category_name') : $categoryList['name'] }}">
                                                @if($errors->has('name'))
                                                    <div class="error">{{ $errors->first('name') }}</div>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" name="update"> Cập nhật</button>&nbsp;&nbsp;&nbsp;
                                                <button type="button" class="btn btn-secondary" name="cancel" value="Cancel" onclick="clearForm('update_article')">Huỷ bỏ</button>
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