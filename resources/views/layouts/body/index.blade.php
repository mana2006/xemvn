@extends('layouts.layout')

@section('content')
    <div class="col-md-8 text-left">
        <h6><b>Ảnh mới chế</b></h6>
        <div class="tip">
            <b>Mẹo: Ấn hotkey</b> ← và → hoặc Z và X để duyệt ảnh nhanh hơn
        </div>
        <div class="main_content">

            @foreach($posts as $post)

                <div class="row content_row">
                    <div class="col-md-7">
                        <img class="img-responsive" src="{!! URL::to($post->image) !!}">
                    </div>
                    <div class="col-md-5 text_content">
                        <b>{{ $post->title }}</b>
                        <div class="uploader">
                            Đăng bởi 
                            <a href="#" title=""> 
                                @if(isset($post->name->nickname))
                                    {{ $post->name->nickname }}
                                @endif
                                @if(isset($post->name->name))
                                    {{ $post->name->name }}
                                @endif
                            </a>
                            {{ $post->created_at }}
                        </div>
                        <i class="fa fa-eye" aria-hidden="true"></i> {{ $post->views != null ? $post->views : 0}}
                        <i class="fa fa-comments-o" aria-hidden="true"></i> 20
                        {{--<div class="fb-like" style="margin-left:4%" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button"--}}
                             {{--data-action="like" data-size="small" data-show-faces="true" data-share="true">--}}
                        {{--</div>--}}
                    </div>
                </div>
                <hr class="position">
            @endforeach

        </div>
        <br>
            <button class="load-button">Load more content</button>
            <input id="value_page" type="hidden" value="2">
            <div class="card-block">
                <div class="sk-fading-circle">
                    <div class="sk-circle1 sk-circle"></div>
                    <div class="sk-circle2 sk-circle"></div>
                    <div class="sk-circle3 sk-circle"></div>
                    <div class="sk-circle4 sk-circle"></div>
                    <div class="sk-circle5 sk-circle"></div>
                    <div class="sk-circle6 sk-circle"></div>
                    <div class="sk-circle7 sk-circle"></div>
                    <div class="sk-circle8 sk-circle"></div>
                    <div class="sk-circle9 sk-circle"></div>
                    <div class="sk-circle10 sk-circle"></div>
                    <div class="sk-circle11 sk-circle"></div>
                    <div class="sk-circle12 sk-circle"></div>
                </div>
            </div>
    </div>
@endsection