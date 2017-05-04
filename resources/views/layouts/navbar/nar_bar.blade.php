<aside>
    <nav class="navbar navbar-toggleable-md fix-top navbar-inverse bg-inverse">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"><img id="nav_logo" src="{!! URL::to('/img/logo.png') !!}"><span
                                    class="sr-only">(current)</span></a>
                    </li>
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
                        <a class="nav-link {!! (Request::is('comment')) ? "active" : "" !!}" href="/comment">Bình
                            chọn</a>
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
                        <a class="nav-link {!! (Request::is('uploads')) ? "active" : "" !!}" href="/uploads"><i
                                    class="fa fa-cloud-upload" aria-hidden="true"></i> Đăng bài</a>
                        <div class="dropdown-content">
                            <a href="#">Đăng ảnh</a>
                            <a href="#">Đăng videos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {!! (Request::is('troll_images')) ? "active" : "" !!}" href="/troll_images">Chế
                            ảnh</a>
                        <div class="dropdown-content">
                            <a href="#">Chế rage commic</a>
                            <a href="#">Chế meme</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {!! (Request::is('rank_top')) ? "active" : "" !!}" href="/rank_top">Đua
                            top<img id="nav_icon" src="{!! URL::to('/img/quiznhe.png') !!}"></a>
                    </li>
                    <div class="clearfix"></div>
                    @if(Session::getId())

                        <img href="{!! url::to('img/smile_user.jpg') !!}"/>
                    @else
                        <a class="nav-link" href="/login">
                            <button class="btn-xs btn-outline-secondary btn_login" type="button">Đăng nhập</button>
                        </a>
                    @endif
                    
                </ul>

            </div>
        </div>
        </div>
    </nav>
</aside>