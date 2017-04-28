<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 4 Responsive Front-End Template">
    <meta name="author" content="hungnguyen">
    <meta name="keyword" content="Bootstrap, Responsive">
    <title>Xemvn</title>
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('font-awesome-4.7.0/css/font-awesome.min.css') !!}
</head>
<body>
<section id="container" class="">
    @include('layouts.navbar.nar_bar')
    <section id="main-content">
        <section class="wrapper">
            <div class="container text-center">
                <div class="row">
                    @yield('content')
                    @include('layouts.right_content.right_content')
                </div>
            </div>
        </section>
    </section>
</section>
<script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=514374418733627";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

</script>
{!! Html::script('js/jquery-3.1.1.slim.min.js') !!}
{!! Html::script('js/tether.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}

</body>
</html>
