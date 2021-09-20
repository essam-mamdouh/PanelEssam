@extends('site.layout.container')
@section('content')

<!-- Hero Section Start -->
<div class="hero-section section">

    <div class="hero-slider hero-slider-one">
        <div class="hero-slide-item" style="background-image: url({{ $slider->image }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">

                        <div class="hero-content ">
                            <h1>{{ $slider->name }}</h1>
                            <p>{{ $slider->des }}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- Hero Section End -->

<!-- About Section Start -->
<div class="about-section section pt-65 pb-75 pt-md-55 pb-md-55 pt-sm-45 pb-sm-45 pt-xs-25 pb-xs-25">
    <div class="container">
        <div class="row align-items-center fix">

            <div class="col-lg-4 col-md-5 col-12 offset-lg-1 mb-15 mt-35">
                <div class="about-properties-area">
                    <div class="about-slider_bg"></div>
                    <div class="about-properties-slider">
                        <div class="about-properties-item">
                            <div class="image"><img src="{{ $about->image }}" alt=""></div>
                        </div>

                        <div class="about-properties-item">
                            <div class="image"><img src="{{ $about->image }}" alt=""></div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="about-content col-lg-6 col-md-7 col-12 ml-auto mt-35 pl-lg-0">
                <h2>{{ $about->name }}</h2>
                <p>{{ $about->des }}</p>
            </div>


        </div>
    </div>
</div><!-- About Section End -->
<!-- Featured Properites Start -->
<div class="featured-properites-section section">
    <div class="container">

        <div class="row">
            <div class="section-title text-center col mb-30 mb-md-20 mb-xs-20 mb-sm-20">
                <h2>{{ trans('language.project') }}</h2>
            </div>
        </div>

        <div class="row">
            @foreach ($products as $product )
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="#">
                            <img src="{{ $product->image }}" alt="">
                        </a>
                    </div>
                    <div class="property-desc">
                        <h4><a href="#">{{ $product->name }}</a></h4>
                        <p>
                            <span class="property-info">{{ $product->des }}</span>
                        </p>
                    </div>
                </div><!-- single-property End -->
            </div>
            @endforeach

        </div>

    </div>
</div><!-- Featured Properites End -->

<!-- Latest Blog Section Start -->
<div class="latest-blog-section section pt-160 pt-md-140 pt-sm-120 pt-xs-110 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
    <div class="container">


        <div class="row">
            <div class="section-title text-center col mb-30 mb-md-20 mb-xs-20 mb-sm-20">
                <h2>{{ trans('language.blogs') }}</h2>
            </div>
        </div>


        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 mt-30">
                <!-- Single latest blog Start -->
                <div class="single-latest-blog">
                    <div class="latest-blog-image">
                        <a href="#"><img src="{{ $blog->image }}" alt=""></a>
                    </div>
                    <div class="latest-blog-contents">
                        <h4><a href="#"></a>{{ $blog->name }}</h4>
                        <p>{{ $blog->des }}</p>
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
