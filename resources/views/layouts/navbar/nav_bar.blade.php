<aside>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <span class="navbar-brand">XEMVN.APP</span>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto ul_navbar">
                <li class="nav-item">
                    <a class="navbar-brand" href="#"><img src="{!! URL::to('/img/logo.png') !!}"><span class="sr-only">(current)</span></a>
                <li class="nav-item dropdown">
                    <a class="nav-link"><img id="nav_icon" src="{!! URL::to('/img/nav-icon.png') !!}"><span
                    class="sr-only">(current)</span></a>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! (Request::is('/')) ? "active" : "" !!}" href="/">Mới</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {!! (Request::is('unread')) ? "active" : "" !!}" href="/unread">Chưa xem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! (Request::is('comment')) ? "active" : "" !!}" href="/comment">Bình chọn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! (Request::is('videos')) ? "active" : "" !!}" href="/videos">Video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! (Request::is('hot')) ? "active" : "" !!}" href="/hot">Hot</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! (Request::is('old')) ? "active" : "" !!}" href="/old">Cũ xem</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {!! (Request::is('uploads')) ? "active" : "" !!}"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Đăng bài</a>
                    <div class="dropdown-content">
                        <a href="/upload_images">Đăng ảnh</a>
                        <a href="/upload_videos">Đăng videos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {!! (Request::is('troll_images')) ? "active" : "" !!}" href="/troll_images">Chế ảnh</a>
                    <div class="dropdown-content">
                        <a href="#">Chế rage commic</a>
                        <a href="#">Chế meme</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! (Request::is('rank_top')) ? "active" : "" !!}" href="/rank_top">Đua top<img id="nav_icon" src="{!! URL::to('/img/quiznhe.png') !!}"></a>
                </li>
                @if(!Auth::guest())
                    <span id="mail_logo"></span>
                    <li class="nav-item dropdown">
                        <a class="nav-link">
                            <img id="nav_logo" src="{!! url::to('img/smile_user.jpg') !!}"/>
                        </a>
                        <div class="dropdown-content">
                            <a href="/my_images">Ảnh của bạn</a>
                            <a href="/my_favo_images">Ảnh yêu thích</a>
                            <a href="/my_infor">Thông tin cá nhân</a>
                            <a href="/my_pass">Đổi mật khẩu</a>
                            <a href="/logout">Thoát</a>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">
                            <button class="btn-xs btn-outline-secondary btn_login" type="button">Đăng nhập</button>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</aside>