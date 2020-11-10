@extends('layouts.app')
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
                                <h1>contact us</h1>
                                <ul>
                                    <li><a href="index.html">home <span>//</span></a></li>
                                    <li>contact us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcamb Area End -->
            <div class="contact-area ptb-90">
                <div class="container map-contact">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 text-center">
                            <div class="contact-from gray-bg">
                                <form id="contact-form" action="http://preview.hasthemes.com/republic/mail.php" method="post">
                                    <input name="name" type="text" placeholder="Name">
                                    <input name="email" type="text" placeholder="Email">
                                    <textarea name="message" placeholder="Your message"></textarea>
                                    <button class="submit" type="submit">
                                        <span>SUBMIT</span>
                                    </button>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="communication contact-from">
                                <div class="single-communication">
                                    <div class="communication-icon">
                                        <i class="zmdi zmdi-home"></i>
                                    </div>
                                    <div class="communication-text">
                                        <h3>Address:</h3>
                                        <p>Miata 309 S Main St,Stafford, KS 67578</p>
                                    </div>
                                </div>
                                <div class="single-communication">
                                    <div class="communication-icon">
                                        <i class="zmdi zmdi-phone-in-talk"></i>
                                    </div>
                                    <div class="communication-text">
                                        <h3>Phone:</h3>
                                        <p>0123 456 789   -   15 2368 4597</p>
                                    </div>
                                </div>
                                <div class="single-communication">
                                    <div class="communication-icon">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="communication-text">
                                        <h3>Fax:</h3>
                                        <p>0123 456 789   -   15 2368 4597</p>
                                    </div>
                                </div>
                                <div class="single-communication">
                                    <div class="communication-icon">
                                        <i class="zmdi zmdi-email"></i>
                                    </div>
                                    <div class="communication-text">
                                        <h3>Email:</h3>
                                        <p><a href="https://bootexperts.com/support/login.php">bootexperts.com/support/login.php</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-map">
                <div id="hastech"></div>
            </div>
@endsection
