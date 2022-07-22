@extends('portal.app')
@section('sc-css')
<link href="{{ url('assets/02-Single-post/css/styles.css') }}" rel="stylesheet">
<link href="{{ url('assets/02-Single-post/css/responsive.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="single-post">
    <div class="image-wrapper"><img src="{{ url('assets/images/blog-1-1000x600.jpg') }}" alt="Blog Image"></div>

    <div class="icons">
        <div class="left-area">
            <a class="btn caegory-btn" href="#"><b>{{ $posts->category->name }}</b></a>
        </div>
    </div>
    <p class="date"><em>{{ date('D, M Y', strtotime($posts->created_at)) }}</em></p>
    <h3 class="title"><a href="#"><b class="light-color">{{ $posts->title }}</b></a></h3>
    {!! $posts->content !!}

</div>
<!-- single-post -->


<div class="post-author">
    <div class="author-image"><img src="{{ url($data['user']->image) }}" alt="{{$data['user']->name}}"></div>

    <div class="author-info">
        <h4 class="name"><b class="light-color">{{ $data['user']->name }}</b></h4>

        {!! $data['user']->desc !!}

        {{-- <ul class="social-icons">
            <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
            <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
            <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
            <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
        </ul> --}}
        <!-- right-area -->

    </div>
    <!-- author-info -->
</div>
<!-- post-author -->

@endsection
