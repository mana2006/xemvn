<!--Start right content-->
<div class="col-md-4 right_content">
    <div class="row tip_uploader"><!--Start class tip_uploader-->
        <div class="content">
            <div>
                <h6><b class="b_upload">Giới hạn đăng ảnh</b></h6><br>
                <div class="content_upload_1">
                    Bạn được đăng <b>2 
                        @if(!Auth::guest() && Request::is('upload_videos'))
                            video 
                        @elseif (!Auth::guest() && Request::is('upload_images'))
                            ảnh
                        @endif
                        /ngày</b> <br>
                    Số ảnh bạn đã đăng hôm nay: <b>0</b> <br> 
                    <i>(giới hạn sẽ tăng khi bạn được nhiều like)</i>
                </div>
            </div>
        </div>

    </div><!--End class tip_uploader-->


    <div class="row clip_hot"> <!--Start class clip_hot-->
        <div class="col-md-6" align="left">
            <h6><b>Nội quy đăng ảnh</b></h6>
        </div>
        <ul>
            <li class="content_upload_2">
                <b class="red">Tuyệt đối không đăng ảnh liên quan đến các vấn đề chính trị, tôn giáo, đồi trụy, trái với thuần phong mỹ tục</b>
            </li>
            <li class="content_upload_2">
                Không đăng ảnh đã bị trùng
            </li>
            <li class="content_upload_2">
                <span class="red">Đừng xóa watermark của ảnh (nếu có) để đăng bạn nhé!</span> Hãy tôn trọng sự sáng tạo!
            </li>
            <li class="content_upload_2">
                Hãy dùng chức năng tìm kiếm bằng hình ảnh của <b>Google Images</b> để tìm bản gốc của ảnh
            </li>
            <li class="content_upload_2">
                <span class="red">Ảnh sưu tầm mà để tự làm có thể bị xóa</span> mà không cần thông báo
            </li>
            <li class="content_upload_2">
                Không đăng ảnh tự sướng, dìm hàng
            </li>
            <li class="content_upload_2">
                <span class="red">Không đăng ảnh chứa thông tin cá nhân của người khác</span> (kể cả tên, avatar, link Facebook), trừ người nổi tiếng
            </li>
            <li class="content_upload_2">
                Nhập các thông tin bằng tiếng Việt có dấu và đúng chính tả
            </li>
            <li class="content_upload_2">
                Hãy đặt tiêu đề và mô tả ảnh một cách sáng tạo. Tránh đặt kiểu như: "hay vãi", "chuẩn", ":))"... <span class="red">Không đặt tiêu đề câu like, vote, xin lên trang chủ hay có nội dung tương tự trong ảnh.</span>
            </li>
            <li class="content_upload_2">
                <b class="red">Đăng ảnh phản động, đồi trụy sẽ bị khóa tài khoản ngay lập tức</b>
            </li>
        </ul>

    </div><!--End class tip_uploader-->

</div>
<!--End right content-->