<?php
$setting = \App\Models\Setting::first();
?>
<header class="header-wrapper section">
    <div class="header-section section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-2 col-6">
                    <div class="header-logo">
                        <a href="{{ url('/') }}"><img src="{{ $setting->logo }}" alt=""></a>
                    </div>
                </div>

                <div class="col-lg-10 col-6">
                    <div class="header-mid_right-bar">
                        <nav class="main-menu d-lg-block d-none">
                            <ul>
                                <li><a href="{{ url('/') }}">{{trans('language.home')}}</a></li>
                                <li><a href="{{ url('about') }}">{{trans('language.about')}}</a></li>
                                <li><a href="{{ url('project') }}">{{trans('language.project')}}</a></li>
                                <li><a href="{{ url('blog') }}">{{trans('language.blog')}}</a></li>
                                <li><a href="{{ url('contact') }}">{{trans('language.contact')}}</a></li>

                            </ul>
                        </nav>
                        <div id="search-overlay-trigger" class="search-icon">
                            <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>
        </div>
    </div><!-- Header Section End -->
</header>

<!--  search overlay -->
<div class="search-overlay" id="search-overlay">

    <div class="search-overlay__header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 ml-auto col-4">
                    <!-- search content -->
                    <div class="search-content text-right">
                        <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-overlay__inner">
        <div class="search-overlay__body">
            <div class="search-overlay__form">
                <form action="#">
                    <input type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of search overlay -->
