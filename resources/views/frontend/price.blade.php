@extends('layouts.forntend-layouts')
@section('page')
<section class="page-title" style="background-image: url({{ asset('assets/images/background/5.jpg') }})">
    <div class="icon-layer-one" style="background-image: url({{ asset('assets/images/shapes/shape-28.png') }})"></div>
    <div class="icon-layer-two" style="background-image: url({{ asset('assets/images/shapes/shape-29.png') }})"></div>
    <div class="icon-layer-three" style="background-image: url({{asset('assets/images/shapes/shape-28.png') }})"></div>
    <div class="icon-layer-four" style="background-image: url({{asset('assets/images/shapes/shape-30.png') }})"></div>
    <div class="auto-container">
        <h1>Our Plan</h1>
        <div class="text">We build trusted, lifelong customer relationships by creating innovative, <br> smart security solutions</div>
    </div>
</section>
<!--End Page Title-->

<!-- Price Page Section -->
<section class="price-page-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <div class="title">Our Pricing Plan</div>
            <h2>Security System Packages</h2>
        </div>
        <div class="row clearfix">

            <!-- Price Block -->
            <div class="price-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h3>Basic Plan</h3>
                    <div class="price">$49<sub>month</sub></div>
                    <ul class="list-options">
                        <li>Departure of the expert</li>
                        <li>Remote Administration</li>
                        <li>Configure CCTV camera</li>
                        <li>Access control</li>
                        <li>24/7 Support</li>
                    </ul>
                    <div class="button-box text-center">
                        <a href="#" class="theme-btn start-btn">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Price Block -->
            <div class="price-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h3>Business</h3>
                    <div class="price">$79<sub>month</sub></div>
                    <ul class="list-options">
                        <li>Departure of the expert</li>
                        <li>Remote Administration</li>
                        <li>Configure CCTV camera</li>
                        <li>Access control</li>
                        <li>24/7 Support</li>
                    </ul>
                    <div class="button-box text-center">
                        <a href="#" class="theme-btn start-btn">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Price Block -->
            <div class="price-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h3>Exclusive</h3>
                    <div class="price">$149<sub>month</sub></div>
                    <ul class="list-options">
                        <li>Departure of the expert</li>
                        <li>Remote Administration</li>
                        <li>Configure CCTV camera</li>
                        <li>Access control</li>
                        <li>24/7 Support</li>
                    </ul>
                    <div class="button-box text-center">
                        <a href="#" class="theme-btn start-btn">Get Started</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Price Page Section -->

<!-- Services Section -->
<section class="services-section style-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">Services list</div>
            <h2>We Provide The Best <span>Cyber</span> <br> Security Service</h2>
        </div>
        <div class="row clearfix">

            <!-- Service Block -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon icon-cloud-computing"></span>
                    </div>
                    <h4><a href="service-detail.html">Cloud Security</a></h4>
                    <div class="text">Lorem Ipsum, you need to be sure there isn't anything embarrassing  generators on the Internet</div>
                    <a href="service-detail.html" class="arrow icon-right-arrow"></a>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon icon-networking-2"></span>
                    </div>
                    <h4><a href="service-detail.html">Network Security</a></h4>
                    <div class="text">Lorem Ipsum, you need to be sure there isn't anything embarrassing  generators on the Internet</div>
                    <a href="service-detail.html" class="arrow icon-right-arrow"></a>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon icon-robot-robotic"></span>
                    </div>
                    <h4><a href="service-detail.html">Threat Intelligence</a></h4>
                    <div class="text">Lorem Ipsum, you need to be sure there isn't anything embarrassing  generators on the Internet</div>
                    <a href="service-detail.html" class="arrow icon-right-arrow"></a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection