@extends('layouts.layout')

@section('content')
    <div class="col-md-8 text-left">
        <div class="row">
            <div class="col-sm-6">
                <h6><b>Videos đã đăng</b></h6>
            </div>
            <div class="col-sm-6 text-right right_a_tag">
                <h6><b><a class="none_decorate" href="/my_images">Ảnh đã đăng</a></b></h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <img class="img-responsive" src="{!! URL::to('/img/medium-1493355755_95469-400.jpg') !!}">
            </div>
            <div class="col-md-5 text_content">
                <b>Thực sự nể mấy thanh niên kiểu này</b>
                <div class="uploader">Đăng bởi <a href="#" title="Thanh niên chuyên CẦN">Thanh niên chuyên CẦN </a>
                    2 giờ trước
                </div>
                <i class="fa fa-eye" aria-hidden="true"></i> 300
                <i class="fa fa-comments-o" aria-hidden="true"></i> 20
                {{--<div class="fb-like" style="margin-left:4%" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button"--}}
                {{--data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>--}}
            </div>
        </div>
        <hr>
    </div>
@endsection