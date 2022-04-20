<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Qtec Security HTML-5 Template | Homepage 01</title>

<!-- Stylesheets -->
<link href="{{asset('assets/vendors/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ asset('assets/vendors/fontawesome/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/flaticons/flaticon.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/animate/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/owl-slider/css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/icomoon-fonts/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/jquery-ui/css/jquery-ui.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/animate/css/custom-animate.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/fancybox/css/jquery.fancybox.min.css') }}" rel="stylesheet">

<!-- Kumbh Sans Font -->
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Domine Font -->
<link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Lato Font -->
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

<!-- Favicons Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}" />
<link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<link href="assets/css/qtec.css" rel="stylesheet">
<link href="assets/css/qtec-responsive.css" rel="stylesheet">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>
    {{-- this is header  --}}
    @include('layouts.forntend.partial.header')

     @yield('page')

     {{-- this is footer  --}}
    @include('layouts.forntend.partial.footer')

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="{{ asset('assets/vendors/jquery/jquery-v3.6.0.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/vendors/fancybox/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-appear/appear.js') }}"></script>
<script src="{{ asset('assets/vendors/animate/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets/vendors/animate/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendors/animate/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-slider/js/owl.js') }}"></script>
<script src="{{ asset('assets/vendors/wow/js/wow.js') }}"></script>
<script src="{{ asset('assets/vendors/validate/js/validate.js') }}"></script>
<script src="{{ asset('assets/vendors/nav-tools/js/nav-tool.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ui/js/jquery-ui.js') }}"></script>

<!-- Template Js -->
<script src="{{ asset('assets/js/qtec-script.js') }}"></script>

</body>
</html>