@extends('layouts.app')
@section('content')
        <section>
            <div class="spacing bottom-spac90 black-layer2 opc7">
                <div class="fixed-bg2" style="background-image: url(assets/images/page-top-bg.jpg);"></div>
                <div class="container">
                    <div class="page-top-wrap text-center">
                        <div class="page-top-inner">
                            <h1 itemprop="headline">CONTACT US</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                                <li class="breadcrumb-item active">Contact Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="spacing">
                <div class="container">
                    <div class="contact-wrap">
                        <div class="map-canvas brd-rd5" id="contact-map1"></div>
                        <div class="contact-info-sec bottom-spac80 top-spac90">
                            <h2 itemprop="headline">Contact Information</h2>
                            <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed euismod tempor incidunt ut labore et dolor magna aliqua invideo miror magis.</p>
                            <ul class="contact-info-list">
                                <li>
                                    <i class="fa fa-home theme-clr brd-rd50"></i>
                                    <span>The Layer, Chamber of Commerce, New York United States.</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone theme-clr brd-rd50"></i>
                                    <span>(+61)123 4567 89</span>
                                    <span>(+61)987 6543 21</span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-open theme-clr brd-rd50"></i>
                                    <a href="mailto:someone@example.com" title="" itemprop="url">info@Walter Lewis.com</a>
                                    <a href="mailto:someone@example.com" title="" itemprop="url">info.sales@Walter Lewis.com</a>
                                </li>
                            </ul>
                        </div><!-- Contact info Section -->
                        <div class="contact-form-wrap">
                            <h5 itemprop="headline">Please Fill This Form to contact with us</h5>
                            <form>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <input class="brd-rd33" type="text" placeholder="Full Name">
                                        <input class="brd-rd33" type="email" placeholder="Email">
                                        <input class="brd-rd33" type="text" placeholder="Subject">
                                    </div>
                                    <div class="col-md-8 col-sm-6 col-lg-8">
                                        <textarea class="brd-rd33" placeholder="Comments"></textarea>
                                        <button class="theme-btn2 brd-rd33 big" type="submit">CONTACT NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- Contact Form Wrap -->
                    </div><!-- Contact Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="spacing less-spacing gray-bg">
                <div class="container">
                    <div class="sponsors-carousel owl-carousel text-center">
                        <div class="sponsor-box">
                            <a href="#" title="" itemprop="url"><img src="assets/images/resources/sponsor-img1.png" alt="sponsor-img1.png" itemprop="image"></a>
                        </div>
                        <div class="sponsor-box">
                            <a href="#" title="" itemprop="url"><img src="assets/images/resources/sponsor-img2.png" alt="sponsor-img2.png" itemprop="image"></a>
                        </div>
                        <div class="sponsor-box">
                            <a href="#" title="" itemprop="url"><img src="assets/images/resources/sponsor-img3.png" alt="sponsor-img3.png" itemprop="image"></a>
                        </div>
                        <div class="sponsor-box">
                            <a href="#" title="" itemprop="url"><img src="assets/images/resources/sponsor-img4.png" alt="sponsor-img4.png" itemprop="image"></a>
                        </div>
                        <div class="sponsor-box">
                            <a href="#" title="" itemprop="url"><img src="assets/images/resources/sponsor-img5.png" alt="sponsor-img5.png" itemprop="image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
