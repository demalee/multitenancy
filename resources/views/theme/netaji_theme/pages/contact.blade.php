@extends('theme.netaji_theme.layouts.apps')
@section('content')
    <div class="breadcrumb-area pt-250 pb-250" style="background-image:url(img/bg/2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-text text-center">
                        <h1>Contact us</h1>
                        <ul class="breadcrumb-menu">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="contact-wrapper mb-30">

                        <div class="contact-text">
                            <h1>General Inquiries</h1>
                            <ul class="contact-link">
                                <p>For any inquiry about Nairobi City County, please click the button below and fill in form
                                </p></ul>
                        </div>
                        <div class="contact-text">
                            <h1>Quick links</h1>
                            <ul class="contact-link">
                                <li>
                                    <i class="fa fa-arrow-right"></i>  <a href="">E-Payment</a>
                                </li>
                                <li>
                                    <i class="fa fa-arrow-right"></i>  <a href="">County Sectors</a>
                                </li> <li>
                                    <i class="fa fa-arrow-right"></i>  <a href="">County Laws</a>
                                </li> <li>
                                    <i class="fa fa-arrow-right"></i>  <a href="">News and Speeches</a>
                                </li> <li>
                                    <i class="fa fa-arrow-right"></i>  <a href="">Tenders</a>
                                </li> <li>
                                    <i class="fa fa-arrow-right"></i>  <a href="">Downloads</a>
                                </li> <li>
                                    <i class="fa fa-arrow-right"></i>  <a href="">Emergency Services</a>
                                </li> <li>
                                    <i class="fa fa-arrow-right"></i>  <a href="">Jobs and Careers</a>
                                </li> <li>
                                    <i class="fa fa-arrow-right"></i>  <a href="">E-Payment</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="contact2-wrapper mb-30">
                        <h1 class="contact-title">Contact Us</h1>
                        <form action="http://bdevs.net/netaji/assets/mail.php" id="contact-form">
                            <div class="row">
                                <div class="col-xl-12 mb-20">
                                    <input name="name" placeholder="Name :" type="text">
                                </div>
                                <div class="col-xl-12 mb-30">
                                    <input name="email" placeholder="Email :" type="email">
                                </div>
                                <div class="col-xl-12 mb-35">
                                    <textarea name="message" cols="30" rows="10" placeholder="Mesage :" id="message"></textarea>
                                </div>
                                <div class="col-xl-12">
                                    <button class="btn" type="submit">Send message</button>
                                </div>
                            </div>
                            <p class="form-message"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-area-end -->

    <!-- map-area-start -->


    <!-- subscribe-area-end -->

    <!-- footer-area-start -->
@endsection
