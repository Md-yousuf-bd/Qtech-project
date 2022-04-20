@extends('layouts.forntend-layouts')
@section('page')
<div class="page-wrapper">

	<!-- Preloader -->
    <div class="preloader">
		<span></span>
	</div>
	<!-- End Preloader -->

 	<!-- Header Style -->
 
    <!-- End Main Header -->

	<!-- Main Slider Two Section -->
    <section class="main-slider-two">
		<div class="main-slider-carousel owl-theme owl-carousel thm-owl__carousel"
			data-owl-options='{
				"animateOut": "fadeOut",
				"animateIn": "fadeIn",
				"loop":true,
				"margin":0,
				"nav":true,
				"autoplayTimeout":8000,
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
			<div class="slide">
				<div class="icon-one" style="background-image:url({{ asset('assets/images/shapes/shape-22.png') }})"></div>
				<div class="icon-two" style="background-image:url({{ asset('assets/images/shapes/shape-23.png') }})"></div>
				<div class="auto-container">
					<div class="row clearfix">

						<!-- Content Column -->
						<div class="content-column col-lg-7 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title">cyber attack</div>
								<h1>Protect Your <br> Sensitive <span>Online</span> <br> Data By Qtec</h1>
								<div class="text">Cyber security is the application of technologies, processes and controls to protect systems, networks, programs, devices </div>
								<div class="btns-box">
									<a class="btn-style-one theme-btn" href="about.html"><span class="txt">Explore More</span></a>
								</div>
							</div>
						</div>

						<!-- Image Column -->
						<div class="image-column col-lg-5 col-md-12 col-sm-12">
							<div class="inner-column parallax-scene-1">
								<div class="image" data-depth="0.20">
									<img src="assets/images/main-slider/content-image-1.png" alt="" />
								</div>
							</div>
							<div class="icon-three" style="background-image:url({{ asset('assets/images/shapes/shape-24.png') }})"></div>
							<div class="icon-four" style="background-image:url({{ asset('assets/images/shapes/shape-25.png') }})"></div>
							<div class="icon-five" style="background-image:url({{ asset('assets/images/shapes/shape-26.png') }})"></div>
							<div class="icon-six" style="background-image:url({{ asset('assets/images/shapes/shape-27.png') }})"></div>
						</div>

					</div>
				</div>
			</div>
			<!-- End Slide 01 -->

			<!-- Slide 02 -->
			<div class="slide">
				<div class="icon-one" style="background-image:url({{ asset('assets/images/shapes/shape-22.png') }})"></div>
				<div class="icon-two" style="background-image:url({{ asset('assets/images/shapes/shape-23.png') }})"></div>
				<div class="auto-container">
					<div class="row clearfix">

						<!-- Content Column -->
						<div class="content-column col-lg-7 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title">cyber attack</div>
								<h1>Protect Your <br> Sensitive <span>Online</span> <br> Data By Qtec</h1>
								<div class="text">Cyber security is the application of technologies, processes and controls to protect systems, networks, programs, devices </div>
								<div class="btns-box">
									<a class="btn-style-one theme-btn" href="about.html"><span class="txt">Explore More</span></a>
								</div>
							</div>
						</div>

						<!-- Image Column -->
						<div class="image-column col-lg-5 col-md-12 col-sm-12">
							<div class="inner-column parallax-scene-2">
								<div class="image" data-depth="0.20">
									<img src="assets/images/main-slider/content-image-1.png" alt="" />
								</div>
							</div>
							<div class="icon-three" style="background-image:url({{ asset('assets/images/shapes/shape-24.png') }})"></div>
							<div class="icon-four" style="background-image:url({{ asset('assets/images/shapes/shape-25.png') }})"></div>
							<div class="icon-five" style="background-image:url({{ asset('assets/images/shapes/shape-26.png') }})"></div>
							<div class="icon-six" style="background-image:url({{ asset('assets/images/shapes/shape-27.png') }})"></div>
						</div>

					</div>
				</div>
			</div>
			<!-- End Slide 02 -->

			<!-- Slide 03 -->
			<div class="slide">
				<div class="icon-one" style="background-image:url({{ asset('assets/images/shapes/shape-22.png') }})"></div>
				<div class="icon-two" style="background-image:url({{ asset('assets/images/shapes/shape-23.png') }})"></div>
				<div class="auto-container">
					<div class="row clearfix">

						<!-- Content Column -->
						<div class="content-column col-lg-7 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title">cyber attack</div>
								<h1>Protect Your <br> Sensitive <span>Online</span> <br> Data By Qtec</h1>
								<div class="text">Cyber security is the application of technologies, processes and controls to protect systems, networks, programs, devices </div>
								<div class="btns-box">
									<a class="btn-style-one theme-btn" href="about.html"><span class="txt">Explore More</span></a>
								</div>
							</div>
						</div>

						<!-- Image Column -->
						<div class="image-column col-lg-5 col-md-12 col-sm-12">
							<div class="inner-column parallax-scene-3">
								<div class="image" data-depth="0.20">
									<img src="assets/images/main-slider/content-image-1.png" alt="" />
								</div>
							</div>
							<div class="icon-three" style="background-image:url({{ asset('assets/images/shapes/shape-24.png') }})"></div>
							<div class="icon-four" style="background-image:url({{ asset('assets/images/shapes/shape-25.png') }})"></div>
							<div class="icon-five" style="background-image:url({{ asset('assets/images/shapes/shape-26.png') }})"></div>
							<div class="icon-six" style="background-image:url({{ asset('assets/images/shapes/shape-27.png') }})"></div>
						</div>

					</div>
				</div>
			</div>
			<!-- End Slide 03 -->

		</div>
    </section>
    <!-- End Main Slider Section -->

	<!-- Services Section Two -->
	<section class="services-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Services list</div>
				<h2>We Provide The Best <span>Digital</span> <br> Security Service</h2>
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
	<!-- End Services Section -->

	<!-- Cloud Section -->
	<section class="cloud-section style-two">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Title Box -->
						<div class="title-box">
							<h2>What is the Impact of Cybercrime?</h2>
							<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Protect Your Universe - from the Home Office to the Cloud</div>
						</div>
						<div class="blocks-outer">

							<!-- Cloud Block -->
							<div class="cloud-block">
								<div class="inner-box">
									<span class="icon icon-security-lock-1"></span>
									<h4>Integrated Security</h4>
									<div class="text">Lorem Ipsum nibh vel velit auctor aliqu. Aenean sollic tudin, lorem is simply free text quis bibendum.</div>
								</div>
							</div>

							<!-- Cloud Block -->
							<div class="cloud-block">
								<div class="inner-box">
									<span class="icon icon-shield"></span>
									<h4>Developing a tangible plan</h4>
									<div class="text">Lorem Ipsum nibh vel velit auctor aliqu. Aenean sollic tudin, lorem is simply free text quis bibendum.</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="shape-layer" style="background-image:url({{ asset('assets/images/shapes/shape-6.png') }})"></div>
						<div class="image">
							<img src="{{ asset('assets/images/resource/cloud-1.png') }}" alt="" />
						</div>
						<div class="text">“Reprehenderit in voluptate velit esse cillum dolore   eu fugiat nulla pariatur Protect your Universe”</div>
						<div class="author">Mahfuz Riad, <span>Founder</span></div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Cloud Section -->

	<!-- About Section -->
	<section class="about-section style-two">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Images Column -->
				<div class="images-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image" data-tilt data-tilt-max="4">
							<img src="{{ asset('assets/images/resource/about-3.png') }}" alt="" />
						</div>
						<div class="analyze-box" style="background-image:url({{ asset('assets/images/shapes/shape-13.png') }})">
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
							<div class="title">ABOUT QTEC</div>
							<h2>We're protecting the world's data</h2>
							<div class="text">Lorem ipsum is simply free text dolor sit amet, consecte tur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua lonm </div>
						</div>
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
						<div class="btn-box">
							<a class="btn-style-four theme-btn" href="contact.html"><span class="txt">Learn More</span></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End About Section -->

	<!-- CTA Section -->
	<section class="cta-section margin-top-two">
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

	<!-- Project Section Two -->
	<section class="project-section-two" style="background-image:url({{ asset('assets/images/background/3.jpg') }})">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title clearfix">
				<div class="pull-left">
					<div class="title">LATEST PROJECTS</div>
					<h2>Our innovation Cyber <br> <span>Security</span> projects Solution</h2>
				</div>
				<div class="pull-right">
					<div class="btn-box">
						<a class="btn-style-five theme-btn" href="projects.html"><span class="txt">View More</span></a>
					</div>
				</div>
			</div>
		</div>

		<!-- Outer Container -->
		<div class="outer-container">
			<div class="row clearfix">

				<!-- Project Block Two -->
				<div class="project-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="upper-box">
							<div class="number">01</div>
							<div class="title">Online Cyber Crime</div>
							<h3><a href="projects-detail.html">Case Attack surface management</a></h3>
						</div>
						<div class="image">
							<a href="projects-detail.html"><img src="{{ asset('assets/images/gallery/4.jpg') }}" alt="" /></a>
						</div>
					</div>
				</div>

				<!-- Project Block Two -->
				<div class="project-block-two col-lg-4 col-md-6 col-sm-12">
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
				<div class="project-block-two col-lg-4 col-md-6 col-sm-12">
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

			</div>
		</div>
	</section>
	<!-- End Project Section Two -->

	<!-- Skill Section -->
	<section class="skill-section style-two">
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
						<div class="{{asset('image-two wow fadeInRight') }}" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="{{ asset('assets/images/resource/skill-1.jpg') }}" alt="" />
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Skill Section -->

	<!-- Testimonial Section -->
	<section class="testimonial-section-two">
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

				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="upper-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="assets/images/authors/author-1.jpg" alt="" />
								</div>
								<h5>Mahfuz Riad</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
						<div class="lower-box">
							<div class="quote-icon icon-text-quote"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="upper-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-2.jpg') }}" alt="" />
								</div>
								<h5>Robin Corn</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
						<div class="lower-box">
							<div class="quote-icon icon-text-quote"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="upper-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-3.jpg') }}" alt="" />
								</div>
								<h5>Mate Apolo</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
						<div class="lower-box">
							<div class="quote-icon icon-text-quote"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="upper-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-1.jpg') }}" alt="" />
								</div>
								<h5>Mahfuz Riad</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
						<div class="lower-box">
							<div class="quote-icon icon-text-quote"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="upper-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-2.jpg') }}" alt="" />
								</div>
								<h5>Robin Corn</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
						<div class="lower-box">
							<div class="quote-icon icon-text-quote"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="upper-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-3.jpg') }}" alt="" />
								</div>
								<h5>Mate Apolo</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
						<div class="lower-box">
							<div class="quote-icon icon-text-quote"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="upper-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-1.jpg') }}" alt="" />
								</div>
								<h5>Mahfuz Riad</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
						<div class="lower-box">
							<div class="quote-icon icon-text-quote"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="upper-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-2.jpg') }}" alt="" />
								</div>
								<h5>Robin Corn</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
						<div class="lower-box">
							<div class="quote-icon icon-text-quote"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="upper-box">
							<div class="box-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/authors/author-3.jpg') }}" alt="" />
								</div>
								<h5>Mate Apolo</h5>
								<div class="designation">Anonymous Security AST</div>
							</div>
						</div>
						<div class="lower-box">
							<div class="quote-icon icon-text-quote"></div>
							<div class="text">We turn your experts into thought leaders by getting their voices heard in the market and by building credibility and brand Lorem ipsum dolor sit amet, consectetur adip isicing elit</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->

	<!-- News Section Two -->
	<section class="news-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title clearfix">
				<div class="pull-left">
					<div class="title">LATEST Blog</div>
					<h2>Check Latest <span>Blog</span> Post from <br> Digital Security</h2>
				</div>
				<div class="pull-right">
					<div class="btn-box">
						<a class="btn-style-five theme-btn" href="blog.html"><span class="txt">Vew all news</span></a>
					</div>
				</div>
			</div>

			<div class="row clearfix">

				<!-- News Block -->
				<div class="news-block-two col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="assets/images/blog/blog-4.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-info">
								<li>Technology</li>
								<li><span class="icon icon-calendar-day"></span>Feb 26, 2022</li>
							</ul>
							<h4><a href="blog-detail.html">Global Technology Provider Looks to MVISION Unified Cloud Edge</a></h4>
							<div class="text">There are many variations of passages of lorem ipsum available alteration lorem ipsum ooking at its layout the point if you are going to use</div>
							<a href="blog-detail.html" class="discover"><span class="arrow fa fa-angle-double-right"></span>Discover More</a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block-two col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="assets/images/blog/blog-5.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-info">
								<li>Technology</li>
								<li><span class="icon icon-calendar-day"></span>Feb 26, 2022</li>
							</ul>
							<h4><a href="blog-detail.html">Fighting Supply Chain Threats Is Complicated</a></h4>
							<div class="text">There are many variations of passages of lorem ipsum available alteration lorem ipsum ooking at its layout the point if you are going to use</div>
							<a href="blog-detail.html" class="discover"><span class="arrow fa fa-angle-double-right"></span>Discover More</a>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End News Section Two -->

	<!-- Main Footer -->
  
	<!-- End Main Footer -->

</div>
@endsection