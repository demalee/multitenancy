@extends('theme.default.layouts.apps')
@section('content')
<main>
    {!! html_entity_decode(@$page->content) !!}
{{--    <section class="about-area2 pb-bottom mt-30">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-6 col-md-12">--}}
{{--                    <div class="about-caption about-caption2 mb-50">--}}

{{--                        <div class="section-tittle mb-25">--}}
{{--                            <h2>Why you should<br> choose us</h2>--}}
{{--                            <p class="mb-20">Technological information and others, in addition to information about--}}
{{--                                companies in the sector, list of any and all companies related to agribusiness. </p>--}}
{{--                        </div>--}}
{{--                        <div class="single-features">--}}
{{--                            <div class="features-icon">--}}
{{--                                <img src="{{url($THEME_IMG.'right-icon.svg')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="features-caption">--}}
{{--                                <p>Technological information and others, in addition to information about companies.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="single-features">--}}
{{--                            <div class="features-icon">--}}
{{--                                <img src="{{url($THEME_IMG.'icon/right-icon.svg')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="features-caption">--}}
{{--                                <p>Technological information and others, in addition to information about companies.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="single-features mb-40">--}}
{{--                            <div class="features-icon">--}}
{{--                                <img src="{{url($THEME_IMG.'icon/right-icon.svg')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="features-caption">--}}
{{--                                <p>Technological information and others, in addition to information about companies.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <a href="about.blade.php" class="btn"><i class="fas fa-phone-alt"></i>(10) 892-293 2678</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12">--}}

{{--                    <div class="about-img about-img2  ">--}}
{{--                        <img src="{{url($THEME_IMG.'/gallery/about2.png')}}" alt="">--}}

{{--                        <div class="info-man text-center">--}}
{{--                            <div class="head-cap">--}}
{{--                                <img src="{{url($THEME_IMG.'icon/agronomy.svg')}}" alt="">--}}
{{--                                <p>Best Plants</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="info-man info-man2 text-center">--}}
{{--                            <div class="head-cap">--}}
{{--                                <img src="{{url($THEME_IMG.'icon/fields.svg')}}" alt="">--}}
{{--                                <p>Award Wining</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


{{--    <div class="video-area section-bg2 d-flex align-items-center" data-background="{{url($THEME_IMG.'gallery/video-bg.png')}}">--}}
{{--        <div class="container">--}}
{{--            <div class="video-wrap position-relative">--}}

{{--                <div class="video-icon">--}}
{{--                    <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i--}}
{{--                            class="fas fa-play"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="services-area section-padding40">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="section-tittle mb-60 text-center">--}}
{{--                        <h2>Tips from experts</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row ">--}}
{{--                <div class="col-xl-12">--}}
{{--                    <div class="single-services single-services2 mb-30">--}}
{{--                        <div class="row no-gutters">--}}
{{--                            <div class="col-xl-4 col-lg-6 col-md-5">--}}
{{--                                <div class="features-img features-img2">--}}
{{--                                    <img src="{{url($THEME_IMG.'gallery/services3.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-8 col-lg-6 col-md-7">--}}
{{--                                <div class="features-caption features-caption2">--}}
{{--                                    <h3><a href="#">20+ years agricultural cooperative</a></h3>--}}
{{--                                    <p>The information is also part of the MF Rural, where you can find news, quotes,--}}
{{--                                        technological information and others, in addition to information about companies--}}
{{--                                        in the sector, list of any and all companies related to agribusiness, just--}}
{{--                                        access the Rural List section.--}}
{{--                                    </p>--}}
{{--                                    <a href="#" class="all-btn">Read More</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-12">--}}
{{--                    <div class="single-services single-services2 ">--}}
{{--                        <div class="row no-gutters">--}}
{{--                            <div class="col-xl-4 col-lg-6 col-md-5">--}}
{{--                                <div class="features-img features-img2">--}}
{{--                                    <img src="{{url($THEME_IMG.'gallery/services4.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-8 col-lg-6 col-md-7">--}}
{{--                                <div class="features-caption features-caption2">--}}
{{--                                    <h3><a href="#">Lawn Protection Equipments</a></h3>--}}
{{--                                    <p>The information is also part of the MF Rural, where you can find news, quotes,--}}
{{--                                        technological information and others, in addition to information about companies--}}
{{--                                        in the sector, list of any and all companies related to agribusiness, just--}}
{{--                                        access the Rural List section.--}}
{{--                                    </p>--}}
{{--                                    <a href="#" class="all-btn">Read More</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="details-btn text-center mt-50">--}}
{{--                        <a href="#" class="border-btn">More Tips</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="all-starups-area fix">--}}

{{--        <div class="starups">--}}
{{--            <div class="starups-details">--}}

{{--                <div class="section-tittle mb-35">--}}
{{--                    <h2>Need any help?</h2>--}}
{{--                    <p>The information is also part of the MF Rural, where you can find news, quotes, technological--}}
{{--                        information and others, in addition.</p>--}}
{{--                </div>--}}

{{--                <div class="starups-list mb-30">--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <i class="fas fa-phone"></i>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <p>(10) 892-293 2678</p>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <i class="far fa-envelope"></i>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <p><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__"--}}
{{--                                  data-cfemail="c6a5a9a8b2a7a5b286a7a1b4afa5a7e8a5a9ab">[email&#160;protected]</a></p>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <i class="fas fa-map-marker-alt"></i>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <p>768/A, Green lane 790, Max town New York</p>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <a href="#" class="border-btn">Drop Your Message</a>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="starups-img"></div>--}}
{{--    </div>--}}

</main>
@endsection
