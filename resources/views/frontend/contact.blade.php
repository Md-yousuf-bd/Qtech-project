@extends('layouts.forntend-layouts')
@section('page')

		<!-- In Touch -->
		<section class="intouch-section">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title">Contact Us</div>
							<h2>Get in Touch</h2>
							<ul class="info">
								<li>
									<strong>Address</strong>
									9 Yeoman Court, Ashford Road, <br> Bearsted, Maidstone, Kent, ME14 4ND
								</li>
								<li>
									<strong>Opening hours:</strong>
									Monday to Friday 9am-5pm
								</li>
							</ul>
						</div>
					</div>
					<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<img src="{{ asset('assets/images/contact/contact.png') }}" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End In Touch -->

		<!-- Contact Form Section -->
		<section class="contact-form-section" style="background-image: url({{asset('assets/images/contact/map.png') }})">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Form Column -->
					<div class="form-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							<h2>Lets Create Something <br> Great Together!</h2>
							<!-- Contact Form -->
							<div class="contact-form">
								<!-- Contact Form -->
								<form method="post" action="sendemail.php" id="contact-form">
									<div class="row clearfix">

										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<input type="text" name="username" placeholder="Full Name">
										</div>

										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<input type="text" name="lastname" placeholder="Last Name">
										</div>

										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<input type="email" name="email" placeholder="Your Email">
										</div>

										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<textarea name="message" placeholder="Type your message"></textarea>
										</div>

										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="theme-btn btn-style-four"><i
													class="shape-one"></i><i class="shape-two"></i><span
													class="txt">SEND</span></button>
										</div>

									</div>
								</form>
								<!-- End Contact Form -->
							</div>
						</div>
					</div>

					<!-- Info Column -->
					<div class="info-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column">
							<ul class="contact-list">
								<li><a href="mailto:atozemail@gmail.com">atozemail@gmail.com</a></li>
								<li><a href="tel:+88-01682648101">+88 01682648101</a></li>
							</ul>
							<div class="text">Client work with us</div>
							<h3>Over <span>3,000+</span> Client all over the world.</h3>
							<div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<img src="assets/images/contact/contact-1.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Form Section -->

		<!-- Faq Contact Section -->
		<section class="faq-contact-section">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Accordion Column -->
					<div class="accordion-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h2>Important Questions <br> You Should Ask</h2>

							<!-- Accordian Box -->
							<ul class="accordion-box">

								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn active">
										<div class="icon-outer"><span class="icon-plus fa fa-plus"></span> <span
												class="icon-minus fa fa-minus"></span></div>Can you explain the range of
										a CCTV camera?
									</div>
									<div class="acc-content current">
										<div class="content">
											<div class="text">Our Security is a leading security systems company based
												in New York City. We specialize in planning and design, installation,
												repair and maintenance of full range security systems for business &
												commercial properties,</div>
										</div>
									</div>
								</li>

								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><span class="icon-plus fa fa-plus"></span> <span
												class="icon-minus fa fa-minus"></span></div>We may ask you to optionally
										provide demographic?
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Our Security is a leading security systems company based
												in New York City. We specialize in planning and design, installation,
												repair and maintenance of full range security systems for business &
												commercial properties,</div>
										</div>
									</div>
								</li>

								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><span class="icon-plus fa fa-plus"></span> <span
												class="icon-minus fa fa-minus"></span></div>Can you explain how Infrared
										day-night cameras work?
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Our Security is a leading security systems company based
												in New York City. We specialize in planning and design, installation,
												repair and maintenance of full range security systems for business &
												commercial properties,</div>
										</div>
									</div>
								</li>

							</ul>

						</div>
					</div>

					<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<img src="{{ asset('assets/images/contact/contact-2.png') }}" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Faq Contact Section -->
@endsection