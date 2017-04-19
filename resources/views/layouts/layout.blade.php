<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 4 Responsive Front-End Template">
    <meta name="author" content="hungnguyen">
    <meta name="keyword" content="Bootstrap, Responsive">
    <title>Xemvn</title>
    {{--{!! Html::script('js/jquery.js') !!}--}}
</head>
<body>
<section id="container" class="">
    @include('layouts.navbar.nar_bar')
    <section id="main-content">
        <section class="wrapper">
            @yield('content')
        </section>
    </section>
</section>
{{--{!! Html::script('js/jquery.js') !!}--}}
{{--{!! Html::script('js/jquery-ui-1.10.4.min.js') !!}--}}

</body>
</html>