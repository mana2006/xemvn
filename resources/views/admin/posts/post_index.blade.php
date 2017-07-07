@extends('admin.dashboard.dashboard')

@section('content_main')
    <!-- Main content -->
    <main class="main">
        <div class="container-fluid pt-2">

            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="fa fa-edit"></i> Danh sách bài viết</h5>
                    </div>
                    <div class="card-block">
                        <table class="table table-striped table-bordered datatable">
                            <thead>
                            <tr>
                                <th>Ảnh đại diện</th>
                                <th>Tiêu đề</th>
                                <th>Người viết (Nickname)</th>
                                <th>Thể loại</th>
                                <th>Lượt xem</th>
                                <th>Ngày đăng ký</th>
                                <th>Trạng thái</th>
                                <th>Thực thi</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($posts as $post)
                                <tr id="row_post{{ $post->id }}">

                                    @if($post->image)
                                        <td style="width: 15%"><img height="100px" style=" max-width: 50%;" src="{{ URL::to('/'.$post->image) }}"></td>
                                    @else
                                        <td style="width: 15%"><img height="100px" style=" max-width: 50%;" src="{{ URL::to('/img/smile_user.jpg') }}"></td>
                                    @endif

                                    <td>{{ $post->title }}</td>

                                    @if (!empty($post->memberInfo->nickname))
                                        <td>{{ $post->memberInfo->nickname }}</td>
                                    @else
                                        <td>{{ $post->userInfo['name'] }}</td>
                                    @endif

                                    <td>{{ $post->categoryInfo->name }}</td>

                                    @if (empty($post->views))
                                        <td><i class="icon-eye"></i> 0</td>
                                    @else
                                        <td><i class="icon-eye"></i> {{ $post->views }}</td>
                                    @endif

                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        @if($post->statusInfo->name == 'Active')
                                            <span class="badge badge-success">Active</span>
                                        @elseif($post->statusInfo->name == 'Inactive')
                                            <span class="badge badge-default">Inactive</span>
                                        @elseif($post->statusInfo->name == 'Pending')
                                            <span class="badge badge-warning">Pending</span>
                                        @elseif($post->statusInfo->name == 'Banned')
                                            <span class="badge badge-danger">Banned</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ URL::to('/admin/post/'.$post->id) }}"> <i class="fa fa-search-plus "></i> </a>
                                        <a class="btn btn-info" href="{{ URL::to('/admin/post/'.$post->id.'/edit/') }}"> <i class="fa fa-edit "></i> </a>
                                        <button class="btn btn-danger delete_post" value="{{ $post->id }}">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @include('admin.pagination.default', ['paginator' => $posts])
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection