@extends('layouts.forntend-layouts')
@section('page')
<div class="page-wrapper">

	<!-- Preloader -->
    <div class="preloader">
		<span></span>
	</div>
	<!-- End Preloader -->

 	<!-- Header Style One -->

    <!-- End Main Header -->

	<!-- Main Slider Section -->
    <section class="main-slider">
		<div class="main-slider-carousel owl-theme owl-carousel thm-owl__carousel"
			data-owl-options='{
				"animateOut": "fadeOut",
				"animateIn": "fadeIn",
				"loop":true,
				"margin":0,
				"nav":true,
				"autoplayTimeout":5000,
				"autoHeight": true,
				"smartSpeed": 500,
				"autoplay": 6000,
				"navText": ["<span class=\"fa fa-angle-up\"></span>","<span class=\"fa fa-angle-down\"></span>"],
				"responsive":{
					"0":{
						"items":1
					},
					"768":{
						"items":1
					},
					"1200":{
						"items":1
					}
				}
			}'>
			<!-- Slide 01 -->
			<div class="slide" style="background-image:url({{ asset('assets/images/main-slider/image-1.jpg') }})">
				<div class="auto-container clearfix">

					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="shape-one" style="background-image:url({{ asset('assets/images/shapes/shape-1.png') }})"></div>
							<div class="shape-two" style="background-image:url({{ asset('assets/images/shapes/shape-2.png') }})"></div>
							<div class="title">digital attack</div>
							<h1>Digital <span>Security</span> <br> Safe From <br> Digital Attack</h1>
							<div class="btns-box">
								<a class="btn-style-one theme-btn" href="about.html"><span class="txt">Explore More</span></a>
							</div>
							<div class="play-box">
								<p>Digital <br> Security</p>
								<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-button"><span class="fa fa-play"><i class="ripple"></i></span></a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- End Slide 01 -->

			<!-- Slide 02 -->
			<div class="slide" style="background-image:url({{ asset('assets/images/main-slider/image-2.jpg') }})">
				<div class="auto-container clearfix">

					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="shape-one" style="background-image:url{{ asset('assets/images/shapes/shape-1.png') }}"></div>
							<div class="shape-two" style="background-image:url{{ asset('assets/images/shapes/shape-2.png') }}"></div>
							<div class="title">digital attack</div>
							<h1>Digital <span>Security</span> <br> Safe From <br> Digital Attack</h1>
							<div class="btns-box">
								<a class="btn-style-one theme-btn" href="about.html"><span class="txt">Explore More</span></a>
							</div>
							<div class="play-box">
								<p>Digital <br> Security</p>
								<a href="{{ asset('https://www.youtube.com/watch?v=kxPCFljwJws') }}" class="lightbox-image play-button"><span class="fa fa-play"><i class="ripple"></i></span></a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- End Slide 02 -->

			<!-- Slide 03 -->
			<div class="slide" style="background-image:url{{ asset('assets/images/main-slider/image-3.jpg') }}">
				<div class="auto-container clearfix">

					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="shape-one" style="background-image:url({{ asset('assets/images/shapes/shape-1.png') }})"></div>
							<div class="shape-two" style="background-image:url({{ asset('assets/images/shapes/shape-2.png') }})"></div>
							<div class="title">digital attack</div>
							<h1>Digital <span>Security</span> <br> Safe From <br> Digital Attack</h1>
							<div class="btns-box">
								<a class="btn-style-one theme-btn" href="about.html"><span class="txt">Explore More</span></a>
							</div>
							<div class="play-box">
								<p>Digital <br> Security</p>
								<a href="{{ asset('https://www.youtube.com/watch?v=kxPCFljwJws') }}" class="lightbox-image play-button"><span class="fa fa-play"><i class="ripple"></i></span></a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- End Slide 03 -->

		</div>
    </section>
    <!-- End Main Slider Section -->

	<!-- About Section -->
	<section class="about-section">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Images Column -->
				<div class="images-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="{{ asset('assets/images/resource/about-1.jpg') }}" alt="" />
							<span class="icon icon-security-1"></span>
						</div>
						<div class="image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="{{ asset('assets/images/resource/about-2.jpg') }}" alt="" />
						</div>
						<div class="analyze-box" style="background-image:url{{ asset('assets/images/shapes/shape-4.png') }}">
							<strong>5B</strong><i>+</i>
							ANALYZE
						</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">ABOUT COMPANY</div>
							<h2>We are a world-class <br> team of experts.</h2>
							<div class="text">Lorem ipsum is simply free text dolor sit amet, consecte tur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua lonm </div>
						</div>
						<ul class="about-list">
							<li>Empower them with Proofpoint.</li>
							<li>Smart technology expense security solutions</li>
						</ul>
						<!-- Expert Box -->
						<div class="expert-box">
							<div class="box-inner">
								<div class="expert">
									<div class="count-box">
										<span class="count-text" data-speed="4000" data-stop="30">0</span><i>+</i>
									</div>
									Total Expert
								</div>
								<div class="text">Our great team of more than <br> 1400 Digital Security experts.</div>
							</div>
						</div>
						<div class="lower-text">Passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End About Section -->

	<!-- Services Section -->
	<section class="services-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Services list</div>
				<h2>We Provide The Best <span>Digital</span> <br> Security Service</h2>
			</div>
			<div class="row clearfix">

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon icon-wireframe-website"></span>
						</div>
						<h4><a href="service-detail.html">Website Security</a></h4>
						<div class="text">Lorem Ipsum, you need to be sure there isn't anything embarrassing  generators on the Internet</div>
						<a href="service-detail.html" class="explore">Explore</a>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon icon-networking-2"></span>
						</div>
						<h4><a href="service-detail.html">Network Security</a></h4>
						<div class="text">Lorem Ipsum, you need to be sure there isn't anything embarrassing  generators on the Internet</div>
						<a href="service-detail.html" class="explore">Explore</a>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon icon-networking-1"></span>
						</div>
						<h4><a href="service-detail.html">Cyber Security</a></h4>
						<div class="text">Lorem Ipsum, you need to be sure there isn't anything embarrassing  generators on the Internet</div>
						<a href="service-detail.html" class="explore">Explore</a>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Services Section -->

	<!-- Cloud Section -->
	<section class="cloud-section">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Title Box -->
						<div class="title-box">
							<h2><span>Protect Your</span> <br> Universe - from the Home <br> Office to the Cloud</h2>
							<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Protect Your Universe - from the Home Office to the Cloud</div>
						</div>
						<div class="blocks-outer">

							<!-- Cloud Block -->
							<div class="cloud-block">
								<div class="inner-box">
									<span class="icon icon-security-lock-1"></span>
									<h4>Brand & Identity Protection</h4>
									<div class="text">Lorem Ipsum nibh vel velit auctor aliqu. Aenean sollic tudin, lorem is simply free text quis bibendum.</div>
								</div>
							</div>

							<!-- Cloud Block -->
							<div class="cloud-block">
								<div class="inner-box">
									<span class="icon icon-shield"></span>
									<h4>Secure Remote Access</h4>
									<div class="text">Lorem Ipsum nibh vel velit auctor aliqu. Aenean sollic tudin, lorem is simply free text quis bibendum.</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="shape-layer" style="background-image:url({{ asset('assets/images/shapes/shape-6.png') }})"></div>
						<div class="image">
							<img src="{{ asset('assets/images/resource/cloud.jpg') }}" alt="" />
						</div>
						<div class="text">“Reprehenderit in voluptate velit esse cillum dolore   eu fugiat nulla pariatur Protect your Universe”</div>
						<div class="author">Mahfuz Riad, <span>Founder</span></div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Cloud Section -->

	<!-- Project Section -->
	<section class="project-section" style="background-image:url{{ asset('assets/images/background/1.jpg') }}">
		<div class="shape-layer-one" style="background-image:url{{ asset('assets/images/shapes/shape-7.png') }}"></div>
		<div class="shape-layer-two" style="background-image:url{{ asset('assets/images/shapes/shape-8.png') }}"></div>
		<div class="shape-layer-three" style="background-image:url{{ asset('assets/images/shapes/shape-9.png') }}"></div>
		<div class="shape-layer-four" style="background-image:url{{ asset('assets/images/shapes/shape-10.png') }}"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">LATEST PROJECTS</div>
				<h2>Our innovation Digital <span>Security</span> <br> projects Solution</h2>
			</div>
			<div class="row clearfix">

				<!-- Project Block -->
				<div class="project-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<div class="color-layer"></div>
							<a href="projects-detail.html" class="share-icon fa fa-share-alt"></a>
							<img src="assets/images/gallery/1.jpg" alt="" />
							<div class="content">
								<h4><a href="projects-detail.html">Digital Transformation</a></h4>
							</div>
						</div>
					</div>
				</div>

				<!-- Project Block -->
				<div class="project-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<div class="color-layer"></div>
							<a href="projects-detail.html" class="share-icon fa fa-share-alt"></a>
							<img src="assets/images/gallery/2.jpg" alt="" />
							<div class="content">
								<h4><a href="projects-detail.html">Digital Risk Protection</a></h4>
							</div>
						</div>
					</div>
				</div>

				<!-- Project Block -->
				<div class="project-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<div class="color-layer"></div>
							<a href="projects-detail.html" class="share-icon fa fa-share-alt"></a>
							<img src="assets/images/gallery/3.jpg" alt="" />
							<div class="content">
								<h4><a href="projects-detail.html">Cyber Security Advice</a></h4>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Project Section -->

	<!-- CTA Section -->
	<section class="cta-section margin-top">
		<div class="auto-container">
			<div class="inner-container clearfix">
				<span class="box-one"></span>
				<span class="box-two"></span>
				<span class="box-three"></span>
				<div class="pull-left">
					<h2>Get Your Personalized Website <br> Checkup & Let Us</h2>
				</div>
				<div class="pull-right">
					<div class="btns-box">
						<a class="btn-style-two theme-btn" href="about.html"><span class="txt">Visit the Threat Hub</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA Section -->

	<!-- Skill Section -->
	<section class="skill-section">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2><span>Statistics of threat</span> <br> detected performance</h2>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
						<p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration words which don't look believable.</p>

						<!-- Skills -->
						<div class="skills">

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Would Highly Recommend</div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner">
										<div class="bar progress-line" data-width="95">
											<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Threat Detected  Solve</div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner">
										<div class="bar progress-line" data-width="85">
											<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="85">0</span>%</div></div>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="circle-one"></div>
						<div class="circle-two"></div>
						<div class="image" data-tilt data-tilt-max="6">
							<img src="{{ asset('assets/images/resource/skill.jpg') }}" alt="" />
						</div>
						<div class="image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="{{ asset('assets/images/resource/skill-1.jpg') }}" alt="" />
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Skill Section -->

	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Testimonial</div>
				<h2>Success Stories, to know about <br> our Security</h2>
			</div>
			<div class="testimonial-carousel owl-theme owl-carousel thm-owl__carousel"
				data-owl-options='{
					"animateOut": "fadeOut",
					"animateIn": "fadeIn",
					"loop":true,
					"margin":30,
					"nav":true,
					"autoHeight": true,
					"smartSpeed": 500,
					"autoplay": 6000,
					"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
					"responsive":{
						"0":{
							"items":1
						},
						"600":{
							"items":1
						},
						"800":{
							"items":2
						},
						"1024":{
							"items":2
						},
						"1200":{
							"items":3
						},
						"1400":{
							"items":3
						}
					}
				}'>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="hover-layer"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
						<div class="lower-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-1.jpg') }}" alt="" />
								</div>
								<h5>Mahfuz Riad</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="hover-layer"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
						<div class="lower-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-1.jpg') }}" alt="" />
								</div>
								<h5>Mahfuz Riad</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="hover-layer"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
						<div class="lower-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-1.jpg') }}" alt="" />
								</div>
								<h5>Mahfuz Riad</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="hover-layer"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
						<div class="lower-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-1.jpg') }}" alt="" />
								</div>
								<h5>Mahfuz Riad</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="hover-layer"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
						<div class="lower-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-1.jpg') }}" alt="" />
								</div>
								<h5>Mahfuz Riad</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="hover-layer"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
						<div class="lower-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{asset('assets/images/authors/author-1.jpg') }}" alt="" />
								</div>
								<h5>Mahfuz Riad</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="hover-layer"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
						<div class="lower-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-1.jpg') }}" alt="" />
								</div>
								<h5>Mahfuz Riad</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="hover-layer"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
						<div class="lower-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-1.jpg') }}" alt="" />
								</div>
								<h5>Mahfuz Riad</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="hover-layer"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
						<div class="lower-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-1.jpg') }}" alt="" />
								</div>
								<h5>Mahfuz Riad</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->

	<!-- News Section -->
	<section class="news-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">LATEST Blog</div>
				<h2>Check Latest <span>Blog</span> Post from <br> Digital Security</h2>
			</div>
			<div class="row clearfix">

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="assets/images/blog/blog-1.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-info">
								<li>Technology</li>
								<li><span class="icon icon-calendar-day"></span>Feb 26, 2022</li>
							</ul>
							<h5><a href="blog-detail.html">All The Security & Privacy Updates From Amazon’s</a></h5>
							<div class="text">There are many variations of passages of lorem ipsum available alteration.</div>
							<div class="lower-box">
								<a href="blog-detail.html" class="discover">Discover More</a>
							</div>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="{{ asset('assets/images/blog/blog-2.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-info">
								<li>Technology</li>
								<li><span class="icon icon-calendar-day"></span>Feb 26, 2022</li>
							</ul>
							<h5><a href="blog-detail.html">Tackling IT-Security Fundamentals Strategic ships</a></h5>
							<div class="text">There are many variations of passages of lorem ipsum available alteration.</div>
							<div class="lower-box">
								<a href="blog-detail.html" class="discover">Discover More</a>
							</div>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="{{ asset('assets/images/blog/blog-3.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-info">
								<li>Technology</li>
								<li><span class="icon icon-calendar-day"></span>Feb 26, 2022</li>
							</ul>
							<h5><a href="blog-detail.html">TRUE Ranks 90 in the World for 2021 Cybersecurity Award</a></h5>
							<div class="text">There are many variations of passages of lorem ipsum available alteration.</div>
							<div class="lower-box">
								<a href="blog-detail.html" class="discover">Discover More</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End News Section -->

	<!-- Main Footer -->
  
	<!-- End Main Footer -->

</div>
@endsection
