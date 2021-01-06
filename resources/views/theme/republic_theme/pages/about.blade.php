@extends('theme.republic_theme.layouts.app')
@section('content')
        <!-- End Header Style -->
        <!-- page Content Start -->
        <div class="page-content">
            <!-- Breadcamb Area Start -->
            <section class="breadcamb-area bg-breadcamb breadcamb-opacity pt-180 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bradcamb-content text-center text-white">
                                <h1>about us</h1>
                                <ul>
                                    <li><a href="{{url('home')}}" contenteditable="true">home <span>//</span></a></li>
                                    <li contenteditable="true">about us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcamb Area End -->
            <!-- Start About Area -->
            <section class="htc__about bg-4 mt-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="about">
                                <div class="about__inner">
                                    <h2 contenteditable="true">About The Government</h2>
                                    <p contenteditable="true">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <p contenteditable="true">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="about__btn">
                                        <a class="rp-btn" href="#">Join us</a>
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
            <!-- Start story area -->
            <section class="our__story bg-5 xs-ptb-100 mtb-90" data-black-overlay="5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="story">
                                <h4 class="text-theme" contenteditable="true">Know about us.. </h4>
                                <h2 contenteditable="true">This is our story.</h2>
                                <p contenteditable="true">Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <div class="story__btn">
                                    <a class="rp-btn btn--transparent" href="#">Learn More</a>
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
            <!-- Start Footer Area -->
@endsection
