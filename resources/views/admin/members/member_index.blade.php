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
                                <th>Ảnh đại diện</th>
                                <th>Tên thành viên</th>
                                <th>Biệt danh</th>
                                <th>Ngày đăng ký</th>
                                <th>Trạng thái</th>
                                <th>Thực thi</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            @foreach($members as $member)

                            <tr id="row_member{{ $member->id }}">
                                @if($member->image)
                                    <td style="width: 15%"><img height="100px" style=" max-width: 50%;" src="{{ URL::to('/'.$member->image) }}"></td>
                                @else
                                    <td style="width: 15%"><img height="100px" style=" max-width: 50%;" src="{{ URL::to('/img/smile_user.jpg') }}"></td>
                                @endif
                                <td>{{ $member->lastname ." ". $member->firstname}}</td>
                                <td>{{ $member->nickname }}</td>
                                <td>{{ $member->created_at }}</td>
                                <td>
                                    @if($member->statusInfo->name == 'Active')
                                        <span class="badge badge-success">Active</span>
                                    @elseif($member->statusInfo->name == 'Inactive')
                                        <span class="badge badge-default">Inactive</span>
                                    @elseif($member->statusInfo->name == 'Pending')
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($member->statusInfo->name == 'Banned')
                                        <span class="badge badge-danger">Banned</span>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{ URL::to('/admin/member/'.$member->id) }}"> <i class="fa fa-search-plus "></i> </a>
                                    <a class="btn btn-info" href="{{ URL::to('/admin/member/'.$member->id.'/edit/') }}"> <i class="fa fa-edit "></i> </a>
                                    <button class="btn btn-danger delete_member" value="{{ $member->id }}">
                                        <i class="fa fa-trash-o "></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @include('admin.pagination.default', ['paginator' => $members])
                    </div>
                </div>
            </div>
        </div>
    </main>



@endsection