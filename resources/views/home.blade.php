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
            <a href="mailto:info@phoeniservices.trading">info@phoeniservices.trading</a>
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
                            <img src="assets/images/about/12.jpg" alt="about">
                        </div>
                        <div class="single-thumbnail mt--40">
                            <img src="assets/images/about/13.jpg" alt="about">
                        </div>
                        <div class="progress-circle-main-wrapper">

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pl--30 mt_md--100 mt_sm--100">
                    <div class="about-6-inner-content-content">
                        <div class="title-style-one left mb--30">
                            <span class="pre">About Us</span>
                            <h2 class="title rts-text-anime-style-1">Discover more <br>
                                about us.

                            </h2>
                        </div>
                        <p class="disc">
                            Phoenix Extraction Services is your DR. Congo based company
                            that brings you international standard quality goods and
                            services right to your door steps. We proud ourselves in
                            the quality of our services, timeless deliveries and high
                            preformance goods rended to our clients.
                        </p>
                        <div class="call-and-sign-area">
                            <div class="call-area">
                                <div class="icon">
                                    <i class="fa-sharp fa-regular fa-phone-volume"></i>
                                </div>
                                <div class="information">
                                    <span>Call us anytime</span>
                                    <a href="tel:+243910552311">
                                        <h6 class="title">+243 910 552 311</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about us area end -->

    <!-- rts-vision area start -->
    <div class="rts-about-area rts-section-gap" id="vision">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-content-left-one">
                        <div class="title-style-one left">
                            <h2 class="title rts-text-anime-style-1">Our vision <br>
                            </h2>
                        </div>
                        <p class="disc">
                            To provide our clients, with solutions, products and services
                            of the top mining requirements and in the safety guide lines.
                            We supply engineering items, mechanical parts, filtration
                            components and extraction and energy reagents.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 pl--70">
                    <div class="thumbnail-about-and-progress-1">

                        <div class="thumbnail-about-1">
                            <img src="assets/images/about/01.jpg" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-about area end -->
    <!-- rts latest service area start -->
    <div class="rts-latest-service-area rts-section-gap" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one center">
                        <span class="pre">Our Services</span>
                        <h2 class="title rts-text-anime-style-1">Service We Provide
                        </h2>
                    </div>
                </div>
                <div class="col-lg-12 mt--50">
                    <section class="main-wrapper-sticky">
                        <div id="service01" class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/01.svg" alt="service">
                                </div>
                                <h5 class="title">Reagants</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    Sulphur - Diesel - HFO - Heavy Fuel Oil - Mining Solvent / Diluent -
                                    Guar Gum - Caustic Soda Flakes - Caustic Soda Pearls - Sodium
                                    Carbonate - Soda Ash - SMBS Sodium Metabisulfite.
                                </p>
                            </div>
                        </div>
                        <div id="service02" class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/02.svg" alt="service">
                                </div>
                                <h5 class="title">Engineering</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    Slurry Pumps - Acid Resistant Pumps - Rubber Lined Pumps -
                                    Pressure Valve - Vaccum Valves - Flanges - Submercible Pumps.
                                </p>
                            </div>
                        </div>
                        <div id="service03" class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/03.svg" alt="service">
                                </div>
                                <h5 class="title">Filtration</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    Filter Cloths - Filter Bags - Filter Press - Belt Filters.
                                </p>
                            </div>
                        </div>
                        <div id="service04" class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/01.svg" alt="service">
                                </div>
                                <h5 class="title">Accessories</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    Steel Beams - Steel Sheets - Steel Plates - Seamless Pipes -
                                    Elbows - Bolts and Nuts - Pulleys - V-Belts - Conveyor Belts -
                                    Grinding Medium: Steel Balls, forged, High Chrome and Steel Rods
                                </p>
                            </div>
                        </div>
                        <div id="service05" class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/01.svg" alt="service">
                                </div>
                                <h5 class="title">Logistics</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    Navigating the complexities of global and local transport can be challenging. Our
                                    comprehensive logistics services are designed to simplify your operations, reduce costs,
                                    and ensure your goods move efficiently and reliably from origin to destination.
                                </p>
                                <a class="rts-btn btn-primary btn-white" href="{{ route('services.logistics') }}">Read
                                    More</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- rts latest service area end -->
    <!-- rts call to action area start -->
    <div class="rts-call-to-action-area-two bg_image mb--100">
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
                                    <a href="#contact" class="rts-btn btn-primary btn-white">Lets Work
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


    <!-- contact  area start -->
    <div class="appoinment-area-seven bg_image ptb--100" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="appoinment-main-wrapper-7">
                        <form action="#">
                            <span>Contact</span>
                            <h4 class="title">Get In Touch With Us</h4>
                            <div class="input-half-wrapper">
                                <div class="signle-input">
                                    <input type="text" placeholder="Your Name">
                                </div>
                                <div class="signle-input">
                                    <input type="text" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="signle-input">
                                <input type="email" placeholder="Your Email">
                            </div>
                            <div class="signle-input">
                                <textarea placeholder="Type Your Message"></textarea>
                            </div>
                            <button class="btn-primary rts-btn ">Submit Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- appoinment  area end -->
@endsection
