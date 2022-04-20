@extends('layouts.forntend-layouts')
@section('page')
<section class="page-title" style="background-image: url({{ asset('assets/images/background/7.jpg') }})">
    <div class="icon-layer-one" style="background-image: url({{asset('assets/images/shapes/shape-28.png') }})"></div>
    <div class="icon-layer-two" style="background-image: url({{ asset('assets/images/shapes/shape-29.png') }})"></div>
    <div class="icon-layer-three" style="background-image: url({{asset('assets/images/shapes/shape-28.png') }})"></div>
    <div class="icon-layer-four" style="background-image: url({{asset('assets/images/shapes/shape-30.png') }})"></div>
    <div class="auto-container">
        <h1>Camera Security</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li><a href="services.html">Service</a></li>
            <li>Camera Security</a></li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="service-detail">
                    <div class="inner-box">
                        <h2>WIFI Camera Security</h2>
                        <p>At Qtec Security our experts listen to your needs and then create the right security plan for your style and budget. Whether you live alone or have a family, whether you need a more standard approach to a home security system,or one with highly- personalized options</p>
                        <p>Neque aliquam vestibulum morbi blandit cursus risus. Tempor commo ullam corper a lacus vestibulum sed arcu. Posuere lorem ipsum dolorsit amet consectetur adipiscing. Sollicitudin tempor id eu </p>
                        <ul class="service-options">
                            <li>One of America’s most popular floors</li>
                            <li>Can add warmth and character to any room</li>
                            <li>Beautiful to live with</li>
                        </ul>
                        <div class="image">
                            <img src="{{ asset('assets/images/services/service-1.jpg') }}" alt="" />
                        </div>
                        <p>From protection against intruders, to monitored fire alarms, video and personal emergency response, Vector Security provides what you need so you can enjoy peace of mind in your home. And when you're on the go, manage your home security system using our convenient mobile solutions from your computer </p>
                        <div class="lower-box">
                            <div class="row clearfix">
                                <!-- Column -->
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/services/service-2.jpg') }}" alt="" />
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <ul class="service-options">
                                        <li>Advanced security you <br> control.</li>
                                        <li>Scalability that’s convenient.</li>
                                        <li>Adds value to your home at <br> resale time</li>
                                        <li>Thoughtfully designed and made.</li>
                                        <li>Privacy that stays private.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar left-padding">

                    <!-- Categories Widget -->
                    <div class="sidebar-widget categories-widget">
                        <div class="widget-content">
                            <!-- Title -->
                            <div class="title">
                                <h4>Security Services</h4>
                            </div>
                            <ul class="cat-list">
                                <li><a href="cctv-security.html">Home cctv Security</a></li>
                                <li><a href="executive-protection.html">Executive Protection</a></li>
                                <li><a href="cyber-security.html">Cyber Security</a></li>
                                <li><a href="private-security.html">Private Security</a></li>
                                <li><a href="camera-security.html">Wifi Camera Security</a></li>
                                <li><a href="cloud-security.html">Cloud Security</a></li>
                                <li><a href="network-security.html">Network Security</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Security Widget -->
                    <div class="sidebar-widget security-widget">
                        <div class="widget-content">
                            <span class="phone-icon icon-phone-1"></span>
                            <span class="icon icon-security-1"></span>
                            <h4>Quality Security at <br> a Fair Price</h4>
                            <div class="text">Easy to set up Call now!</div>
                            <a class="phone" href="tel:+123-104-7851">(123) 104-7851</a>
                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>


<!-- Commercial Section -->
<section class="commercial-section style-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">Commercial CCTV System</div>
            <h2>We will make your home and <br> business completely safe.</h2>
        </div>
        <div class="row clearfix">

            <!-- Service Block Three -->
            <div class="service-block-three col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box icon-camera-2"></div>
                    <h4><a href="service-detail.html">Bullet Cameras</a></h4>
                    <div class="text">we offer complete innovative solutions for security</div>
                </div>
            </div>

            <!-- Service Block Three -->
            <div class="service-block-three col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1500ms">
                    <div class="icon-box icon-cctv-2"></div>
                    <h4><a href="service-detail.html">Target Cameras</a></h4>
                    <div class="text">we offer complete innovative solutions for security</div>
                </div>
            </div>

            <!-- Service Block Three -->
            <div class="service-block-three col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="icon-box icon-camera-1"></div>
                    <h4><a href="service-detail.html">Box Cameras</a></h4>
                    <div class="text">we offer complete innovative solutions for security</div>
                </div>
            </div>

            <!-- Service Block Three -->
            <div class="service-block-three col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="450ms" data-wow-duration="1500ms">
                    <div class="icon-box icon-fingerprint"></div>
                    <h4><a href="service-detail.html">IP Cameras</a></h4>
                    <div class="text">we offer complete innovative solutions for security</div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Commercial Section -->

@endsection