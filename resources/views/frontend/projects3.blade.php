@extends('layouts.forntend-layouts')
@section('page')
<section class="page-title-two" style="background-image: url({{ asset('assets/images/background/5.jpg') }})">
    <div class="auto-container">
        <div class="title">CCtv Security Case</div>
        <h2>Case Study - Commercial <br> Building CCTV Installation</h2>
    </div>
</section>
<!--End Page Title-->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="project-detail">
                    <div class="inner-box">
                        <h2>Commercial Building <br> CCTV Installation</h2>
                        <h3>The Challenge</h3>
                        <p>As a public building with visitor access throughout the day and possible vandalism, damage or break-in. The requirement was to have the ability to view and review any events live and post-incidents.</p>

                        <h3>The Solution</h3>
                        <p>After consultation with the Main Contractor, the Client and the Police, we installed a CCTV System using high performance Day/Night (colour/monochrome) cameras with infra red LED illuminators for night time vision record and storing images for 30 days.</p>

                        <h3>The Impact</h3>
                        <p>The Client was very pleased with the installation and the quality of the solution and performance of the CCTV System.</p>

                        <ul class="project-options">
                            <li>One of America’s most popular floors</li>
                            <li>Can add warmth and character to any room</li>
                            <li>Beautiful to live with</li>
                        </ul>
                        <div class="image">
                            <img src="{{ asset('assets/images/gallery/24.jpg') }}" alt="" />
                        </div>
                        <p>From protection against intruders, to monitored fire alarms, video and personal emergency response, Vector Security provides what you need so you can enjoy peace of mind in your home. And when you're on the go, manage your home security system using our convenient mobile solutions from your computer </p>
                        <div class="lower-box">
                            <div class="row clearfix">
                                <!-- Column -->
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/gallery/25.jpg') }}" alt="" />
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <ul class="project-options">
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
                <aside class="sidebar left-padding sticky-top">

                    <!-- Review Widget -->
                    <div class="sidebar-widget review-widget">
                        <div class="widget-content">
                            <!-- Title -->
                            <div class="title">
                                <h4>Get a free <br> security review</h4>
                            </div>

                            <!-- Review Form -->
                            <div class="review-form">
                                <form method="post" action="contact.html">

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <input type="text" name="firstname" value="" placeholder="Name" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Email address" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <input type="text" name="phone" value="" placeholder="Phone" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <div class="radio-box">
                                            <input type="radio" name="remember-password" id="type-1">
                                            <label for="type-1">I consent to Brook Security collecting my personal data </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-style-four"><span class="txt">Submit</span></button>
                                    </div>


                                </form>
                            </div>
                            <!-- End Default Form -->

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

<!-- Related Project Section -->
<div class="related-project-section">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>Recent Projects</h2>
        </div>

        <div class="row clearfix">

            <!-- Project Block Four -->
            <div class="project-block-four col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="upper-box">
                        <div class="number">01</div>
                        <div class="title">Target Cameras</div>
                        <h3>Case Attack surface <br> management</h3>
                    </div>
                    <div class="image">
                        <img src="{{ asset('assets/images/gallery/11.jpg') }}" alt="" />
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
            <div class="project-block-four col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="upper-box">
                        <div class="number">02</div>
                        <div class="title">Box Cameras</div>
                        <h3>Home Security Case <br> Studies</h3>
                    </div>
                    <div class="image">
                        <img src="{{ asset('assets/images/gallery/26.jpg') }}" alt="" />
                    </div>
                    <div class="overlay-box" style="background-image:url({{ asset('assets/images/gallery/27.jpg') }})">
                        <div class="overlay-content">
                            <h4><a href="projects-detail.html">Home Security Case <br> Studies</a></h4>
                            <a class="learn-more" href="projects-detail.html">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Related Products Section -->

@endsection