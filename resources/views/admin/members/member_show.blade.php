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
                                <th>Tên thành viên</th>
                                <th>Ngày đăng ký</th>
                                <th>Quyền truy cập</th>
                                <th>Trạng thái</th>
                                <th>Thực thi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Ajith Hristijan</td>
                                <td>2012/03/01</td>
                                <td>Member</td>
                                <td>
                                    <span class="badge badge-warning">Pending</span>
                                </td>
                                <td>
                                    <a class="btn btn-success" href="#"> <i class="fa fa-search-plus "></i> </a>
                                    <a class="btn btn-info" href="#"> <i class="fa fa-edit "></i> </a>
                                    <a class="btn btn-danger" href="#"> <i class="fa fa-trash-o "></i>

                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>



@endsection