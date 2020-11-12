@extends('layouts.app')
@section('content')
    <!-- End Header Style -->
    <!-- Start Slider Area -->
    <div class="htc__slider__area">
        <div class="htc__sliders htc__sliders_activation  htc__sliders__navstyle--one">
            <!-- Start slide -->
            <div class="htc__slider slider-bg-1 htc__slider__animation--center text-center" data-black-overlay="6">
                <div class="slider__container" >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slider__wrap">
                                    <div class="slider__inner">
                                        <h1 class="text-theme wow">Change the world & increase opportunity</h1>
                                        <p class="wow">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                                        <div class="slider__btn wow">
                                            <div class="link-video">
                                                <a class="" href="about.blade.php">View US</a>
                                                <a class="video-icon video-popup" href="https://www.youtube.com/watch?v=rXcp6s0VjZk"><i class="zmdi zmdi-play-circle-outline"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End slide -->
        </div>
    </div>
    <!-- End Slider Area -->
    <!-- Start Our Service Area -->
    <section class="htc__service ptb-90 bg-white">
        <div class="container">
            <!-- Start Section Title -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title-line">Goverment Services</h2>
                        <p class="title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
            <!-- End Section Title -->
            <!-- Start Service Area -->
            <div class="row">
                <div class="service__container clearfix mt-50 sm-mt-20 xs-mt-20">
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="service text-center">
                            <div class="service__icon">
                                <i class="zmdi zmdi-city-alt"></i>
                            </div>
                            <div class="service__details">
                                <h4><a href="#">Ministry</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="service text-center">
                            <div class="service__icon">
                                <i class="zmdi zmdi-home"></i>
                            </div>
                            <div class="service__details">
                                <h4><a href="#">Housing</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="service text-center">
                            <div class="service__icon">
                                <i class="zmdi zmdi-book-image"></i>
                            </div>
                            <div class="service__details">
                                <h4><a href="#">Education</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="service text-center">
                            <div class="service__icon">
                                <i class="zmdi zmdi-money"></i>
                            </div>
                            <div class="service__details">
                                <h4><a href="#">Economy</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
            <!-- End Service Area -->
        </div>
    </section>
    <!-- End Our Service Area -->
    <!-- Start About Area -->
    <section class="htc__about bg-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="about">
                        <div class="about__inner">
                            <h2>About The Government</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="about__btn">
                                <a class="rp-btn" href="about.blade.php">Join us</a>
                                <a class="play-video video-popup" href="https://www.youtube.com/watch?v=rXcp6s0VjZk"><i class="zmdi zmdi-play-circle-outline"></i><span>Play more video about us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="about__thumb xs-mt-30">
                        <img src="{{asset('theme/republic/images/about/1.png')}}" alt="about images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->
    <!-- Start Running Project Area -->
    <section class="running__project ptb-90 bg-white">
        <div class="container">
            <!-- Start Section Title -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title-line">Our Running Project</h2>
                        <p class="title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
            <!-- End Section Title -->
            <!-- Start Project -->
            <div class="row">
                <div class="running__project__wrap clearfix mt-50 xs-mt-20">
                    <!-- Start Single Project Area -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="project">
                            <div class="project__inner">
                                <div class="htc__hover__fornt">
                                    <img src="{{asset('theme/republic/images/running/1.jpg')}}" alt="project images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="#"><i class="zmdi zmdi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="project__details">
                                <h4><a href="#">Provide extra support for senior citizen.</a></h4>
                                <ul class="time__like__list">
                                    <li><i class="zmdi zmdi-time"></i><span>13 feb 2017</span></li>
                                    <li><i class="zmdi zmdi-favorite-outline"></i><span>20,000 People Like</span></li>
                                </ul>
                                <div class="project__post">
                                    <div class="project__post__thumb">
                                        <img src="{{asset('theme/republic/images/running/sm-img/1.png')}}" alt="post iamges">
                                    </div>
                                    <div class="project__post__title">
                                        <h4><a href="#">Momen Bhuiyan</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Project Area -->
                    <!-- Start Single Project Area -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="project">
                            <div class="project__inner">
                                <div class="htc__hover__fornt">
                                    <img src="{{asset('theme/republic/images/running/2.jpg')}}" alt="project images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="#"><i class="zmdi zmdi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="project__details">
                                <h4><a href="#">Provide extra support for senior citizen.</a></h4>
                                <ul class="time__like__list">
                                    <li><i class="zmdi zmdi-time"></i><span>13 feb 2017</span></li>
                                    <li><i class="zmdi zmdi-favorite-outline"></i><span>20,000 People Like</span></li>
                                </ul>
                                <div class="project__post">
                                    <div class="project__post__thumb">
                                        <img src="{{asset('theme/republic/images/running/sm-img/2.png')}}" alt="post iamges">
                                    </div>
                                    <div class="project__post__title">
                                        <h4><a href="#">Momen Bhuiyan</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Project Area -->
                    <!-- Start Single Project Area -->
                    <div class="col-md-4 col-lg-4 hidden-sm col-xs-12">
                        <div class="project">
                            <div class="project__inner">
                                <div class="htc__hover__fornt">
                                    <img src="{{asset('theme/republic/images/running/3.jpg')}}" alt="project images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="#"><i class="zmdi zmdi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="project__details">
                                <h4><a href="#">Provide extra support for senior citizen.</a></h4>
                                <ul class="time__like__list">
                                    <li><i class="zmdi zmdi-time"></i><span>13 feb 2017</span></li>
                                    <li><i class="zmdi zmdi-favorite-outline"></i><span>20,000 People Like</span></li>
                                </ul>
                                <div class="project__post">
                                    <div class="project__post__thumb">
                                        <img src="{{asset('theme/republic/images/running/sm-img/3.png')}}" alt="post iamges">
                                    </div>
                                    <div class="project__post__title">
                                        <h4><a href="#">Momen Bhuiyan</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Project Area -->
                </div>
            </div>
            <!-- End Project -->
        </div>
    </section>
    <!-- End Running Project Area -->
    <!-- Start story area -->
    <section class="our__story bg-5 xs-ptb-100" data-black-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="story">
                        <h4 class="text-theme">Know about us.. </h4>
                        <h2>This is our story.</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="story__btn">
                            <a class="rp-btn btn--transparent" href="about.blade.php">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="our-vedio-img xs-mt-30" data-white-overlay="4">
                        <img src="{{asset('theme/republic/images/bg/7.jpg')}}" alt="vidio images">
                        <div class="video-hover">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=rXcp6s0VjZk">
                                <i class="zmdi zmdi-play-circle-outline"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End story area -->
    <!-- Start Counter up Area -->
    <section class="htc__counterup__area pt-90">
        <div class="container">
            <div class="counterup__container bg-9">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="counterup__inner">
                            <h2>Our Work in a number ratio</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="funfact-area">
                            <div class="single-fact">
                                <div class="single-fact-flex">
                                    <div class="funfact-count-inner">
                                        <div class="fact-count">
                                            <span class="count">30</span>
                                        </div>
                                    </div>
                                    <div class="fact-title">
                                        <h2>Police Station</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="single-fact active">
                                <div class="single-fact-flex">
                                    <div class="funfact-count-inner">
                                        <div class="fact-count">
                                            <span class="count">200</span>
                                        </div>
                                    </div>
                                    <div class="fact-title">
                                        <h2>Security Zone</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="single-fact">
                                <div class="single-fact-flex">
                                    <div class="funfact-count-inner">
                                        <div class="fact-count">
                                            <span class="count">210</span>
                                        </div>
                                    </div>
                                    <div class="fact-title">
                                        <h2>Support Center</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="single-fact">
                                <div class="single-fact-flex">
                                    <div class="funfact-count-inner">
                                        <div class="fact-count">
                                            <span class="count">555</span>
                                        </div>
                                    </div>
                                    <div class="fact-title">
                                        <h2>Call Center</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Counter up Area -->
    <!-- Start Portfolio Area -->
    <section class="htc__portfolio pt-90 bg-white">
        <div class="container">
            <!-- Start Section Title -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title-line">Our Gallery</h2>
                        <p class="title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
            <!-- End Section Title -->
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="portfolio__wrap clearfix mt-20">
                    <!-- Start Single portfolio Area -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="{{asset('theme/republic/images/portfolio/width-variation/1.jpg')}}" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a class="image-popup" href="{{asset('theme/republic/images/portfolio/width-variation/1.jpg')}}"><i class="zmdi zmdi-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single portfolio Area -->
                    <!-- Start Single portfolio Area -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="{{asset('theme/republic/images/portfolio/width-variation/2.jpg')}}" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a class="image-popup" href="{{asset('theme/republic/images/portfolio/width-variation/2.jpg')}}"><i class="zmdi zmdi-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single portfolio Area -->
                    <!-- Start Single portfolio Area -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="{{asset('theme/republic/images/portfolio/width-variation/3.jpg')}}" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a class="image-popup" href="{{asset('theme/republic/images/portfolio/width-variation/3.jpg')}}"><i class="zmdi zmdi-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single portfolio Area -->
                    <!-- Start Single portfolio Area -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="{{asset('theme/republic/images/portfolio/width-variation/4.jpg')}}" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a class="image-popup" href="{{asset('theme/republic/images/portfolio/width-variation/4.jpg')}}"><i class="zmdi zmdi-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single portfolio Area -->
                    <!-- Start Single portfolio Area -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="{{asset('theme/republic/images/portfolio/width-variation/5.jpg')}}" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a class="image-popup" href="{{asset('theme/republic/images/portfolio/width-variation/5.jpg')}}"><i class="zmdi zmdi-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single portfolio Area -->
                    <!-- Start Single portfolio Area -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="{{asset('theme/republic/images/portfolio/width-variation/6.jpg')}}" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a class="image-popup" href="{{asset('theme/republic/images/portfolio/width-variation/6.jpg')}}"><i class="zmdi zmdi-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single portfolio Area -->
                    <!-- Start Single portfolio Area -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="{{asset('theme/republic/images/portfolio/width-variation/7.jpg')}}" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a class="image-popup" href="{{asset('theme/republic/images/portfolio/width-variation/7.jpg')}}"><i class="zmdi zmdi-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single portfolio Area -->
                    <!-- Start Single portfolio Area -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="{{asset('theme/republic/images/portfolio/width-variation/8.jpg')}}" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a class="image-popup" href="{{asset('theme/republic/images/portfolio/width-variation/8.jpg')}}"><i class="zmdi zmdi-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single portfolio Area -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Area -->
    <!-- Start recent Event Area -->
    <section class="recent__event__area ptb-90 bg-white">
        <div class="container">
            <!-- Start Section Title -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title-line">Our Recent Events</h2>
                        <p class="title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
            <!-- End Section Title -->
            <div class="row">
                <div class="recent__event__container clearfix mt-50">
                    <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                        <div class="recent__enent__wrap">
                            <!-- Start Single Post -->
                            <div class="recent__event">
                                <div class="event__time">
                                    <span>13 feb</span>
                                    <span class="event--year">2017</span>
                                </div>
                                <div class="event__information">
                                    <h4><a href="#">Development project for student & employee</a></h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                                    <div class="event__post__btn">
                                        <p><i class="zmdi zmdi-pin"></i>Hall No. 02</p>
                                        <a href="#">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Post -->
                            <!-- Start Single Post -->
                            <div class="recent__event">
                                <div class="event__time">
                                    <span>13 feb</span>
                                    <span class="event--year">2017</span>
                                </div>
                                <div class="event__information">
                                    <h4><a href="#">Development project for student & employee</a></h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                                    <div class="event__post__btn">
                                        <p><i class="zmdi zmdi-pin"></i>Hall No. 02</p>
                                        <a href="#">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Post -->
                            <!-- Start Single Post -->
                            <div class="recent__event">
                                <div class="event__time">
                                    <span>13 feb</span>
                                    <span class="event--year">2017</span>
                                </div>
                                <div class="event__information">
                                    <h4><a href="#">Development project for student & employee</a></h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                                    <div class="event__post__btn">
                                        <p><i class="zmdi zmdi-pin"></i>Hall No. 02</p>
                                        <a href="#">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Post -->
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                        <div class="recent__event__thumb md-mt-30 sm-mt-30 xs-mt-30">
                            <img src="{{asset('theme/republic/images/others/1.jpg')}}" alt="post images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End recent Event Area -->
    <!-- Start Images Area -->
    <div class="banner__area bg-8 pt-40">
        <div class="banner__container">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12">
                        <div class="app-text">
                            <h3>Government App !</h3>
                            <h2>Download This app to get extra Support</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <div class="download-links">
                                <a class="active" href="#">
                                    <i class="zmdi zmdi-apple"></i>
                                    <div class="text fix">
                                        <h4>App Store</h4>
                                    </div>
                                </a>
                                <a href="#">
                                    <i class="zmdi zmdi-google-play"></i>
                                    <div class="text fix">
                                        <h4>Play Store</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-12 text-center">
                        <div class="app-img">
                            <img src="{{asset('theme/republic/images/others/2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Images Area -->
    <!-- Start Blog Area -->
    <section class="blog__area ptb-90 bg-white">
        <div class="container">
            <!-- Start Section Title -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title-line">Recent News</h2>
                        <p class="title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
            <!-- End Section Title -->
            <div class="row">
                <div class="blog__wrap clearfix mt-50 xs-mt-20">
                    <!-- Start Single BLog -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="blog bg-cat-2">
                            <div class="blog__inner">
                                <div class="htc__hover__fornt">
                                    <img src="{{asset('theme/republic/images/blog/blog-img/1.jpg')}}" alt="blog images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="#"><i class="zmdi zmdi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog__details">
                                <h2><a href="#">Work for rural development</a></h2>
                                <p><i class="zmdi zmdi-pin"></i>Ipsam Road, Alaska. USA</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single BLog -->
                    <!-- Start Single BLog -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="blog bg-cat-2">
                            <div class="blog__inner">
                                <div class="htc__hover__fornt">
                                    <img src="{{asset('theme/republic/images/blog/blog-img/2.jpg')}}" alt="blog images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="#"><i class="zmdi zmdi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog__details">
                                <h2><a href="#">Work for rural development</a></h2>
                                <p><i class="zmdi zmdi-pin"></i>Ipsam Road, Alaska. USA</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single BLog -->
                    <!-- Start Single BLog -->
                    <div class="col-md-4 col-lg-4 hidden-sm col-xs-12">
                        <div class="blog bg-cat-2">
                            <div class="blog__inner">
                                <div class="htc__hover__fornt">
                                    <img src="{{asset('theme/republic/images/blog/blog-img/3.jpg')}}" alt="blog images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="#"><i class="zmdi zmdi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog__details">
                                <h2><a href="#">Work for rural development</a></h2>
                                <p><i class="zmdi zmdi-pin"></i>Ipsam Road, Alaska. USA</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single BLog -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
    <!-- Start Footer Area -->
@endsection
