	
    @extends('layouts.forntend-layouts')
    @section('page')
    <!-- Main Slider Three Section -->
    <section class="main-slider-three">
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
			<div class="slide">
				<div class="color-layer"></div>
				<div class="shape-layer-one" style="background-image:url({{ asset('assets/images/shapes/shape-14.png') }})"></div>
				<div class="shape-layer-two" style="background-image:url({{ asset('assets/images/shapes/shape-15.png') }})"></div>
				<div class="auto-container">
					<div class="row clearfix">

						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title">QTEC</div>
								<h1><span>CCtv</span> Modern <br> Security <br> Integration</h1>
								<div class="btns-box">
									<div class="pull-left">
										<a class="btn-style-one theme-btn" href="about.html"><span class="txt">Explore More</span></a>
									</div>
									<div class="pull-left">
										<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-box"><span class="fa fa-play"></span><i>How It Work</i></a>
									</div>
								</div>
							</div>
						</div>

						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="shape-layer-three" style="background-image:url({{ asset('assets/images/shapes/shape-16.png') }})"></div>
								<div class="shape-layer-four" style="background-image:url({{ asset('assets/images/shapes/shape-17.png') }})"></div>
								<div class="shape-layer-five" style="background-image:url({{ asset('assets/images/shapes/shape-18.png') }})"></div>
								<div class="image" data-depth="0.10">
									<img src="{{ asset('assets/images/main-slider/content-image-2.jpg') }}" alt="" />
								</div>
							</div>
							<!-- Camera Box -->
							<div class="camera-box">
								<div class="border-layer"></div>
								<span class="icon icon-cctv-2"></span>
							</div>
							<!-- Camera Box -->

							<!-- CCTV Box -->
							<div class="cctv-box">
								<span class="security-icon icon-security-1"></span>
								<h4>CCtv Services <span>Supply & Installed</span></h4>
								<ul class="camera-icons">
									<li><span class="icon icon-cctv-1"></span></li>
									<li><span class="icon icon-home"></span></li>
									<li><span class="icon icon-solar-panels"></span></li>
								</ul>
							</div>

						</div>

					</div>
				</div>
			</div>
			<!-- End Slide 01 -->

			<!-- Slide 02 -->
			<div class="slide">
				<div class="color-layer"></div>
				<div class="shape-layer-one" style="background-image:url({{ asset('assets/images/shapes/shape-14.png') }})"></div>
				<div class="shape-layer-two" style="background-image:url({{ asset('assets/images/shapes/shape-15.png') }})"></div>
				<div class="auto-container">
					<div class="row clearfix">

						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title">QTEC</div>
								<h1><span>CCtv</span> Modern <br> Security <br> Integration</h1>
								<div class="btns-box">
									<div class="pull-left">
										<a class="btn-style-one theme-btn" href="about.html"><span class="txt">Explore More</span></a>
									</div>
									<div class="pull-left">
										<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-box"><span class="fa fa-play"></span><i>How It Work</i></a>
									</div>
								</div>
							</div>
						</div>

						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="shape-layer-three" style="background-image:url({{ asset('assets/images/shapes/shape-16.png') }})"></div>
								<div class="shape-layer-four" style="background-image:url({{ asset('assets/images/shapes/shape-17.png') }})"></div>
								<div class="shape-layer-five" style="background-image:url({{ asset('assets/images/shapes/shape-18.png') }})"></div>
								<div class="image" data-depth="0.10">
									<img src="{{ asset('assets/images/main-slider/content-image-2.jpg') }}" alt="" />
								</div>
							</div>
							<!-- Camera Box -->
							<div class="camera-box">
								<div class="border-layer"></div>
								<span class="icon icon-cctv-2"></span>
							</div>
							<!-- Camera Box -->

							<!-- CCTV Box -->
							<div class="cctv-box">
								<span class="security-icon icon-security-1"></span>
								<h4>CCtv Services <span>Supply & Installed</span></h4>
								<ul class="camera-icons">
									<li><span class="icon icon-cctv-1"></span></li>
									<li><span class="icon icon-home"></span></li>
									<li><span class="icon icon-solar-panels"></span></li>
								</ul>
							</div>

						</div>

					</div>
				</div>
			</div>
			<!-- End Slide 02 -->

			<!-- Slide 03 -->
			<div class="slide">
				<div class="color-layer"></div>
				<div class="shape-layer-one" style="background-image:url({{ asset('assets/images/shapes/shape-14.png') }})"></div>
				<div class="shape-layer-two" style="background-image:url({{ asset('assets/images/shapes/shape-15.png') }})"></div>
				<div class="auto-container">
					<div class="row clearfix">

						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title">QTEC</div>
								<h1><span>CCtv</span> Modern <br> Security <br> Integration</h1>
								<div class="btns-box">
									<div class="pull-left">
										<a class="btn-style-one theme-btn" href="about.html"><span class="txt">Explore More</span></a>
									</div>
									<div class="pull-left">
										<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-box"><span class="fa fa-play"></span><i>How It Work</i></a>
									</div>
								</div>
							</div>
						</div>

						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="shape-layer-three" style="background-image:url({{ asset('assets/images/shapes/shape-16.png') }})"></div>
								<div class="shape-layer-four" style="background-image:url({{ asset('assets/images/shapes/shape-17.png') }})"></div>
								<div class="shape-layer-five" style="background-image:url({{ asset('assets/images/shapes/shape-18.png') }})"></div>
								<div class="image" data-depth="0.10">
									<img src="{{ asset('assets/images/main-slider/content-image-2.jpg') }}" alt="" />
								</div>
							</div>
							<!-- Camera Box -->
							<div class="camera-box">
								<div class="border-layer"></div>
								<span class="icon icon-cctv-2"></span>
							</div>
							<!-- Camera Box -->

							<!-- CCTV Box -->
							<div class="cctv-box">
								<span class="security-icon icon-security-1"></span>
								<h4>CCtv Services <span>Supply & Installed</span></h4>
								<ul class="camera-icons">
									<li><span class="icon icon-cctv-1"></span></li>
									<li><span class="icon icon-home"></span></li>
									<li><span class="icon icon-solar-panels"></span></li>
								</ul>
							</div>

						</div>

					</div>
				</div>
			</div>
			<!-- End Slide 03 -->

		</div>
    </section>
    <!-- End Main Slider Three Section -->

	<!-- About Section Two -->
	<section class="about-section-two">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Images Column -->
				<div class="images-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<span class="icon icon-security-1"></span>
						<div class="row clearfix">
							<div class="column col-lg-6 col-md-7 col-sm-12">
								<div class="image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
									<img src="{{ asset('assets/images/resource/about-4.jpg') }}" alt="" />
								</div>
								<div class="image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
									<img src="{{ asset('assets/images/resource/about-5.jpg') }}" alt="" />
								</div>
							</div>
							<div class="column col-lg-6 col-md-5 col-sm-12">
								<div class="image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
									<img src="{{ asset('assets/images/resource/about-6.jpg') }}" alt="" />
								</div>
							</div>
						</div>
						<!-- Digital Box -->
						<div class="digital-box">
							<span class="arrow"></span>
							<p>Digital <br> Security</p>
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-button"><span class="fa fa-play"><i class="ripple"></i></span></a>
						</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">ABOUT QTEC CCtv Security</div>
							<h2>We're protecting <br> the world's data</h2>
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

	<!-- Commercial Section -->
	<section class="commercial-section">
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

	<!-- Featured Section -->
	<section class="featured-section">
		<div class="auto-container">
			<div class="inner-container">
				<span class="security-icon icon-security-1"></span>
				<div class="row clearfix">

					<!-- Featured Block -->
					<div class="featured-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<span class="icon-box">
									<span class="icon icon-folder-security"></span>
								</span>
								<h3><a href="service-detail.html">Cameras Detect</a></h3>
								<div class="text">Smart cameras stream within seconds to local AI to detect potential threats</div>
							</div>
						</div>
					</div>

					<!-- Featured Block -->
					<div class="featured-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<span class="icon-box">
									<span class="icon icon-padlock-security"></span>
								</span>
								<h3><a href="service-detail.html">Immediate Action</a></h3>
								<div class="text">No other security system or video surveillance company sends law enforcement faster</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Featured Section -->

	<!-- Security Section -->
	<section class="security-section">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Title Column -->
				<div class="title-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">WHAT WE DO</div>
							<h2>We Provide <br> Awesome Expert <br> CCtv Security <br> Service</h2>
							<div class="text">Lorem ipsum is simply free text dolor sit am incididunt ut labore et give the best quality of Lorem security systems and facility </div>
						</div>
						<div class="btn-box">
							<a class="btn-style-four theme-btn" href="services.html"><span class="txt">More Service</span></a>
						</div>
					</div>
				</div>

				<!-- Blocks Column -->
				<div class="blocks-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="row clearfix">

							<!-- Service Block Four -->
							<div class="service-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
									<div class="icon icon-networking-2"></div>
									<h4><a href="service-detail.html">Network Security</a></h4>
									<div class="text">Lorem Ipsum, you need to be sure there isn't anything embarrassing.</div>
									<a href="service-detail.html" class="arrow icon-right-arrow"></a>
								</div>
							</div>

							<!-- Service Block Four -->
							<div class="service-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInRight" data-wow-delay="450ms" data-wow-duration="1500ms">
									<div class="icon icon-robot-robotic"></div>
									<h4><a href="service-detail.html">Threat Intelligence</a></h4>
									<div class="text">Lorem Ipsum, you need to be sure there isn't anything embarrassing.</div>
									<a href="service-detail.html" class="arrow icon-right-arrow"></a>
								</div>
							</div>

							<!-- Service Block Four -->
							<div class="service-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
									<div class="icon icon-networking-2"></div>
									<h4><a href="service-detail.html">Network Security</a></h4>
									<div class="text">Lorem Ipsum, you need to be sure there isn't anything embarrassing.</div>
									<a href="service-detail.html" class="arrow icon-right-arrow"></a>
								</div>
							</div>

							<!-- Service Block Four -->
							<div class="service-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInRight" data-wow-delay="450ms" data-wow-duration="1500ms">
									<div class="icon icon-robot-robotic"></div>
									<h4><a href="service-detail.html">Threat Intelligence</a></h4>
									<div class="text">Lorem Ipsum, you need to be sure there isn't anything embarrassing.</div>
									<a href="service-detail.html" class="arrow icon-right-arrow"></a>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Security Section -->

	<!-- Experiance Section -->
	<section class="experiance-section" style="background-image:url({{ asset('assets/images/background/4.png') }})">
		<div class="auto-container">
			<!-- Upper Box -->
			<div class="upper-box clearfix">
				<span class="box-one"></span>
				<span class="box-two"></span>
				<span class="box-three"></span>
				<div class="pull-left">
					<h2>Own your personal CCtv <br> Security today and experience maximum protection</h2>
				</div>
				<div class="pull-right">
					<div class="btns-box">
						<a class="btn-style-two theme-btn" href="about.html"><span class="txt">Visit the Product</span></a>
					</div>
				</div>
			</div>

			<!-- Lower Box -->
			<div class="lower-box">
				<div class="row clearfix">

					<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image" data-tilt data-tilt-max="6">
								<img src="{{ asset('assets/images/resource/camera.png') }}" alt="" />
							</div>
						</div>
					</div>

					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">

							<!-- Camera Block -->
							<div class="camera-block">
								<div class="inner-box">
									<span class="icon icon-mic"></span>
									<h4>2-way Speaker & Mic</h4>
									<div class="text">For real-time crime intervention by our experienced security guards</div>
								</div>
							</div>

							<!-- Camera Block -->
							<div class="camera-block">
								<div class="inner-box">
									<span class="icon icon-wifi-1"></span>
									<h4>Wireless & Ethernet options</h4>
									<div class="text">Multiple security camera options to suit your property’s needs</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>

		</div>
	</section>
	<!-- End Experiance Section -->

	<!-- Project Section Two -->
	<section class="project-section-two style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title clearfix">
				<div class="pull-left">
					<div class="title">LATEST PROJECTS</div>
					<h2>Check our Security projects <br> in the past few years</h2>
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

				<!-- Project Block Three -->
				<div class="project-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="upper-box">
							<div class="number">01</div>
							<div class="title">Target Cameras</div>
							<h3>Project Cctv Target <br> Cameras</h3>
						</div>
						<div class="image">
							<img src="{{ asset('assets/images/gallery/7.jpg') }}" alt="" />
						</div>
						<div class="overlay-box" style="background-image:url({{ asset('assets/images/gallery/8.jpg') }})">
							<div class="overlay-content">
								<div class="number">01</div>
								<div class="title">Target Cameras</div>
								<h4><a href="projects-detail.html">Project Cctv Target <br> Cameras</a></h4>
								<a class="arrow icon-right-arrow-1" href="projects-detail.html"></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Project Block Three -->
				<div class="project-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="upper-box">
							<div class="number">02</div>
							<div class="title">Box Cameras</div>
							<h3>Qtec Box Cameras Office Protection</h3>
						</div>
						<div class="image">
							<img src="assets/images/gallery/9.jpg" alt="" />
						</div>
						<div class="overlay-box" style="background-image:url({{ asset('assets/images/gallery/10.jpg') }})">
							<div class="overlay-content">
								<div class="number">02</div>
								<div class="title">Box Cameras</div>
								<h4><a href="projects-detail.html">Qtec Box Cameras Office Protection</a></h4>
								<a class="arrow icon-right-arrow-1" href="projects-detail.html"></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Project Block Three -->
				<div class="project-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="upper-box">
							<div class="number">03</div>
							<div class="title">CCtv Home security</div>
							<h3>CCtv Home <br> security</h3>
						</div>
						<div class="image">
							<img src="{{ asset('assets/images/gallery/11.jpg') }}" alt="" />
						</div>
						<div class="overlay-box" style="background-image:url({{ asset('assets/images/gallery/12.jpg') }})">
							<div class="overlay-content">
								<div class="number">03</div>
								<div class="title">CCtv Home security</div>
								<h4><a href="projects-detail.html">Home Security System</a></h4>
								<a class="arrow icon-right-arrow-1" href="projects-detail.html"></a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Project Section Two -->

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

	<!-- News Section Three -->
	<section class="news-section-three">
		<div class="auto-container">

			<div class="row clearfix">

				<!-- Title Column -->
				<div class="title-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">LATEST Blog</div>
							<h2>Check Latest Blog Post</h2>
							<div class="text">Duis aute irure dolor in <br> reprehenderit in voluptate <br> velit esse cillum</div>
						</div>
						<div class="btn-box">
							<a class="btn-style-five theme-btn" href="blog.html"><span class="txt">Vew all news</span></a>
						</div>

					</div>
				</div>

				<!-- Blocks Column -->
				<div class="blocks-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="row clearfix">

							<!-- News Block -->
							<div class="news-block-three col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
									<ul class="post-info">
										<li>Technology</li>
										<li>Feb 26, 2022</li>
									</ul>
									<h4><a href="blog-detail.html">Global Technology Provider Looks to MVISION Unified Cloud Edge</a></h4>
									<a href="blog-detail.html" class="discover"><span class="arrow fa fa-angle-double-right"></span>Discover More</a>
								</div>
							</div>

							<!-- News Block -->
							<div class="news-block-three col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
									<ul class="post-info">
										<li>Technology</li>
										<li>Feb 26, 2022</li>
									</ul>
									<h4><a href="blog-detail.html">How to Empower Your Security Team Live Video Camera System Access</a></h4>
									<a href="blog-detail.html" class="discover"><span class="arrow fa fa-angle-double-right"></span>Discover More</a>
								</div>
							</div>

							<!-- News Block -->
							<div class="news-block-three col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
									<ul class="post-info">
										<li>Technology</li>
										<li>Feb 26, 2022</li>
									</ul>
									<h4><a href="blog-detail.html">Planning Security Cameras live for the Best Viewing Angle</a></h4>
									<a href="blog-detail.html" class="discover"><span class="arrow fa fa-angle-double-right"></span>Discover More</a>
								</div>
							</div>

							<!-- News Block -->
							<div class="news-block-three col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
									<ul class="post-info">
										<li>Technology</li>
										<li>Feb 26, 2022</li>
									</ul>
									<h4><a href="blog-detail.html">The Rise of CCTV Camera and How It Has Taken Over the World</a></h4>
									<a href="blog-detail.html" class="discover"><span class="arrow fa fa-angle-double-right"></span>Discover More</a>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
    @endsection