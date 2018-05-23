@extends('admin.dashboard.dashboard')

@section('content_main')
    <!-- Main content -->
    <main class="main">
        <div class="container-fluid pt-2">

            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="fa fa-edit"></i> Danh sách thành viên</h5>
                    </div>
                    <div class="card-block">
                        <table class="table table-striped table-bordered datatable">
                            <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Tên thành viên</th>
                                <th>Ngày đăng ký</th>
                                <th>Quyền</th>
                                <th>Thực thi</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)
                                <tr id="row_user{{ $user->id }}">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>Admin</td>
                                    <td>
                                        <a class="btn btn-success" href="{{ URL::to('/admin/user/'.$user->id) }}"> <i class="fa fa-search-plus "></i> </a>
                                        <a class="btn btn-info" href="{{ URL::to('/admin/user/'.$user->id.'/edit/') }}"> <i class="fa fa-edit "></i> </a>
                                        <button class="btn btn-danger delete_user" value="{{ $user->id }}">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @include('admin.pagination.default', ['paginator' => $users])
                    </div>
                </div>
            </div>
        </div>
    </main>



@endsection