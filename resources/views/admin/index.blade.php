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
    {{--{!! Html::style('css/bootstrap.min.css') !!}--}}
    {!! Html::style('font-awesome-4.7.0/css/font-awesome.min.css') !!}
    {{--{!! Html::style('admin/css/font-awesome.min.css') !!}--}}
    {!! Html::style('admin/css/simple-line-icons.css') !!}
    {!! Html::style('admin/css/glyphicons-filetypes.css') !!}
    {!! Html::style('admin/css/glyphicons-social.css') !!}
    {!! Html::style('admin/css/glyphicons.css') !!}
    {!! Html::style('admin/css/style.css') !!}


</head>

@yield('content')

<script>
  (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=514374418733627";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

</script>
{!! Html::script('js/tether.min.js') !!}
{!! Html::script('js/jquery-3.2.1.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('admin/js/libs/jquery-ui.min.js') !!}
{!! Html::script('js/jquery-3.1.1.slim.min.js') !!}
{!! Html::script('admin/js/libs/bootstrap.min.js') !!}
{!! Html::script('admin/js/libs/Chart.min.js') !!}
{{--{!! Html::script('admin/js/libs/dataTables.bootstrap4.min.js') !!}--}}
{!! Html::script('admin/js/libs/daterangepicker.js') !!}
{{--{!! Html::script('admin/js/libs/fullcalendar.min.js') !!}--}}
{!! Html::script('admin/js/libs/gauge.min.js') !!}
{{--{!! Html::script('admin/js/libs/gcal.js') !!}--}}
{!! Html::script('admin/js/libs/ion.rangeSlider.min.js') !!}
{!! Html::script('admin/js/libs/jquery.dataTables.min.js') !!}
{!! Html::script('admin/js/libs/jquery.maskedinput.min.js') !!}
{!! Html::script('admin/js/libs/jquery.min.js') !!}
{!! Html::script('admin/js/libs/jquery.validate.js') !!}
{!! Html::script('admin/js/libs/ladda.min.js') !!}
{!! Html::script('admin/js/libs/moment.min.js') !!}
{!! Html::script('admin/js/libs/pace.min.js') !!}
{!! Html::script('admin/js/libs/select2.min.js') !!}
{!! Html::script('admin/js/libs/spin.min.js') !!}
{!! Html::script('admin/js/libs/toastr.min.js') !!}
{{--{!! Html::script('admin/js/views/advanced-forms.js') !!}--}}
{{--{!! Html::script('admin/js/views/calendar.js') !!}--}}
{{--{!! Html::script('admin/js/views/charts.js') !!}--}}
{{--{!! Html::script('admin/js/views/draggable-cards.js') !!}--}}
{!! Html::script('admin/js/views/loading-buttons.js') !!}
{{--{!! Html::script('admin/js/views/main.js') !!}--}}
{!! Html::script('admin/js/views/notifications.js') !!}
{{--{!! Html::script('admin/js/views/sliders.js') !!}--}}
{{--{!! Html::script('admin/js/views/tables.js') !!}--}}
{!! Html::script('admin/js/views/validation.js') !!}
{{--{!! Html::script('admin/js/views/wdgets.js') !!}--}}

{!! Html::script('admin/js/app.js') !!}

<footer class="container">
</footer>
</html>