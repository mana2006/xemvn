@extends('layouts.layout')

@section('content')
    <div class="col-md-8 text-left">
        <div class="row">
            <div class="col-sm-6">
                <h6><b>Upload video</b></h6>
            </div>
            <div class="col-sm-6 text-right right_a_tag">
                <h6><b><a class="none_decorate" href="/upload_videos">Đăng videos</a></b></h6>
            </div>
        </div>

        <div class="tip">
            Bạn có ảnh hài hước, vui nhộn? Hãy chia sẻ tiếng cười với mọi người bằng cách đăng lên xemvn.app<br>
            <b class="red">Chú ý: Tuyệt đối không đăng ảnh liên quan đến các vấn đề chính trị, tôn giáo, đồi trụy, trái với thuần phong mỹ tục.</b><br> 
            Và đừng quên đọc các <b class="red"> Nội quy </b> khác ở bên phải nhé!
        </div>
        <form enctype="multipart/form-data" action="#" method="POST">
            <div class="main_content">
                <div class="form-group">
                    <b>Chọn file ảnh (không quá 3MB)</b><b class="red">*</b><br>
                    <label class="custom-file">
                        <span class="custom-file-control"></span>
                        <input type="file" id="file" class="custom-file-input"  name="upload_images">
                    </label>
                </div>

                <div class="form-group input-upload">
                    <label><b>Tiêu đề của ảnh</b> <b class="red">*</b></label>
                    <input class="form-control" type="text" name="title_image">
                </div>

                <input type="checkbox" name="by_hand" id="by_hand"><label for="by_hand">&nbsp;<b>Ảnh này do tui tự làm! (chỉ tick nếu ảnh này do bạn tự chế, tự chụp, tự vẽ...)</b></label><br>

                <div class="form-group input-upload">
                    <label><b>Nguồn của ảnh</b></label>
                    <input class="form-control" type="text" name="source_image"><br>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Đăng ảnh</button>
            <button type="button" class="btn btn-secondary">Bỏ qua</button>
        </form>
        <br>
    </div>
@endsection