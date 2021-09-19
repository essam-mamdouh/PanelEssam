@extends('.site.layout.container')
@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-area section" style="background-image: url(assets/images/bg/breadcrumb.jpg)">
    <div class="container">
        <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40 pt-xs-70 pb-xs-40">
            <div class="row">
                <div class="col">
                    <h2>{{ trans('language.product') }}</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ trans('language.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ trans('language.product') }}</li>
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
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="#">
                                        <img src="assets/images/propertes/01.jpg" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <h4><a href="#">Mariyasa de Casel </a></h4>
                                    <p>
                                        <span class="location">22 First street, Chicago, USA</span>
                                    </p>

                                </div>
                            </div><!-- single-property End -->
                        </div>

                    </div>
                </div>
                </div>
            </div>


            <div class="row pt-40">
                <div class="col">
                    <ul class="page-pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div><!-- Featured Properites End -->

</main>

@stop
@section('extra_js')
@stop
