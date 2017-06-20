@extends('admin.dashboard.dashboard')

@section('content_main')
    <!-- Main content -->
    <main class="main">
        <div class="container-fluid pt-2">

            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="fa fa-edit"></i> Danh sách thể loại</h5>
                    </div>
                    <div class="card-block">
                        <table class="table table-striped table-bordered datatable">
                            <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Tên thể loại</th>
                                <th>Ngày đăng ký</th>
                                <th>Thực thi</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($categoryList as $category)

                                <tr id="row_category{{ $category->id }}">
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ URL::to('/admin/category/'.$category->id.'/edit/') }}"> <i class="fa fa-edit "></i> </a>
                                        <button class="btn btn-danger delete_category" value="{{ $category->id }}">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @include('admin.pagination.default', ['paginator' => $categoryList])
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection