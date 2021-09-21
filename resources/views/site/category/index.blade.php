@extends('.site.layout.container')
@section('content')
<div class="breadcrumb-area section" style="background-image: url({{ $setting->banner }});background-size: cover;
    background-position: center center;">
    <div class="container">
        <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40 pt-xs-70 pb-xs-40">
            <div class="row">
                <div class="col">
                    <h2>{{ trans('language.project') }}</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ trans('language.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ trans('language.project') }}</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb -->
<main class="page-content section">
    <!-- Featured Properites Start -->
    <div class="featured-properites-section section pt-110 pt-md-90 pt-sm-70 pt-xs-60 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane active" id="all">
                    <div class="row">
                        @foreach ($categories as $category )
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">

                                        <img src="{{ $category->image }}" alt="">

                                </div>
                                <div class="property-desc" style="padding: 0 0 0 0;!importrant">
                                    <h4>{{ $category->name }}</h4>
                                    @foreach ($subCategories as $subCategoriey )
                                    <p>
                                        <a href="{{url('/project/'.$subCategoriey->id)}}" class="location">{{ $subCategoriey->name }}</a>
                                    </p>
                                    @endforeach
                                </div>
                            </div><!-- single-property End -->
                        </div>
                        @endforeach
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div><!-- Featured Properites End -->

</main>
@stop
@section('extra_js')
@stop
