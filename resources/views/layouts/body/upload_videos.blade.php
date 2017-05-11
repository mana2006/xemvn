@extends('layouts.layout')

@section('content')
    <div class="col-md-8 text-left">
        <div class="row resposive_row">
            <div class="col-sm-6">
                <h6><b>Đăng hình ảnh mới</b></h6>
            </div>
            <div class="col-sm-6 text-right right_a_tag">
                <h6><b><a class="none_decorate" href="/upload_images">Đăng ảnh</a></b></h6>
            </div>
        </div>

        <div class="tip">
            Hãy chia sẻ tiếng cười với mọi người bằng cách đăng lên xemvn.app <br>
            <b class="red">Chú ý: Tuyệt đối không đăng ảnh liên quan đến các vấn đề chính trị, tôn giáo, đồi trụy, trái với thuần phong mỹ tục.</b><br>
            Và đừng quên đọc các <b class="red"> Nội quy </b> khác ở bên phải nhé!
        </div>
        <form enctype="multipart/form-data" action="#" method="POST">
            <div class="main_content">
                <div class="form-group">
                    <b>Upload Video file (tối đa 15MB)</b><b class="red">*</b><br>
                    <label class="custom-file">
                        <span class="custom-file-control"></span>
                        <input type="file" id="file" class="custom-file-input"  name="upload_videos">
                    </label>
                </div>

                <div class="form-group input-upload">
                    <label><b>Đường dẫn đến video Youtube</b> <b class="red">*</b></label><br>
                    <i>Copy từ thanh địa chỉ trình duyệt mà bạn đang xem Youtube<br>
                        Ví dụ: http://www.youtube.com/watch?v=9bZkp7q19f0</i>
                    <input class="form-control" type="text" name="title_image">
                </div>
                <div class="form-group input-upload">
                    <label><b>Tiêu đề của video</b></label><b class="red">*</b><br>
                    <input class="form-control" type="text" name="source_image"><br>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Đăng video</button>
            <button type="button" class="btn btn-secondary">Bỏ qua</button>
        </form>
        <br>
    </div>
@endsection