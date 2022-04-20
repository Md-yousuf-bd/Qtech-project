@extends('layouts.forntend-layouts')
@section('page')
<section class="page-title" style="background-image: url({{ asset('assets/images/background/6.jpg') }})">
    <div class="icon-layer-one" style="background-image: url({{ asset('assets/images/shapes/shape-28.png') }})"></div>
    <div class="icon-layer-two" style="background-image: url({{ asset('assets/images/shapes/shape-29.png') }})"></div>
    <div class="icon-layer-three" style="background-image: url({{asset('assets/images/shapes/shape-28.png') }})"></div>
    <div class="icon-layer-four" style="background-image: url({{asset('assets/images/shapes/shape-30.png') }})"></div>
    <div class="auto-container">
        <h1>Our Project</h1>
        <div class="text">Qtce Smarter online security by your business side.</div>
    </div>
</section>
<!--End Page Title-->

<!-- Project Page Section -->
<section class="project-page-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title clearfix">
            <div class="title">LATEST PROJECTS</div>
            <h2>Our innovation Cyber <br> Security projects Solution</h2>
        </div>
    </div>

    <!-- Outer Container -->
    <div class="outer-container">
        <div class="row clearfix">

            <!-- Project Block Two -->
            <div class="project-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="number">01</div>
                        <div class="title">Online Cyber Crime</div>
                        <h3><a href="projects-detail.html">Case Attack surface <br> management</a></h3>
                    </div>
                    <div class="image">
                        <a href="projects-detail.html"><img src="assets/images/gallery/4.jpg" alt="" /></a>
                    </div>
                </div>
            </div>

            <!-- Project Block Two -->
            <div class="project-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="number">02</div>
                        <div class="title">Online Cyber Crime</div>
                        <h3><a href="projects-detail.html">Third-party security risk management</a></h3>
                    </div>
                    <div class="image">
                        <a href="projects-detail.html"><img src="{{ asset('assets/images/gallery/5.jpg') }}" alt="" /></a>
                    </div>
                </div>
            </div>

            <!-- Project Block Two -->
            <div class="project-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="number">03</div>
                        <div class="title">Online Cyber Crime</div>
                        <h3><a href="projects-detail.html">Security incident <br> analysis</a></h3>
                    </div>
                    <div class="image">
                        <a href="projects-detail.html"><img src="{{ asset('assets/images/gallery/6.jpg') }}" alt="" /></a>
                    </div>
                </div>
            </div>

            <!-- Project Block Two -->
            <div class="project-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="number">04</div>
                        <div class="title">Online Cyber Crime</div>
                        <h3><a href="projects-detail.html">Case for online <br> data security</a></h3>
                    </div>
                    <div class="image">
                        <a href="projects-detail.html"><img src="{{ asset('assets/images/gallery/13.jpg') }}" alt="" /></a>
                    </div>
                </div>
            </div>

            <!-- Project Block Two -->
            <div class="project-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="number">05</div>
                        <div class="title">Online Cyber Crime</div>
                        <h3><a href="projects-detail.html">Third-party security <br> risk management</a></h3>
                    </div>
                    <div class="image">
                        <a href="projects-detail.html"><img src="{{ asset('assets/images/gallery/14.jpg') }}" alt="" /></a>
                    </div>
                </div>
            </div>

            <!-- Project Block Two -->
            <div class="project-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="number">06</div>
                        <div class="title">Online Cyber Crime</div>
                        <h3><a href="projects-detail.html">Best home security <br> systems</a></h3>
                    </div>
                    <div class="image">
                        <a href="projects-detail.html"><img src="{{ asset('assets/images/gallery/15.jpg') }}" alt="" /></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="button-box text-center">
            <a class="btn-style-five theme-btn" href="#"><span class="txt">Load More</span></a>
        </div>

    </div>
</section>
<!-- End Project Section Two -->

@endsection