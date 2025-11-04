<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <title>Phoenix Trading Services</title>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnifying-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet preload" as="style">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="onepage">
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <!-- header trasnparent area start -->
    <header class="header-transparent header-seven header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-transparent-main-wrapper">
                        <a href="#" class="logo">
                            <img src="{{ asset('assets/images/logo/02.png') }}" alt="phoenix-services-logo">
                        </a>
                        <div class="nav-area">
                            <ul>
                                <li class="main-nav mega-menu project-a-after">
                                    <a href="#home">Home</a>
                                </li>

                                <li class="main-nav mega-menu">
                                    <a href="#about">About</a>
                                </li>
                                <li class="main-nav mega-menu">
                                    <a href="#vision">Vision</a>
                                </li>
                                <li class="main-nav mega-menu">
                                    <a href="#service">Service</a>
                                </li>
                                <li class="main-nav mega-menu">
                                    <a href="#service">Logistics Services</a>
                                </li>
                                <li class="main-nav"><a href="#contact">Contact</a></li>
                            </ul>
                        </div>

                        <div class="action-area">
                            <a href="#contact" class="rts-btn btn-primary btn-white">Get In Touch</a>
                            <button id="menu-btn" class="menu menu-btn ml--20 ml_sm--5">
                                <img class="menu-light" src="assets/images/icons/01.svg" alt="Menu-icon">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header trasnparent area end -->


    <div class="page-wrapper radious-none-button">

        @yield('content')

        <!-- footer area start -->
        <div class="rts-footer-area pt--100 pb--100 pt_sm--50 pb_sm--40  footer-two footer-bg-two">
            <div class="container">
                <div class="row">
                    <!-- single wized -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="footer-two-single-wized left">
                            <h3 class="title animated fadeIn">
                                <span>Ready To</span> <br>
                                Work With Us?
                            </h3>
                            <p class="disc">
                                Get In touch with us and let us help you with what you need.
                            </p>
                            <a class="rts-btn btn-primary" href="#">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--50">
                        <div class="footer-two-single-wized two">
                            <div class="wized-title-area">
                                <h5 class="wized-title">Our Services</h5>
                                <img src="assets/images/footer/01.png" alt="Invena_Footer">
                            </div>
                            <div class="wized-2-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fal fa-chevron-double-right">
                                            </i>Reagants
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fal fa-chevron-double-right">
                                            </i>Engineering
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fal fa-chevron-double-right">
                                            </i>Filtration
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fal fa-chevron-double-right">
                                            </i>Accessories
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fal fa-chevron-double-right">
                                            </i>Logistics
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- single wized -->
                    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--30 mt_md--30">
                        <div class="footer-two-single-wized">
                            <div class="wized-title-area">
                                <h5 class="wized-title">Contact Us</h5>
                                <img src="assets/images/footer/01.png" alt="Invena_Footer">
                            </div>
                            <div class="wized-2-body">
                                <div class="contact-info-1">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="disc">
                                        <span>Call Us 24/7</span>
                                        <a href="tel:+243910552311">+243 910 552 311</a>
                                    </div>
                                </div>
                                <div class="contact-info-1">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="disc">
                                        <span>Work with us</span>
                                        <a href="mailto:nfo@phoenixservices.trading">info@phoenixservices.trading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single wized -->
                    <!-- single wized -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="footer-two-single-wized right">
                            <div class="wized-2-body">
                                <div class="contact-info-1">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="disc">
                                        <span>Our Location</span>
                                        <a href="#">Lubumbashi, DRC</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single wized -->
                </div>
            </div>
        </div>
        <div class="rts-copy-right-1 ptb--10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-h-2-wrapper">
                            <p class="disc">
                                Phoenix Trading Services - Copyright
                                <script>
                                    document.write(
                                        new Date().getFullYear()
                                    )
                                </script>. All rights reserved.
                            </p>
                            <div class="right">
                                <ul>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>




    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="index.html"><img class="logo" src="assets/images/logo/01.svg"
                    alt="finbiz_logo"></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                    We bring you international standard quality goods and
                            services right to your door steps. We proud ourselves in
                            the quality of our services, timeless deliveries and high
                            preformance goods rended to our clients
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Get In Touch</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:+243910552311">+243 910 552 311</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:nfo@phoenixservices.trading">info@phoenixservices.trading</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="#">www.phoenixservices.trading</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">Lubumbashi, DRC</a>
                        </div>
                        <!-- single ENd -->
                    </div>

                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu d-block d-xl-none">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="main-nav mega-menu project-a-after">
                        <a class="main" href="#home">Home</a>
                    </li>

                    <li class="main-nav mega-menu">
                        <a class="main" href="#about">About</a>
                    </li>
                    <li class="main-nav project-a-after">
                        <a class="main" href="#vision">Vision</a>
                    </li>
                    <li class="main-nav mega-menu">
                        <a class="main" href="#service">Service</a>
                    </li>
                    <li class="main-nav"><a class="main" href="#contact">Contact</a></li>
                </ul>
            </nav>


        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- inner menu area desktop End -->



    <div id="anywhere-home" class="">
    </div>
    <!-- rtl btn area start -->

    <!-- rtl btn area end -->

    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- progress area end -->

    <script src="{{ asset('assets/js/plugins/jquery.js') }}"></script>



    <script src="{{ asset('assets/js/plugins/odometer.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-appear.js') }}"></script>


    <script src="{{ asset('assets/js/plugins/gsap.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/split-text.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scroll-trigger.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/metismenu.js') }}"></script>

    <script src="https://html.themewant.com/golfy/assets/js/plugins/magnific-popup.js"></script>

    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
