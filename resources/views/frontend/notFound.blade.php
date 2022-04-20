@extends('layouts.forntend-layouts')
@section('page')
<section class="error-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="shape-layer" style="background-image:url({{ asset('assets/images/shapes/shape-32.png') }})"></div>
                    <h1>4<span>0</span>4</h1>
                    <h3>Oops! Page Not Found</h3>
                    <div class="text">This page could not be found.Continue to the HomePage</div>
                    <div class="button-box">
                        <a class="btn-style-three theme-btn" href="index.html"><span class="txt">Home Page</span></a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="{{ asset('assets/images/resource/error.png') }}" alt="" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Error Section -->

@endsection