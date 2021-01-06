@extends('theme.country_political_theme.layouts.app')
@section('content')
        <section>
            <div class="spacing bottom-spac90 black-layer2 opc7">
                <div class="fixed-bg2" style="background-image: url(assets/images/page-top-bg.jpg);"></div>
                <div class="container">
                    <div class="page-top-wrap text-center">
                        <div class="page-top-inner">
                            <h1 itemprop="headline" contenteditable="true">FIND LOCAL UNIT</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('home')}}" title="" itemprop="url" contenteditable="true">Home</a></li>
                                <li class="breadcrumb-item active" contenteditable="true">Find Local Unit</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="spacing">
                <div class="container">
                    <div class="search-branch-area-wrap">
                        <h3 itemprop="headline" contenteditable="true">Search Your Area</h3>
                        <form class="search-branch-form text-center">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <input class="brd-rd33" type="text" placeholder="Enter Your Keyword">
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="select-wrap2 style2 brd-rd33">
                                        <select>
                                            <option contenteditable="true">United Kingdom (UK)</option>
                                            <option contenteditable="true">United States (US)</option>
                                            <option contenteditable="true">United Arab Emirates (UAE)</option>
                                            <option contenteditable="true">Pakistan</option>
                                            <option contenteditable="true">India</option>
                                            <option contenteditable="true">Russia</option>
                                            <option contenteditable="true">Chaina</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="select-wrap2 style2 brd-rd33">
                                        <select>
                                            <option contenteditable="true">City</option>
                                            <option contenteditable="true">New York</option>
                                            <option contenteditable="true">Chicago</option>
                                            <option contenteditable="true"> San Francisco</option>
                                            <option contenteditable="true">Washington D.C.</option>
                                            <option contenteditable="true">Los Angeles</option>
                                            <option contenteditable="true">Las Vegas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="select-wrap2 style2 brd-rd33">
                                        <select>
                                            <option contenteditable="true">Zip Code</option>
                                            <option contenteditable="true">6000</option>
                                            <option contenteditable="true">4500</option>
                                            <option contenteditable="true">6800</option>
                                            <option contenteditable="true">4000</option>
                                            <option contenteditable="true">3500</option>
                                            <option contenteditable="true">7500</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <button class="brd-rd33 theme-btn2 big" type="submit">FIND LOCAL UNIT</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- Search Branch Area Wrap -->
                </div>
            </div>
        </section>
        <section>
            <div class="spacing gray-bg">
                <div class="container">
                    <div class="remove-ext3">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="branch-box brd-rd5">
                                    <div class="branch-thumb"><img src="{{asset('theme/country/assets/images/resources/branch-img1-1.jpg')}}" alt="branch-img1-1.jpg" itemprop="image"></div>
                                    <div class="branch-info">
                                        <h6 itemprop="headline" contenteditable="true">New York BR</h6>
                                        <ul class="post-meta2">
                                            <li contenteditable="true"><i class="fa fa-home theme-clr"></i> The Lawyer, Chamber of Commerce, New York United States.</li>
                                            <li contenteditable="true"><i class="fa fa-envelope-open theme-clr"></i> <a href="mailto:someone@example.com" title="" itemprop="url" target="_top">info.sales@Walter Lewis.com</a></li>
                                            <li contenteditable="true"><i class="fa fa-phone theme-clr"></i> (+61) 987 654321</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="branch-box brd-rd5">
                                    <div class="branch-thumb"><img src="{{asset('theme/country/assets/images/resources/branch-img1-2.jpg')}}" alt="branch-img1-2.jpg" itemprop="image"></div>
                                    <div class="branch-info">
                                        <h6 itemprop="headline" contenteditable="true">Los Angeles BR</h6>
                                        <ul class="post-meta2">
                                            <li contenteditable="true"><i class="fa fa-home theme-clr"></i> The Lawyer, Chamber of Commerce, New York United States.</li>
                                            <li contenteditable="true"><i class="fa fa-envelope-open theme-clr"></i> <a href="mailto:someone@example.com" title="" itemprop="url" target="_top">info.sales@Walter Lewis.com</a></li>
                                            <li contenteditable="true"><i class="fa fa-phone theme-clr"></i> (+61) 987 654321</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="branch-box brd-rd5">
                                    <div class="branch-thumb"><img src="{{asset('theme/country/assets/images/resources/branch-img1-3.jpg')}}" alt="branch-img1-3.jpg" itemprop="image"></div>
                                    <div class="branch-info">
                                        <h6 itemprop="headline" contenteditable="true">Chicago BR</h6>
                                        <ul class="post-meta2">
                                            <li contenteditable="true"><i class="fa fa-home theme-clr"></i> The Lawyer, Chamber of Commerce, New York United States.</li>
                                            <li contenteditable="true"><i class="fa fa-envelope-open theme-clr"></i> <a href="mailto:someone@example.com" title="" itemprop="url" target="_top">info.sales@Walter Lewis.com</a></li>
                                            <li contenteditable="true"><i class="fa fa-phone theme-clr"></i> (+61) 987 654321</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="branch-box brd-rd5">
                                    <div class="branch-thumb"><img src="{{asset('theme/country/assets/images/resources/branch-img1-4.jpg')}}" alt="branch-img1-4.jpg" itemprop="image"></div>
                                    <div class="branch-info">
                                        <h6 itemprop="headline" contenteditable="true">San Francisco BR</h6>
                                        <ul class="post-meta2">
                                            <li contenteditable="true"><i class="fa fa-home theme-clr"></i> The Lawyer, Chamber of Commerce, New York United States.</li>
                                            <li contenteditable="true"><i class="fa fa-envelope-open theme-clr"></i> <a href="mailto:someone@example.com" title="" itemprop="url" target="_top">info.sales@Walter Lewis.com</a></li>
                                            <li contenteditable="true"><i class="fa fa-phone theme-clr"></i> (+61) 987 654321</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="branch-box brd-rd5">
                                    <div class="branch-thumb"><img src="{{asset('theme/country/assets/images/resources/branch-img1-5.jpg')}}" alt="branch-img1-5.jpg" itemprop="image"></div>
                                    <div class="branch-info">
                                        <h6 itemprop="headline" contenteditable="true">Boston BR</h6>
                                        <ul class="post-meta2">
                                            <li contenteditable="true"><i class="fa fa-home theme-clr" contenteditable="true"></i> The Lawyer, Chamber of Commerce, New York United States.</li>
                                            <li contenteditable="true"><i class="fa fa-envelope-open theme-clr" </i> <a href="mailto:someone@example.com" title="" itemprop="url" target="_top">info.sales@Walter Lewis.com</a></li>
                                            <li contenteditable="true"><i class="fa fa-phone theme-clr" contenteditable="true"></i> (+61) 987 654321</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="branch-box brd-rd5">
                                    <div class="branch-thumb"><img src="{{asset('theme/country/assets/images/resources/branch-img1-6.jpg')}}" alt="branch-img1-6.jpg" itemprop="image"></div>
                                    <div class="branch-info">
                                        <h6 itemprop="headline" contenteditable="true">Phoenix BR</h6>
                                        <ul class="post-meta2">
                                            <li contenteditable="true"><i class="fa fa-home theme-clr"></i> The Lawyer, Chamber of Commerce, New York United States.</li>
                                            <li contenteditable="true"><i class="fa fa-envelope-open theme-clr"></i> <a href="mailto:someone@example.com" title="" itemprop="url" target="_top">info.sales@Walter Lewis.com</a></li>
                                            <li contenteditable="true"><i class="fa fa-phone theme-clr"></i> (+61) 987 654321</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Branches Section -->
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
