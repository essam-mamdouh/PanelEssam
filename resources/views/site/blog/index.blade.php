@extends('.site.layout.container')
@section('content')
<div class="breadcrumb-area section" style="background-image: url({{ $setting->banner }});background-size: cover;
    background-position: center center;">
    <div class="container">
        <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40 pt-xs-70 pb-xs-40">
            <div class="row">
                <div class="col">
                    <h2>{{ trans('language.blogs') }}</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ trans('language.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ trans('language.blogs') }}</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Latest Blog Section Start -->
<div class="latest-blog-section section pt-80 pt-md-60 pt-sm-40 pt-xs-30 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
    <div class="container">

        <div class="row">
            @foreach ($blogs as $blog)
               <div class="col-lg-4 col-md-6 mt-30">
                <!-- Single latest blog Start -->
                <div class="single-latest-blog">
                    <div class="latest-blog-image">
                        <a href="#"><img src="{{ $blog->image }}" alt=""></a>
                    </div>
                    <div class="latest-blog-contents">
                        <h4><a href="#">{{ $blog->name }}</a></h4>
                        <p>{{ Str::limit($blog->des, 150, '...')}}</p>
                        <a class="read-more" href="{{url('/blog/'.$blog->id)}}">{{ trans('language.details') }}</a>
                    </div>
                </div><!-- Single latest blog End -->
            </div>
            @endforeach

        </div>

    </div>
</div><!-- Latest Blog Section End -->
@stop
@section('extra_js')
@stop
