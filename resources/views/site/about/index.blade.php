@extends('.site.layout.container')
@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-area section" style="background-image: url({{ $setting->banner }});background-size: cover;
    background-position: center center;">
    <div class="container">
        <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40 pt-xs-70 pb-xs-40">
            <div class="row">
                <div class="col">
                    <h2>About us</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ trans('language.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ trans('language.about') }}</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb -->

<!-- About Section Start -->
<div class="about-section section pt-65 pb-65 pt-md-55 pb-md-55 pt-sm-45 pb-sm-45 pt-xs-25 pb-xs-25">
    <div class="container">
        <div class="row align-items-center fix">

            <div class="col-lg-4 col-md-5 col-12 offset-lg-1 mb-35 mt-35">
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
@stop
@section('extra_js')
@stop
