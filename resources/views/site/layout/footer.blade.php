<?php
$setting = \App\Models\Setting::first();
$about = \App\Models\About::first();
?>
<!-- Footer Section Start -->
<footer class="footer-section section" style="background-color: #0000 !important;">

    <div class="footer-top footer-bg pt-70 pt-md-50 pt-sm-30 pt-xs-20 pb-100 pb-md-90 pb-sm-70 pb-xs-60" style="background-color: #0000 !important;">
        <div class="container">
           <div class="row">
                <div class="col-coustom-4 col-md-6 col-lg-4 col-12 mt-40">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h3>{{ trans('language.about') }}</h3>
                        </div>
                        <div class="footer-info">
                            <p>{{ $about->des}}</p>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div><!-- Footer-widget End -->
                </div>
                <div class="col-coustom-4 col-md-6 col-lg-4 col-12 mt-40">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h3>{{ trans('language.link') }}</h3>
                        </div>
                        <div class="footer-info">
                            <ul class="footer-list">
                                <li><a href="{{ url('about') }}">{{trans('language.about')}}</a></li>
                                <li><a href="{{ url('project') }}">{{trans('language.project')}}</a></li>
                                <li><a href="{{ url('blog') }}">{{trans('language.blog')}}</a></li>
                                <li><a href="{{ url('contact') }}">{{trans('language.contact')}}</a></li>
                            </ul>
                        </div>
                    </div><!-- Footer-widget End -->
                </div>
                <div class="col-coustom-4 col-md-6 col-lg-4 col-12 mt-40">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="footer-info">
                            <ul class="footer-list">
                                <li>
                                    <div class="contact-text">
                                        <i class="glyph-icon flaticon-placeholder"></i>
                                        <p>{{ $setting->address }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-text">
                                        <i class="glyph-icon flaticon-call"></i>
                                        <p>
                                            <span>{{ trans('language.phone') }} : <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></span>
                                        </p>

                                    </div>
                                </li>
                                <li>
                                    <div class="contact-text">
                                        <i class="glyph-icon flaticon-earth"></i>
                                        <p>
                                            <span>{{ trans('language.email') }} : <a href="{{ $setting->email }}">{{ $setting->email }}</a></span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Footer-widget End -->
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; PromoClicks. <a href="{{ url('/') }}">All rights reserved.</a> </p>
                </div>
            </div>
        </div>
    </div>

</footer><!-- Footer Section End -->
