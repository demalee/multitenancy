@extends('layouts.app')
@section('content')
        <section>
            <div class="spacing bottom-spac90 black-layer2 opc7">
                <div class="fixed-bg2" style="background-image: url(assets/images/page-top-bg.jpg);"></div>
                <div class="container">
                    <div class="page-top-wrap text-center">
                        <div class="page-top-inner">
                            <h1 itemprop="headline">ABOUT US</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('home')}}" title="" itemprop="url">Home</a></li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="spacing gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="about-us">
                                <h2 itemprop="headline"><span class="theme-clr">Organizing for Action</span> What We Do?</h2>
                                <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Globally eenable turnkey applications.</p>
                                <ul>
                                    <li>Economic Services</li>
                                    <li>Medical Organizing</li>
                                    <li>Foreign policy</li>
                                    <li>Education System</li>
                                    <li>Continually foster</li>
                                </ul>
                                <a class="brd-rd33 theme-btn big" href="donate.blade.php" title="" itemprop="url">DONATE</a>
                            </div><!-- About Us -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="our-missions">
                                <h5 itemprop="headline">MISSION & VISSION</h5>
                                <div class="missions-list remove-ext3">
                                    <div class="missions-box brd-rd5">
                                        <a class="brd-rd5" href="mission-vision.blade.php" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/mission-img1.jpg')}}" alt="mission-img1.jpg" itemprop="image"></a>
                                        <div class="mission-box-info">
                                            <h6 itemprop="headline"><a href="mission-vision.blade.php" title="" itemprop="url">Fighting Hate</a></h6>
                                            <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                        </div>
                                    </div>
                                    <div class="missions-box brd-rd5">
                                        <a class="brd-rd5" href="mission-vision.blade.php" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/mission-img2.jpg')}}" alt="mission-img2.jpg" itemprop="image"></a>
                                        <div class="mission-box-info">
                                            <h6 itemprop="headline"><a href="mission-vision.blade.php" title="" itemprop="url">Teaching Tolerance</a></h6>
                                            <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="spacing">
                <div class="container">
                    <div class="campaign-volunteer-unit-sec text-center remove-ext3">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="fea-box">
                                    <i class=""><img src="assets/images/resources/icn-img1.png" alt="icn-img1.png" itemprop="image"></i>
                                    <div class="fea-inf">
                                        <span class="theme-clr">What We Stand For</span>
                                        <h4 itemprop="headline">Become A Volunteer</h4>
                                        <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore magna.</p>
                                        <a href="become-volunteer.blade.php" title="" itemprop="url">BECOME NOW <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="campaign-box">
                                    <h6 class="blue-clr" itemprop="headline">Our Campaign is powered by Grassroots supporters like you</h6>
                                    <h1 class="counter" itemprop="headline">3233313</h1>
                                    <span>Donation to select Democrats</span>
                                    <a class="brd-rd33 theme-btn2 big" href="donate.blade.php" title="" itemprop="url">DONATE NOW</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="fea-box">
                                    <i class=""><img src="assets/images/resources/icn-img2.png" alt="icn-img2.png" itemprop="image"></i>
                                    <div class="fea-inf">
                                        <span class="theme-clr">What We Stand For</span>
                                        <h4 itemprop="headline">Find Local Unit</h4>
                                        <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore magna.</p>
                                        <a href="branches.blade.php" title="" itemprop="url">FIND LOCAL UNIT <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Campaigns Volunteer Unit Section -->
                </div>
            </div>
        </section>
        <section>
            <div class="spacing blue-bg-layer opc85 bottom-spac450">
                <div class="fixed-bg" style="background-image: url(assets/images/parallax4.jpg);"></div>
                <div class="container">
                    <div class="history-wrap text-center">
                        <div class="history-inner">
                            <h1 itemprop="headline">
                                <small>We will make</small>
                                <span class="theme-clr">History</span> Togeather
                            </h1>
                            <h5 itemprop="headline">“The House is in Play”</h5>
                            <a href="https://www.youtube.com/RAMbIz3Y2JA" title="" data-fancybox itemprop="url"><i class="fa fa-play-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="spacing remove-gap gray-bg">
                <div class="container-wrapper text-center">
                    <div class="sec-box">
                        <div class="sec-box-inner brd-rd5 overlap340 with-social-share">
                            <div class="container">
                                <div class="sec-title">
                                    <h2 itemprop="headline"><span class="theme-clr">What We Stand For</span> Recent Priorities</h2>
                                </div>
                                <div class="priorities-carousel owl-carousel remove-ext6">
                                    <div class="prioritie-box">
                                        <div class="prioritie-thumb brd-rd5">
                                            <a href="priorities-detail.html" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/prioritie-img1.jpg')}}" alt="prioritie-img1.jpg" itemprop="image"></a>
                                        </div>
                                        <div class="prioritie-info">
                                            <span class="priorite-cat">In <a class="theme-clr" href="#" title="" itemprop="url">Citizen Life</a></span>
                                            <h6 itemprop="headline"><a href="priorities-detail.html" title="" itemprop="url">Change The Citizen Life</a></h6>
                                            <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                        </div>
                                    </div>
                                    <div class="prioritie-box">
                                        <div class="prioritie-thumb brd-rd5">
                                            <a href="priorities-detail.html" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/prioritie-img2.jpg')}}" alt="prioritie-img2.jpg" itemprop="image"></a>
                                        </div>
                                        <div class="prioritie-info">
                                            <span class="priorite-cat">In <a class="theme-clr" href="#" title="" itemprop="url">Economy</a></span>
                                            <h6 itemprop="headline"><a href="priorities-detail.html" title="" itemprop="url">The Publicity Campaign</a></h6>
                                            <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                        </div>
                                    </div>
                                    <div class="prioritie-box">
                                        <div class="prioritie-thumb brd-rd5">
                                            <a href="priorities-detail.html" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/prioritie-img3.jpg')}}" alt="prioritie-img3.jpg" itemprop="image"></a>
                                        </div>
                                        <div class="prioritie-info">
                                            <span class="priorite-cat">In <a class="theme-clr" href="#" title="" itemprop="url">Campaign</a></span>
                                            <h6 itemprop="headline"><a href="priorities-detail.html" title="" itemprop="url">The Clean Power Plan</a></h6>
                                            <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                        </div>
                                    </div>
                                    <div class="prioritie-box">
                                        <div class="prioritie-thumb brd-rd5">
                                            <a href="priorities-detail.html" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/prioritie-img4.jpg')}}" alt="prioritie-img4.jpg" itemprop="image"></a>
                                        </div>
                                        <div class="prioritie-info">
                                            <span class="priorite-cat">In <a class="theme-clr" href="#" title="" itemprop="url">Civil Rights</a></span>
                                            <h6 itemprop="headline"><a href="priorities-detail.html" title="" itemprop="url">Security For Middle Class</a></h6>
                                            <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                        </div>
                                    </div>
                                    <div class="prioritie-box">
                                        <div class="prioritie-thumb brd-rd5">
                                            <a href="priorities-detail.html" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/prioritie-img5.jpg')}}" alt="prioritie-img5.jpg" itemprop="image"></a>
                                        </div>
                                        <div class="prioritie-info">
                                            <span class="priorite-cat">In <a class="theme-clr" href="#" title="" itemprop="url">Citizen Life</a></span>
                                            <h6 itemprop="headline"><a href="priorities-detail.html" title="" itemprop="url">Glossary of Humanity</a></h6>
                                            <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                        </div>
                                    </div>
                                    <div class="prioritie-box">
                                        <div class="prioritie-thumb brd-rd5">
                                            <a href="priorities-detail.html" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/prioritie-img6.jpg')}}" alt="prioritie-img6.jpg" itemprop="image"></a>
                                        </div>
                                        <div class="prioritie-info">
                                            <span class="priorite-cat">In <a class="theme-clr" href="#" title="" itemprop="url">Economy</a></span>
                                            <h6 itemprop="headline"><a href="priorities-detail.html" title="" itemprop="url">Provide Healthy Food</a></h6>
                                            <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                        </div>
                                    </div>
                                    <div class="prioritie-box">
                                        <div class="prioritie-thumb brd-rd5">
                                            <a href="priorities-detail.html" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/prioritie-img7.jpg')}}" alt="prioritie-img7.jpg" itemprop="image"></a>
                                        </div>
                                        <div class="prioritie-info">
                                            <span class="priorite-cat">In <a class="theme-clr" href="#" title="" itemprop="url">Campaign</a></span>
                                            <h6 itemprop="headline"><a href="priorities-detail.html" title="" itemprop="url">Clothes For Everyone</a></h6>
                                            <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                        </div>
                                    </div>
                                    <div class="prioritie-box">
                                        <div class="prioritie-thumb brd-rd5">
                                            <a href="priorities-detail.html" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/prioritie-img8.jpg')}}" alt="prioritie-img8.jpg" itemprop="image"></a>
                                        </div>
                                        <div class="prioritie-info">
                                            <span class="priorite-cat">In <a class="theme-clr" href="#" title="" itemprop="url">Civil Rights</a></span>
                                            <h6 itemprop="headline"><a href="priorities-detail.html" title="" itemprop="url">School for Poor Children</a></h6>
                                            <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                                        </div>
                                    </div>
                                </div><!-- Priorities Section -->
                                <div class="view-more text-center">
                                    <a class="brd-rd33 theme-btn big" href="priorities.blade.php" title="" itemprop="url">MORE PRIORITIES</a>
                                </div><!-- View More -->
                            </div>
                            <div class="social-follow-wrap text-center">
                                <div class="row mrg">
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <a class="social-btn twitter" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i><span>FOLLOW US ON TWITTER</span></a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <a class="social-btn facebook" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i><span>FOLLOW US ON FACEBOOK</span></a>
                                    </div>
                                </div>
                            </div><!-- Social Follow Buttons -->
                        </div>
                    </div><!-- Section Box -->
                </div>
            </div>
        </section>
        <section>
            <div class="spacing remove-gap gray-bg">
                <div class="container">
                    <div class="sec-title text-center">
                        <h2 itemprop="headline"><span class="theme-clr">What We Stand For</span> Our Volunteers</h2>
                    </div>
                    <div class="remove-ext3">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="team-box brd-rd5">
                                    <div class="team-thumb">
                                        <a href="#" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/member-img1.jpg')}}" alt="member-img1.jpg" itemprop="image"></a>
                                    </div>
                                    <div class="team-info">
                                        <h5 itemprop="headline"><a href="#" title="" itemprop="url">Philip Waren</a></h5>
                                        <span class="theme-clr">CEO WX Interprize</span>
                                        <div class="social-btns-wrap">
                                            <i class="fa fa-share-alt brd-rd50"></i>
                                            <div class="social-btns2">
                                                <a class="brd-rd50" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a class="brd-rd50" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a class="brd-rd50" href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a class="brd-rd50" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Team Box -->
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="team-box brd-rd5">
                                    <div class="team-thumb">
                                        <a href="#" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/member-img2.jpg')}}" alt="member-img2.jpg" itemprop="image"></a>
                                    </div>
                                    <div class="team-info">
                                        <h5 itemprop="headline"><a href="#" title="" itemprop="url">Rubén Moya</a></h5>
                                        <span class="theme-clr">UX Designer</span>
                                        <div class="social-btns-wrap">
                                            <i class="fa fa-share-alt brd-rd50"></i>
                                            <div class="social-btns2">
                                                <a class="brd-rd50" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a class="brd-rd50" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a class="brd-rd50" href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a class="brd-rd50" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Team Box -->
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="team-box brd-rd5">
                                    <div class="team-thumb">
                                        <a href="#" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/member-img3.jpg')}}" alt="member-img3.jpg" itemprop="image"></a>
                                    </div>
                                    <div class="team-info">
                                        <h5 itemprop="headline"><a href="#" title="" itemprop="url">David Bravo</a></h5>
                                        <span class="theme-clr">Manager Political Affairs</span>
                                        <div class="social-btns-wrap">
                                            <i class="fa fa-share-alt brd-rd50"></i>
                                            <div class="social-btns2">
                                                <a class="brd-rd50" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a class="brd-rd50" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a class="brd-rd50" href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a class="brd-rd50" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Team Box -->
                            </div>
                        </div>
                    </div><!-- Volunteer Section -->
                    <div class="view-more text-center">
                        <a class="brd-rd33 theme-btn big" href="volunteer.blade.php" title="" itemprop="url">MORE MEMBERS</a>
                    </div><!-- View More -->
                </div>
            </div>
        </section>
        <section>
            <div class="spacing top-spac90 theme-bg-layer opc9">
                <div class="fixed-bg2 pattern-bg" style="background-image: url(theme/country/assets/images/pattern1.png);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <div class="title1">
                                <h3 itemprop="headline">Join Our Movement!</h3>
                                <span>Help fulfill our promise to Make America Great Again!</span>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            <div class="newsletter-wrap style2">
                                <form class="newsletter-form">
                                    <div class="email-field">
                                        <input class="brd-rd33" type="email" placeholder="Your Email Id">
                                    </div>
                                    <div class="zipcode-field">
                                        <input class="brd-rd33" type="text" placeholder="Zip Code">
                                    </div>
                                    <button class="brd-rd50 blue-bg" type="submit"><i class="fa fa-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="spacing no-spacing gray-layer opc8">
                <div class="fixed-bg pattern-bg" style="background-image: url(theme/country/assets/images/pattern2.png);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="chairman-message">
                                <h1 class="blue-clr" itemprop="headline"><span>Promises Made,</span> Promises Kept</h1>
                                <blockquote>
                                    <i class="fa fa-quote-left"></i>
                                    “A showcase of President Alex leadership in improving the manufacturing sector by featuring the proud workforce of artisans and apprentices.”
                                </blockquote>
                                <div class="chairman-info">
                                    <h6 class="blue-clr" itemprop="headline">Johnson Keti</h6>
                                    <span class="theme-clr">Dectetr, Party Chairman</span>
                                </div>
                                <img class="chairman-sign" src="{{asset('theme/country/assets/images/chairman-sign.png')}}" alt="chairman-sign.png" itemprop="image">
                            </div><!-- Chairman Message -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="chairman-img text-center overlap115">
                                <img src="{{asset('theme/country/assets/images/resources/chairman-img.png')}}" alt="chairman-img.png" itemprop="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="spacing less-spacing">
                <div class="container">
                    <div class="sponsors-carousel owl-carousel text-center">
                        <div class="sponsor-box">
                            <a href="#" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/sponsor-img1.png')}}" alt="sponsor-img1.png" itemprop="image"></a>
                        </div>
                        <div class="sponsor-box">
                            <a href="#" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/sponsor-img2.png')}}" alt="sponsor-img2.png" itemprop="image"></a>
                        </div>
                        <div class="sponsor-box">
                            <a href="#" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/sponsor-img3.png')}}" alt="sponsor-img3.png" itemprop="image"></a>
                        </div>
                        <div class="sponsor-box">
                            <a href="#" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/sponsor-img4.png')}}" alt="sponsor-img4.png" itemprop="image"></a>
                        </div>
                        <div class="sponsor-box">
                            <a href="#" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/resources/sponsor-img5.png')}}" alt="sponsor-img5.png" itemprop="image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
