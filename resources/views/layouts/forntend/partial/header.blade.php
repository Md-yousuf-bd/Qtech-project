
<header class="main-header">

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="inner-container d-flex justify-content-between align-items-center">

                <!-- Logo Box -->
                <div class="logo-box">
                    <div class="logo"><a href="index.html"><img src="{{ asset('assets/images/resource/logo.png') }}" alt="" title=""></a></div>
                </div>

                <!-- Nav Outer -->
                <div class="nav-outer clearfix">
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon fas fa-bars"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="/index">HomePage 01</a></li>
                                        <li><a href="index-2">HomePage 02</a></li>
                                        <li><a href="index-3">HomePage 03</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="/inde">Header Style One</a></li>
                                                <li><a href="index-2.html">Header Style Two</a></li>
                                                <li><a href="index-3.html">Header Style Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="/about">About us</a></li>
                                        <li><a href="/team">Team</a></li>
                                        <li><a href="/price">Price</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="/services">Services</a></li>
                                        <li><a href="/cctvSecurity">Home cctv Security</a></li>
                                        <li><a href="/executiveProtection">Executive Protection</a></li>
                                        <li><a href="/cyberSecurity">Cyber Security</a></li>
                                        <li><a href="/privateSecurity">Private Security</a></li>
                                        <li><a href="/camera">Wifi Camera Security</a></li>
                                        <li><a href="/cloudSecurity">Cloud Security</a></li>
                                        <li><a href="/networkSecurity">Network Security</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Projects</a>
                                    <ul>
                                        <li><a href="projects1">Projects 01</a></li>
                                        <li><a href="projects2">Projects 02</a></li>
                                        <li><a href="projects3">Projects Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog">Our Blog</a></li>
                                        <li><a href="blogClassic">Blog Classic</a></li>
                                        <li><a href="blogDetail">Blog Detail</a></li>
                                        <li><a href="notFound">Not Found</a></li>
                                    </ul>
                                </li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>

                    </nav>
                </div>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">

                    <!-- Social Box -->
                    <ul class="social-box">
                        <li><a href="{{ asset('https://www.instagram.com/') }}" class="fa fa-instagram"></a></li>
                        <li><a href="{{ asset('https://www.instagram.com/') }}" class="fa fa-facebook-f"></a></li>
                        <li><a href="{{ asset('https://www.twitter.com/') }}" class="fa fa-twitter"></a></li>
                        <li><a href="{{ asset('https://www.twitter.com/') }}" class="fa fa-pinterest-p"></a></li>
                    </ul>

                    <!-- Phone Box -->
                    <div class="phone-box">
                        <div class="box-inner">
                            <span class="icon icon-phone-1"></span>
                            Call now<br>
                            <a href="tel:+123-456-7896">123-456-7896</a>
                        </div>
                    </div>
                    <!-- End Phone Box -->

                </div>

            </div>
        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" title=""><img src="{{ asset('assets/images/resource/logo-small.png') }}" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">

                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
                <!-- Main Menu End-->

                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span class="icon fas fa-bars"></span></div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fas fa-times"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/images/resource/logo-2.png') }}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>

            <!-- Contact List -->
            <ul class="contact-list">
                <li><span class="icon fa fa-envelope"></span><a href="{{ asset('mailto:qtecemail@gmail.com') }}">qtecemail@gmail.com</a></li>
                <li><span class="icon fa fa-phone"></span><a href="tel:+88-01682648101">+88 01682648101</a></li>
            </ul>

            <!-- Social Box -->
            <ul class="social-box">
                <li><a href="{{ asset('https://www.instagram.com/') }}" class="fa fa-instagram"></a></li>
                <li><a href="{{ asset('https://www.facebook.com/') }}" class="fa fa-facebook-f"></a></li>
                <li><a href="{{ asset('https://www.twitter.com/') }}" class="fa fa-twitter"></a></li>
                <li><a href="{{ asset('https://www.pinterest.com/') }}" class="fa fa-pinterest-p"></a></li>
            </ul>

        </nav>

    </div>
    <!-- End Mobile Menu -->

</header>
