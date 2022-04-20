@extends('layouts.forntend-layouts')
@section('page')
<section class="page-title" style="background-image: url({{ asset('assets/images/background/5.jpg') }})">
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

<!-- Project Page Section Two -->
<section class="project-page-section-two">
    <div class="auto-container">

        <!-- MixitUp Gallery -->
        <div class="mixitup-gallery">

            <!-- Filter -->
            <div class="filters clearfix">

                <ul class="filter-tabs filter-btns text-center clearfix">
                    <li class="active filter" data-role="button" data-filter="all">All Project</li>
                    <li class="filter" data-role="button" data-filter=".cctv">Cctv Security</li>
                    <li class="filter" data-role="button" data-filter=".cyber">Cyber Case</li>
                    <li class="filter" data-role="button" data-filter=".digital">Digital Security</li>
                </ul>

            </div>

            <div class="filter-list row clearfix">

                <!-- Project Block Four -->
                <div class="project-block-four mix all cyber cctv col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="number">01</div>
                            <div class="title">Target Cameras</div>
                            <h3>Case Attack surface <br> management</h3>
                        </div>
                        <div class="image">
                            <img src="assets/images/gallery/11.jpg" alt="" />
                        </div>
                        <div class="overlay-box" style="background-image:url({{ asset('assets/images/gallery/12.jpg') }})">
                            <div class="overlay-content">
                                <h4><a href="projects-detail.html">Case Attack surface <br> management</a></h4>
                                <a class="learn-more" href="projects-detail.html">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Block Four -->
                <div class="project-block-four mix all digital col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="number">02</div>
                            <div class="title">Box Cameras</div>
                            <h3>Third-party security risk <br> management</h3>
                        </div>
                        <div class="image">
                            <img src="assets/images/gallery/9.jpg" alt="" />
                        </div>
                        <div class="overlay-box" style="background-image:url(assets/images/gallery/10.jpg)">
                            <div class="overlay-content">
                                <h4><a href="projects-detail.html">Third-party security risk <br> management</a></h4>
                                <a class="learn-more" href="projects-detail.html">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Block Four -->
                <div class="project-block-four mix all cctv col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="number">03</div>
                            <div class="title">Online Cyber Crime</div>
                            <h3>Commercial Security <br> Case Studies</h3>
                        </div>
                        <div class="image">
                            <img src="assets/images/gallery/16.jpg" alt="" />
                        </div>
                        <div class="overlay-box" style="background-image:url({{ asset('assets/images/gallery/17.jpg') }})">
                            <div class="overlay-content">
                                <h4><a href="projects-detail.html">Commercial Security <br> Case Studies</a></h4>
                                <a class="learn-more" href="projects-detail.html">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Block Four -->
                <div class="project-block-four mix all digital cctv col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="number">04</div>
                            <div class="title">Case Study</div>
                            <h3>Case Study – Primary <br> School Access Control System</h3>
                        </div>
                        <div class="image">
                            <img src="assets/images/gallery/18.jpg" alt="" />
                        </div>
                        <div class="overlay-box" style="background-image:url({{ asset('assets/images/gallery/19.jpg') }})">
                            <div class="overlay-content">
                                <h4><a href="projects-detail.html">Case Study – Primary <br> School Access Control System</a></h4>
                                <a class="learn-more" href="projects-detail.html">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Block Four -->
                <div class="project-block-four mix all digital cyber col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="number">05</div>
                            <div class="title">Case Study</div>
                            <h3>Case Study – Private <br> Surveillance CCTV</h3>
                        </div>
                        <div class="image">
                            <img src="assets/images/gallery/20.jpg" alt="" />
                        </div>
                        <div class="overlay-box" style="background-image:url({{ asset('assets/images/gallery/21.jpg') }})">
                            <div class="overlay-content">
                                <h4><a href="projects-detail.html">Case Study – Private <br> Surveillance CCTV</a></h4>
                                <a class="learn-more" href="projects-detail.html">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Block Four -->
                <div class="project-block-four mix all cyber col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="number">06</div>
                            <div class="title">CCtv Setup</div>
                            <h3>Business Premises <br> CCTV Installation</h3>
                        </div>
                        <div class="image">
                            <img src="assets/images/gallery/22.jpg" alt="" />
                        </div>
                        <div class="overlay-box" style="background-image:url({{ asset('assets/images/gallery/23.jpg') }})">
                            <div class="overlay-content">
                                <h4><a href="projects-detail.html">Business Premises <br> CCTV Installation</a></h4>
                                <a class="learn-more" href="projects-detail.html">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="button-box text-center">
            <a class="btn-style-five theme-btn" href="#"><span class="txt">Load More</span></a>
        </div>

    </div>
</section>
@endsection