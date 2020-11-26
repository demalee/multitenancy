@extends('theme.country_political_theme.layouts.app')
@section('content')
    <section>
        <div class="spacing bottom-spac90 black-layer2 opc7">
            <div class="fixed-bg2" style="background-image: url(theme/country/assets/images/page-top-bg.jpg);"></div>
            <div class="container">
                <div class="page-top-wrap text-center">
                    <div class="page-top-inner">
                        <h1 itemprop="headline" contenteditable="true">DONATE NOW</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" title="" itemprop="url" contenteditable="true">Home</a></li>
                            <li class="breadcrumb-item active" contenteditable="true">Donate Now</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="spacing">
            <div class="container">
                <div class="donation-form-wrap">
                    <h3 itemprop="headline" contenteditable="true">Donate Our Cause</h3>
                    <div class="give_error">
                        <p itemprop="description" contenteditable="true"><strong>Notice:</strong> Test mode is enabled. While in test mode no live donations are processed.</p>
                    </div><!-- Donation Notice -->
                    <form class="give-form">
                        <div class="give-total-wrap">
                            <div class="give-donation-amount">
                                <label contenteditable="true">Please Select Amount, What you want to Donate:</label>
                                <span class="give-donation-symbol" contenteditable="true">$</span>
                                <input class="give-text-input" type="text" placeholder="50">
                            </div>
                            <ul class="give-donation-levels-wrap">
                                <li>
                                    <input id="give-radio-level-0" type="radio" name="give-radio-donation-level" checked="checked">
                                    <label for="give-radio-level-0" contenteditable="true">50</label>
                                </li>
                                <li>
                                    <input id="give-radio-level-1" type="radio" name="give-radio-donation-level">
                                    <label for="give-radio-level-1" contenteditable="true">100</label>
                                </li>
                                <li>
                                    <input id="give-radio-level-2" type="radio" name="give-radio-donation-level">
                                    <label for="give-radio-level-2">150</label>
                                </li>
                                <li>
                                    <input id="give-radio-level-3" type="radio" name="give-radio-donation-level">
                                    <label for="give-radio-level-3">200</label>
                                </li>
                                <li>
                                    <input id="give-radio-level-4" type="radio" name="give-radio-donation-level">
                                    <label for="give-radio-level-4">250</label>
                                </li>
                                <li>
                                    <input id="give-radio-level-5" type="radio" name="give-radio-donation-level">
                                    <label for="give-radio-level-5">300</label>
                                </li>
                            </ul><!-- Give Donation Levels Wrap -->
                            <fieldset id="give-payment-mode-select">
                                <legend class="give-payment-mode-label" contenteditable="true">Please Select Your Payment Options:</legend>
                                <div id="give-payment-mode-wrap">
                                    <ul id="give-gateway-radio-list">
                                        <li>
                                            <input class="give-gateway" id="give-gateway-option1" type="radio" name="payment-mode">
                                            <label for="give-gateway-option1" contenteditable="true">Paypal</label>
                                        </li>
                                        <li>
                                            <input class="give-gateway" id="give-gateway-option2" type="radio" name="payment-mode">
                                            <label for="give-gateway-option2" contenteditable="true">Credit Card</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-details">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="card-detail-field">
                                                <input type="text" placeholder="Enter your 16 digit card number">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-lg-3">
                                            <div class="select-wrap2">
                                                <select>
                                                    <option contenteditable="true">Expire Month</option>
                                                    <option contenteditable="true">Jan</option>
                                                    <option contenteditable="true">Feb</option>
                                                    <option contenteditable="true">Mar</option>
                                                    <option contenteditable="true">Apr</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-lg-3">
                                            <div class="select-wrap2">
                                                <select>
                                                    <option contenteditable="true">Expire Year</option>
                                                    <option contenteditable="true">2019</option>
                                                    <option contenteditable="true">2020</option>
                                                    <option contenteditable="true">2021</option>
                                                    <option contenteditable="true">2022</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="card-detail-field">
                                                <input type="text" placeholder="Card Verification number">
                                                <img src="{{asset('theme/country/assets/images/card-icon.jpg')}}" alt="card-icon.jpg" itemprop="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset><!-- Donation Payment Methods -->
                            <div id="give_purchase_form_wrap">
                                <fieldset id="give_checkout_user_info">
                                    <legend contenteditable="true">Personal Info:</legend>
                                    <p id="give-first-name-wrap" class="form-row">
                                        <input type="text" class="give-input" placeholder="First Name">
                                    </p>
                                    <p id="give-last-name-wrap" class="form-row">
                                        <input type="text" class="give-input" placeholder="Last Name">
                                    </p>
                                    <p id="give-email-wrap" class="form-row">
                                        <input type="email" class="give-input" placeholder="Email">
                                    </p>
                                </fieldset>
                                <fieldset id="give_purchase_submit">
                                    <p id="give-final-total-wrap">
                                        <span class="give-donation-total-label" contenteditable="true">Donation Total:</span>
                                        <span class="give-final-total-amount" contenteditable="true">$50</span>
                                    </p>
                                    <div class="give-submit-button-wrap">
                                        <input id="give-purchase-button" class="give-submit" type="submit" value="Donate Now">
                                    </div>
                                </fieldset>
                            </div>
                        </div><!-- Donation Total Wrap-->
                    </form>
                </div><!-- Donation Form Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="spacing less-spacing gray-bg">
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
