@extends('.site.layout.container')
@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-area section" style="background-image: url({{ $setting->banner }});background-size: cover;
    background-position: center center;">
    <div class="container">
        <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40 pt-xs-70 pb-xs-40">
            <div class="row">
                <div class="col">
                    <h2>Contact us</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ trans('language.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ trans('language.contact') }}</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb -->

<!-- Our Agents Section Start -->
<div class="contact-section section pt-110 pt-md-90 pt-sm-70 pt-xs-60 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-us-wrap">
                    <div class="contact-title pb-30">
                        <h4>{{ trans('language.getIn') }} <span>{{ trans('language.touch') }}</span></h4>
                        <p>{{ $setting->des }}</p>
                    </div>

                    <div class="contact-info">
                        <ul>
                            <li>
                                <div class="contact-text d-flex align-items-center">
                                    <i class="glyph-icon flaticon-placeholder"></i>
                                    <p>{{ $setting->address }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-text d-flex align-items-center">
                                    <i class="glyph-icon flaticon-call"></i>
                                    <p>
                                        <span>{{ trans('language.phone') }} : <a href="#">{{$setting->phone}}</a></span>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-text d-flex align-items-center">
                                    <i class="glyph-icon flaticon-earth"></i>
                                    <p>
                                        <span>{{ trans('language.email') }} : <a href="#">{{ $setting->email }}</a></span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-us-wrap">
                    <h4>{{ trans('language.messages') }}</h4>

                     <div class="contact-form">
                        <form id="contact-form" action="{{url('/contact')}}" method="POST" enctype="multipart/form-data">
                            <div class="row row-10">
                                <div class="col-md-6 col-12 mb-30"><input name="name"  placeholder="{{trans('language.name')}}" type="text"></div>
                                <div class="col-md-6 col-12 mb-30"><input name="email" type="email" placeholder="{{trans('language.email')}}"></div>
                                <div class="col-12 mb-30"><textarea name="message"  placeholder="{{trans('language.messages')}}"></textarea></div>
                                <div class="col-12"><button class="btn send-btn btn-circle"type="submit">{{trans('language.send')}}</button></div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- Our Agents Section End -->

<div class="embed-responsive embed-responsive-21by9">
    <div id="contact-map" class="embed-responsive-item contact-map" data-lat="40.828411" data-Long="-74.589912"></div>
</div>
@stop
@section('extra_js')
@stop
