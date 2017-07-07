<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 4 Responsive Front-End Template">
    <meta name="author" content="hungnguyen">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keyword" content="Bootstrap, Responsive">
    <title>Xemvn</title>
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('font-awesome-4.7.0/css/font-awesome.min.css') !!}
</head>
<body>
<section id="container" class="">
    @include('layouts.navbar.nav_bar')
    <section id="main-content">
        <section class="wrapper">
            <div class="container text-center">
                <div class="row wrapper_content">
                    @yield('content')
                    @if(!Auth::guest() && Request::is('upload_videos') || !Auth::guest() && Request::is('upload_images'))
                        @include('layouts.right_content.right_content_uploads')
                    @elseif (!Auth::guest() && strpos(Request::url(), 'my_images') || !Auth::guest() && strpos(Request::url(), 'my_videos'))
                        @include('layouts.right_content.right_content_mypage')
                    @else
                        @include('layouts.right_content.right_content')
                    @endif
                </div>
            </div>
        </section>
    </section>
</section>

{!! Html::script('js/jquery-3.2.1.js') !!}
{{--{!! Html::script('js/jquery-3.1.1.slim.min.js') !!}--}}
{!! Html::script('js/tether.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('admin/js/libs/jquery-ui.min.js') !!}
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script>

  var navTop = $('.text_content').offset().top;
  var hrTop = $('.position').offset().top;
//console.log(hrTop);
  $(window).scroll(function(){
    if ($(this).scrollTop() >= navTop ) {
      console.log("aaa");

//      $('.text_content').css('position', 'fixed');
//      $('.text_content').css('top', '100');
//      $('.text_content').css('top', navTop);
    }
    if ($(this).scrollTop() >= hrTop && $(this).scrollTop() <= hrTop) {
      console.log("bbb");
//      $('.text_content').css('position', 'absolute');
//      $('.text_content').css('top', '60');
//      $('.text_content').css('top', navTop);
    }
  });
    
    /**
     * function for button like facebook using ajax
     * */
  $(document).ajaxComplete(function(){
    try{
      FB.XFBML.parse();
    }catch(ex){}
  });
    $('.card-block').hide();


    /**
     * function add button facebook 
     * */
  (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=514374418733627";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  
  /**
   * append html to view
   * */
  $('.load-button').click(function () {
    var page = document.getElementById('value_page').value;
    var value =  page*1+1;
    document.getElementById('value_page').value = value;

    $.ajax({
      type: "GET",
      url: "http://xemvn.app/api/?page="+page,
      success: function (result) {
        $('.load-button').hide();
        $('.card-block').show();
        if (result != '') {
          $('.card-block').hide();
          $('.load-button').show();
          result.forEach(function (item) {
            var html = "";
            html += "<br><div class='row'>";
            html += "<div class='col-md-7'>";
            html += "<img class='img-responsive' src='"+item['image']+"'>";
            html += "</div>";
            html += "<div class='col-md-5 text_content'>";
            html += "<b>"+item['title']+"</b>";
            html += "<div class='uploader'>Đăng bởi";
            html += "<a href='#' title=''>";
            if (item['name']['nickname']) {
              html += " "+item['name']['nickname']+" ";
            } else {
              html += " "+item['name']['name']+" ";
            }
            html += "</a>";
            html += item['created_at'];
            html += "</div>";
            html += "<i class='fa fa-eye' aria-hidden='true'></i> ";
            html += " "+item['views'] ? 0 : item['views'];
            html += " <i class='fa fa-comments-o' aria-hidden='true'></i> 20";
            $(document).ready(function() {
              html += "<div class='fb-like' style='margin-left:4%' data-href='https://developers.facebook.com/docs/plugins/' data-layout='button' data-action='like' data-size='small' data-show-faces='true' data-share='true'></div>";
            });
            html += "</div>";
            html += "</div>";
            html += "<hr>";
            $(".main_content").append(html);
          });
        } else {
          $('.load-button').show();
          $('.card-block').hide();
        }
      }
    });
  });

</script>

</body>

<footer class="container">
    
</footer>
</html>
