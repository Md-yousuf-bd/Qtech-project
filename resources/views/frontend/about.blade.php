@extends('layouts.forntend-layouts')
@section('page')
	<!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset('assets/images/background/5.jpg') }})">
		<div class="icon-layer-one" style="background-image: url({{asset('assets/images/shapes/shape-28.png') }})"></div>
		<div class="icon-layer-two" style="background-image: url({{asset('assets/images/shapes/shape-29.png') }})"></div>
		<div class="icon-layer-three" style="background-image: url({{asset('assets/images/shapes/shape-28.png') }})"></div>
		<div class="icon-layer-four" style="background-image: url({{asset('assets/images/shapes/shape-30.png') }})"></div>
        <div class="auto-container">
			<h1>About us</h1>
			<div class="text">We build trusted, lifelong customer relationships by creating innovative, <br> smart security solutions</div>
        </div>
    </section>
    <!--End Page Title-->

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

	<!-- Video Section -->
	<section class="video-section">
		<div class="auto-container">
			<!-- Video Box -->
			<div class="video-box">
				<figure class="video-image">
					<img class="transition-500ms" src="assets/images/resource/video-image.jpg" alt="">
				</figure>
				<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="icon-play-1"><i class="ripple"></i></span></a>
			</div>
		</div>
	</section>
	<!-- End Video Section -->

	<!-- Featured Section / Style Two -->
	<section class="featured-section style-two">
		<div class="auto-container">
			<div class="inner-container">
				<!-- Title Box -->
				<div class="title-box">
					<h2>Our Mission</h2>
					<div class="text">Vicon is a global leader in advanced security and surveillance technology to safeguard businesses, schools, municipalities, hospitals and cities across the world.</div>
				</div>
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

	<!-- Team Section -->
	<section class="team-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Our experienced experts</h2>
				<div class="text">Lorem Ipsum is simpuly free text available in the market of text nibh <br> vel velit auctor aliquet. Aenean sollic tudin</div>
			</div>
			<div class="row clearfix">

				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ asset('assets/images/team/team-1.jpg') }}" alt="" />
							<div class="content">
								<h4><a href="team.html">Mahfuz Riad</a></h4>
								<div class="designation">Strategy Security Expert</div>
								<!-- Social Box -->
								<ul class="social-box">
									<li class="facebook"><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
									<li class="instagram"> <a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ asset('assets/images/team/team-2.jpg') }}" alt="" />
							<div class="content">
								<h4><a href="team.html">Mahfuz Riad</a></h4>
								<div class="designation">Strategy Security Expert</div>
								<!-- Social Box -->
								<ul class="social-box">
									<li class="facebook"><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
									<li class="instagram"> <a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ asset('assets/images/team/team-3.jpg') }}" alt="" />
							<div class="content">
								<h4><a href="team.html">Mahfuz Riad</a></h4>
								<div class="designation">Strategy Security Expert</div>
								<!-- Social Box -->
								<ul class="social-box">
									<li class="facebook"><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
									<li class="instagram"> <a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="450ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="assets/images/team/team-4.jpg" alt="" />
							<div class="content">
								<h4><a href="team.html">Mahfuz Riad</a></h4>
								<div class="designation">Strategy Security Expert</div>
								<!-- Social Box -->
								<ul class="social-box">
									<li class="facebook"><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
									<li class="instagram"> <a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Team Section -->

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

	<!-- Skill Section -->
	<section class="skill-section style-three">
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
@endsection