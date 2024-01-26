<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
            <link rel="stylesheet" href="{{ asset('css/price_rangs.css') }}">
            <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
            <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
            <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
            <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            @yield('custom-styles')
   </head>
   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('img/logo/logo.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    @include('layouts.header')

    @yield('content')
    @include('layouts.footer')


    @yield('custom-scripts')
		<!-- All JS Custom Plugins Link Here here -->
        <script src=" {{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src=" {{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src=" {{ asset('js/popper.min.js') }}"></script>
        <script src=" {{ asset('js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src=" {{ asset('js/jquery.slicknav.min.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src=" {{ asset('js/owl.carousel.min.js') }}"></script>
        <script src=" {{ asset('js/slick.min.js') }}"></script>
        <script src=" {{ asset('js/price_rangs.js') }}"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src=" {{ asset('js/wow.min.js') }}"></script>
		<script src=" {{ asset('js/animated.headline.js') }}"></script>
        <script src=" {{ asset('js/jquery.magnific-popup.js') }}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src=" {{ asset('js/jquery.scrollUp.min.js') }}"></script>
        <script src=" {{ asset('js/jquery.nice-select.min.js') }}"></script>
		<script src=" {{ asset('js/jquery.sticky.js') }}"></script>
        
        <!-- contact js -->
        <script src=" {{ asset('js/contact.js') }}"></script>
        <script src=" {{ asset('js/jquery.form.js') }}"></script>
        <script src=" {{ asset('js/jquery.validate.min.js') }}"></script>
        <script src=" {{ asset('js/mail-script.js') }}"></script>
        <script src=" {{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src=" {{ asset('js/plugins.js') }}"></script>
        <script src=" {{ asset('js/main.js') }}"></script>
    </body>
</html>