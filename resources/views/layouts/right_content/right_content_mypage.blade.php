<!--Start right content-->
<div class="col-md-4 right_content">
    <div class="row content_mypage_image"><!--Start class tip_uploader-->
        <div class="content">
            <div class="mypage_infor">
                <img class="img_infor" src="{!! URL::to('/img/smile_user.jpg') !!}">
                &nbsp;Nguyễn Thanh Hùng <br>
                &nbsp;<span class="small">Tham gia từ: 04/05/2017</span><br>
                
            </div>
            <div class="mypage_xemvn">
                Số  @if(!Auth::guest() && Request::is('my_videos'))
                    video
                @elseif (!Auth::guest() && Request::is('my_images'))
                    ảnh
                @endif đã đăng: <span class="pink"><b>0</b></span><br>
                Được like: <span class="pink"><b>0</b></span> lần<br>
                Được bình luận: <span class="pink"><b>0</b></span> lần<br>
                Được xem: <span class="pink"><b>0</b></span> lần<br>
                Thứ hạng: <span class="pink"><b>100.001</b></span><br>
            </div>
        </div>

    </div><!--End class tip_uploader-->

</div>
<!--End right content-->