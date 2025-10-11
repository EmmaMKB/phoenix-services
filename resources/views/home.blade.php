@extends('layouts.master')

@section('content')
    <div class="banner-seven-swiper-wrapper" id="home">

        <!-- index seven area start -->
        <div class="index-seven-area rts-section-gap with-video bg_banner-seven two bg_image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-seven-inner-content">
                            <span class="pre-title">
                                <img src="assets/images/banner/icon/01.svg" alt="banner">
                                Business Success Starts Here
                            </span>
                            <h5 class="title">Your one stop <br>
                                <span>Mining Solutions</span>
                            </h5>
                            <p class="disc">
                                Maecenas quis integer aenean nisl, viverra morbi magna amet, viverra.
                                Sollicitudin
                                posuere
                                scelerisque urna, urna. At vestibulum fringilla.
                            </p>
                            <a href="#service" class="rts-btn btn-primary btn-white">Discover our
                                Services</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-bg-video">
                <video autoplay="" muted="" loop="" id="myVideo">
                    <source src="assets/images/banner/01.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <!-- index seven area end -->

        <div class="email-area-left">
            <i class="fa-regular fa-envelope"></i>
            <a href="#">info@phoeniservices.trading</a>
        </div>

        {{-- <div class="language-area">
            <span>en.</span>
            <span>fr.</span>
            <span>ge.</span>
        </div> --}}

        <a href="#" class="to-bottom-area">
            <i class="fa-light fa-arrow-up"></i>
            Scroll
        </a>
    </div>

     <!-- rts about us area start -->
        <div class="rts-about-area-6 rts-section-gap" id="about">
            <div class="container pb--40">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7">
                        <div class="about-6-thumbnail-left-wrapper">
                            <div class="single-thumbnail">
                                <img src="assets/images/about/12.webp" alt="about">
                            </div>
                            <div class="single-thumbnail mt--40">
                                <img src="assets/images/about/13.webp" alt="about">
                            </div>
                            <div class="progress-circle-main-wrapper">
                                <div class="progress-area-wrapper images-r">
                                    <div class="single-progress-circle">
                                        <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                            <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                            <circle class="bar--animated" cx="40" cy="40" r="35"
                                                style="stroke-dashoffset: 217.8;"></circle>
                                            <text class="countervalue start" x="50%" y="55%"
                                                transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                        </svg>
                                    </div>
                                    <h5 class="title">Business Progress</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 pl--30 mt_md--100 mt_sm--100">
                        <div class="about-6-inner-content-content">
                            <div class="title-style-one left mb--30">
                                <span class="pre">About Business</span>
                                <h2 class="title rts-text-anime-style-1">Smart and effective <br>
                                    business agency.

                                </h2>
                            </div>
                            <p class="disc">
                                we believe in the power of collaboration and personalized solutions. By understanding
                                our clients' unique needs and goals, we tailor our approach to deliver strategic
                                insights, creative solutions.
                            </p>
                            <div class="call-and-sign-area">
                                <div class="call-area">
                                    <div class="icon">
                                        <i class="fa-sharp fa-regular fa-phone-volume"></i>
                                    </div>
                                    <div class="information">
                                        <span>Call us anytime</span>
                                        <a href="#">
                                            <h6 class="title">+256 56778.5678</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="sign-area">
                                    <img src="assets/images/about/sign.svg" alt="">
                                </div>
                            </div>
                            <a href="about.html" class="rts-btn btn-primary">About Us</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts about us area end -->

        <!-- rts call to action area start -->
        <div class="rts-call-to-action-area-two bg_image">
            <div class="container-full">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cta-style-two-area">
                                        <h3 class="title rts-text-anime-style-1">
                                            Let’s discuss about how we can help <br>
                                            make your business better
                                        </h3>
                                        <a href="contact.html" class="rts-btn btn-primary btn-white">Lets Work
                                            Together</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts call to action area end -->

        <!-- rts latest service area start -->
        <div class="rts-latest-service-area rts-section-gap" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-style-one center">
                            <span class="pre">Our Latest Services</span>
                            <h2 class="title rts-text-anime-style-1">Service We Provide
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-12 mt--50">
                        <section class="main-wrapper-sticky">
                            <div class="sticky-statement">
                                <div class="left-side">
                                    <div class="icon">
                                        <img src="assets/images/service/01.svg" alt="service">
                                    </div>
                                    <h5 class="title">Business Solution</h5>
                                </div>
                                <div class="right">
                                    <p class="disc">
                                        comprehensive set of strategies, tools, technologies, and processes challenges,
                                        optimize operations, and drive business growth.
                                    </p>
                                    <a href="service-details.html" class="arrow">
                                        <i class="fa-regular fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="sticky-statement">
                                <div class="left-side">
                                    <div class="icon">
                                        <img src="assets/images/service/02.svg" alt="service">
                                    </div>
                                    <h5 class="title">Creative Ideas</h5>
                                </div>
                                <div class="right">
                                    <p class="disc">
                                        comprehensive set of strategies, tools, technologies, and processes challenges,
                                        optimize operations, and drive business growth.
                                    </p>
                                    <a href="service-details.html" class="arrow">
                                        <i class="fa-regular fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="sticky-statement">
                                <div class="left-side">
                                    <div class="icon">
                                        <img src="assets/images/service/03.svg" alt="service">
                                    </div>
                                    <h5 class="title">Market Research</h5>
                                </div>
                                <div class="right">
                                    <p class="disc">
                                        comprehensive set of strategies, tools, technologies, and processes challenges,
                                        optimize operations, and drive business growth.
                                    </p>
                                    <a href="service-details.html" class="arrow">
                                        <i class="fa-regular fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="sticky-statement">
                                <div class="left-side">
                                    <div class="icon">
                                        <img src="assets/images/service/01.svg" alt="service">
                                    </div>
                                    <h5 class="title">Technology Solution</h5>
                                </div>
                                <div class="right">
                                    <p class="disc">
                                        comprehensive set of strategies, tools, technologies, and processes challenges,
                                        optimize operations, and drive business growth.
                                    </p>
                                    <a href="service-details.html" class="arrow">
                                        <i class="fa-regular fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts latest service area end -->
@endsection
