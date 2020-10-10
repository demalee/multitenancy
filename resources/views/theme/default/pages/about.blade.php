@extends('theme.default.layouts.apps')
@section('content')

<main>

    <section class="slider-area slider-area2  hero-overly">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-11 col-md-12">
                        <div class="hero__caption hero__caption2 text-center">
                            <h1 data-animation="bounceIn" data-delay="0.2s">About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-area2 pb-bottom pb-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-9">

                    <div class="about-img ">
                        <img src="{{url($THEME_IMG.'gallery/about1.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-9">
                    <div class="about-caption mb-50">

                        <div class="section-tittle mb-25">
                            <h2>20+ years <br>agricultural<br>cooperative</h2>
                            <p class="mb-20">
                                The automated process starts as soon as your clothes go into the machine. The outcome is
                                gleaming clothes!
                            </p>
                            <p class="mb-45">The automated process starts as soon as your clothes go into the machine.
                                The outcome is gleaming clothes!</p>
                        </div>
                        <a href="about.blade.php" class="btn"><i class="fas fa-phone-alt"></i>More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="count-down-area pt-90 pb-80">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-12 col-md-12">
                    <div class="count-down-wrapper border-bottom">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">

                                <div class="single-counter">
                                    <span class="counter ">20</span>
                                    <p class="">+</p>
                                </div>
                                <div class="pera-count mb-50">
                                    <p>List of any and all companies related to agribusiness.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">

                                <div class="single-counter">
                                    <span class="counter ">10</span>
                                    <p class="">K</p>
                                </div>
                                <div class="pera-count mb-50">
                                    <p>List of any and all companies related to agribusiness.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">

                                <div class="single-counter">
                                    <span class="counter ">12</span>
                                    <p class="">+</p>
                                </div>
                                <div class="pera-count">
                                    <p>List of any and all companies related to agribusiness.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">

                                <div class="single-counter">
                                    <span class="counter ">280</span>
                                    <p class="">+</p>
                                </div>
                                <div class="pera-count mb-50">
                                    <p>List of any and all companies related to agribusiness.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="about-area2 pb-bottom mt-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption about-caption2 mb-50">

                        <div class="section-tittle mb-25">
                            <h2>Why you should<br> choose us</h2>
                            <p class="mb-20">Technological information and others, in addition to information about
                                companies in the sector, list of any and all companies related to agribusiness. </p>
                        </div>
                        <div class="single-features">
                            <div class="features-icon">
                                <img src="{{url($THEME_IMG.'icon/right-icon.svg')}}" alt="">
                            </div>
                            <div class="features-caption">
                                <p>Technological information and others, in addition to information about companies.</p>
                            </div>
                        </div>
                        <div class="single-features">
                            <div class="features-icon">
                                <img src="{{url($THEME_IMG.'icon/right-icon.svg')}}" alt="">
                            </div>
                            <div class="features-caption">
                                <p>Technological information and others, in addition to information about companies.</p>
                            </div>
                        </div>
                        <div class="single-features mb-40">
                            <div class="features-icon">
                                <img src="{{url($THEME_IMG.'icon/right-icon.svg')}}" alt="">
                            </div>
                            <div class="features-caption">
                                <p>Technological information and others, in addition to information about companies.</p>
                            </div>
                        </div>
                        <a href="about.blade.php" class="btn"><i class="fas fa-phone-alt"></i>(10) 892-293 2678</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">

                    <div class="about-img about-img2  ">
                        <img src="{{url($THEME_IMG.'gallery/about2.png')}}" alt="">

                        <div class="info-man text-center">
                            <div class="head-cap">
                                <img src="{{url($THEME_IMG.'icon/agronomy.svg')}}" alt="">
                                <p>Best Plants</p>
                            </div>
                        </div>

                        <div class="info-man info-man2 text-center">
                            <div class="head-cap">
                                <img src="{{url($THEME_IMG.'icon/fields.svg')}}" alt="">
                                <p>Award Wining</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="video-area section-bg2 d-flex align-items-center" data-background="{{url($THEME_IMG.'/gallery/video-bg.png')}}">
        <div class="container">
            <div class="video-wrap position-relative">

                <div class="video-icon">
                    <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>


    <div class="all-starups-area fix pb-top">

        <div class="starups">
            <div class="starups-details">

                <div class="section-tittle mb-35">
                    <h2>Need any help?</h2>
                    <p>The information is also part of the MF Rural, where you can find news, quotes, technological
                        information and others, in addition.</p>
                </div>

                <div class="starups-list mb-30">
                    <ul>
                        <li>
                            <i class="fas fa-phone"></i>
                        </li>
                        <li>
                            <p>(10) 892-293 2678</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <i class="far fa-envelope"></i>
                        </li>
                        <li>
                            <p><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                  data-cfemail="aecdc1c0dacfcddaeecfc9dcc7cdcf80cdc1c3">[email&#160;protected]</a></p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                        </li>
                        <li>
                            <p>768/A, Green lane 790, Max town New York</p>
                        </li>
                    </ul>
                </div>
                <a href="#" class="border-btn">Drop Your Message</a>
            </div>
        </div>

        <div class="starups-img"></div>
    </div>

</main>

@endsection
