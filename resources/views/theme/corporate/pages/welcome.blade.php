@extends('theme.corporate.layouts.apps')
@section('content')
<!-- Header -->


<!-- Hero -->
<section id="slider" class="hero p-0 odd">
    <div class="swiper-container full-slider animation slider-h-100 slider-h-auto">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">

                <!-- Media -->
                <img src="{{$THEME_IMAGES.'bg-1.jpg'}}" alt="Full Image" class="full-image" data-mask="40">

                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-start inner">
                        <div class="left text-left">

                            <!-- Content -->
                            <h1 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text">Business Consulting</h1>
                            <p data-aos="zoom-in" data-aos-delay="2400" class="description">We drive product and service innovation, improve financial performance, accelerate market speed.</p>

                            <!-- Action -->
                            <div data-aos="fade-up" data-aos-delay="2800" class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#contact" class="smooth-anchor mt-4 btn primary-button">GET IN TOUCH</a>
                                    <a href="#video" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="swiper-slide slide-center">

                <!-- Media -->
                <img src="{{$THEME_IMAGES.'bg-2.jpg'}}'" alt="Full Image" class="full-image" data-mask="40">

                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-start justify-content-md-center inner">
                        <div class="center text-left text-md-center">

                            <!-- Content -->
                            <h1 data-aos="zoom-in" data-aos-delay="400" class="title effect-static-text">Financial Risk</h1>
                            <p data-aos="zoom-in" data-aos-delay="800" class="description mr-auto ml-auto">The right outcomes depend on continuous rigor in governance, models, and processes across the finance function.</p>

                            <!-- Action -->
                            <div data-aos="fade-up" data-aos-delay="1200" class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#contact" class="smooth-anchor mt-4 btn primary-button">GET IN TOUCH</a>
                                    <a href="#video" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="swiper-slide slide-center">

                <!-- Media -->
                <img src="{{$THEME_IMAGES.'bg-3.jpg'}}" alt="Full Image" class="full-image" data-mask="40">

                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-start justify-content-md-end inner">
                        <div class="right text-left">

                            <!-- Content -->
                            <h1 data-aos="zoom-in" data-aos-delay="400" class="title effect-static-text">Audit & Assurance</h1>
                            <p data-aos="zoom-in" data-aos-delay="800" class="description">Our focus is to map the technologies to solve the business transformation, offering services.</p>

                            <!-- Action -->
                            <div data-aos="fade-up" data-aos-delay="1200" class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#contact" class="smooth-anchor mt-4 btn primary-button">GET IN TOUCH</a>
                                    <a href="#video" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Fun Facts -->
<section id="funfacts" class="section-2 odd counter funfacts">
    <video class="full-image to-bottom grayscale" data-mask="70" src="{{$THEME_IMAGES.'assets/videos/city.mp4'}}" autoplay muted loop></video>
    <div class="container">
        <div class="row mb-md-5 text-center">
            <div class="col-12">
                <span class="pre-title">What are we doing</span>
                <h2><span class="featured"><span>Results</span></span> in Numbers</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center items">
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="128" class="radial">
                    <span></span>
                </div>
                <h4>Certifications</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="230" class="radial">
                    <span></span>
                </div>
                <h4>Employees</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="517" class="radial">
                    <span></span>
                </div>
                <h4>Customers</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="94" class="radial">
                    <span></span>
                </div>
                <h4>Countries Served</h4>
            </div>
        </div>
    </div>
</section>

<!-- Team -->
<section id="team" class="section-4 highlights team image-right">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 align-self-top text-center text-md-left text">
                <div class="row intro">
                    <div class="col-12 p-0">
                        <span class="pre-title m-auto m-md-0">We like what we do</span>
                        <h2><span class="featured"><span>Team</span></span> of Experts</h2>
                        <p>Ethics and integrity are the bases on which our professionals build their careers.<br>They are fundamentals that become daily attitudes.</p>
                    </div>
                </div>
                <div class="row items text-left">
                    <div class="col-12 col-md-6 p-0">
                        <div class="row item">
                            <div class="col-4 p-0 pr-3 align-self-center">
                                <img src="{{$THEME_IMAGES.'team-1.jpg'}}" alt="Person" class="person">
                            </div>
                            <div class="col-8 align-self-center text-left">
                                <h4>David Cooper</h4>
                                <p>CTO & CO-FOUNDER</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-4 p-0 pr-3 align-self-center">
                                <img src="{{$THEME_IMAGES.'team-2.jpg'}}" alt="Person" class="person">
                            </div>
                            <div class="col-8 align-self-center text-left">
                                <h4>Emma Lopez</h4>
                                <p>CHIEF MARKETING</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-0">
                        <div class="row item">
                            <div class="col-4 p-0 pr-3 align-self-center">
                                <img src="{{$THEME_IMAGES.'team-3.jpg'}}" alt="Person" class="person">
                            </div>
                            <div class="col-8 align-self-center text-left">
                                <h4>Oliver Jones</h4>
                                <p>CHIEF PROCUREMENT</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-4 p-0 pr-3 align-self-center">
                                <img src="{{$THEME_IMAGES.'team-4.jpg'}}" alt="Person" class="person">
                            </div>
                            <div class="col-8 align-self-center text-left">
                                <h4>T. Johnson</h4>
                                <p>CEO & PRESIDENT</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in" class="col-12 col-lg-4 align-self-end">
                <div class="quote">
                    <div class="quote-content">
                        <h4>President Speech</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut lacinia diam.</p>
                        <p>Vivamus efficitur et est quis posuere. Nulla sollicitudin vulputate dui, id pretium tortor congue eu. Integer aliquet justo eu quam volutpat ullamcorper.</p>
                        <p>Duis ut hendrerit mauris. Phasellus faucibus ut enim vel tincidunt. Nunc venenatis a dui et laoreet.</p>
                        <h5>T. Johnson</h5>
                    </div>
                    <i class="quote-right fas fa-quote-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
