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
    {!! Html::style('css/font-awesome.min.css') !!}
</head>
<body>
<section id="container" class="">
    @include('layouts.navbar.nar_bar')
    <section id="main-content">
        <section class="wrapper">
            @include('layouts.body.body')
        </section>
    </section>
</section>
{!! Html::script('js/jquery-3.1.1.slim.min.js') !!}
{!! Html::script('js/tether.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}

</body>
</html>
