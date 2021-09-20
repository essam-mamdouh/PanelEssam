@extends('.site.layout.container')
@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-area section" style="background-image: url({{ asset($setting->banner) }});background-size: cover;
    background-position: center center;">
    <div class="container">
        <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40 pt-xs-70 pb-xs-40">
            <div class="row">
                <div class="col">
                    <h2>{{ $product->name }}</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ trans('language.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ $product->name }}</li>
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
    <div class="properites-sidebar-wrap pt-80 pt-md-60 pt-sm-40 pt-xs-30 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-xl-9 col-12 order-lg-1 order-1">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-details-warpper">
                                <div class="details-image mt-30">
                                    <img src="{{ asset($product->image) }}" alt="">
                                </div>
                                <div class="details-contents-wrap">

                                    <h3>{{ $product->name }}</h3>

                                    <p class="mt-10">{{ $product->des }}</p>

                                </div>



                            </div>
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
