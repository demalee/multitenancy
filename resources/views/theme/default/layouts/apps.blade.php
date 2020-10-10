<!doctype html>
<html class="no-js" lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Agriculture | Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="{{ url($THEME_CSS.'main.css') }}">
</head>
<body>

<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/loder.png" alt="">
            </div>
        </div>
    </div>
</div>



<main class="py-4">
    @include('theme.default.layouts.header')
</main>
@yield('content')

<footer>
    <div class="footer-wrappper">

        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">

                                <div class="footer-logo mb-25">
                                    <a href="index-2.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>The information is also part of the MF Rural, where you can find news,
                                            quotes, technological information and others, in addition.</p>
                                    </div>
                                </div>

                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">Design & creatives</a></li>
                                    <li><a href="#">Telecommunication</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Programing</a></li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href="#">Design & creatives</a></li>
                                    <li><a href="#">Telecommunication</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Programing</a></li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>
                                    Copyright &copy;<script data-cfasync="false"
                                                            src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                    <script>document.write(new Date().getFullYear());</script>
                                    All rights reserved | This template is made with <i class="fa fa-heart"
                                                                                        aria-hidden="true"></i> by <a
                                        href="https://colorlib.com/" target="_blank">Colorlib</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>

<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<script src="{{url($THEME_JS."vendor/modernizr-3.5.0.min.js")}}"></script>

<script src="{{url($THEME_JS."vendor/jquery-1.12.4.min.js")}}"></script>
<script src="{{url($THEME_JS."popper.min.js")}}"></script>
<script src="{{url($THEME_JS."bootstrap.min.js")}}"></script>

<script src="{{url($THEME_JS."jquery.slicknav.min.js")}}"></script>

<script src="{{url($THEME_JS."owl.carousel.min.js")}}"></script>
<script src="{{url($THEME_JS."slick.min.js")}}"></script>

<script src="{{url($THEME_JS."wow.min.js")}}"></script>
<script src="{{url($THEME_JS."animated.headline.js")}}"></script>
<script src="{{url($THEME_JS."jquery.magnific-popup.js")}}"></script>

<script src="{{url($THEME_JS."gijgo.min.js")}}"></script>

<script src="{{url($THEME_JS."jquery.nice-select.min.js")}}"></script>
<script src="{{url($THEME_JS."jquery.sticky.js")}}"></script>

<script src="{{url($THEME_JS."jquery.barfiller.js")}}"></script>

<script src="{{url($THEME_JS."jquery.counterup.min.js")}}"></script>
<script src="{{url($THEME_JS."waypoints.min.js")}}"></script>
<script src="{{url($THEME_JS."jquery.countdown.min.js")}}"></script>
<script src="{{url($THEME_JS."hover-direction-snake.min.js")}}"></script>

<script src="{{url($THEME_JS."contact.js")}}"></script>
<script src="{{url($THEME_JS."jquery.form.js")}}"></script>
<script src="{{url($THEME_JS."jquery.validate.min.js")}}"></script>
<script src="{{url($THEME_JS."mail-script.js")}}"></script>
<script src="{{url($THEME_JS."jquery.ajaxchimp.min.js")}}"></script>

<script src="{{url($THEME_JS."plugins.js")}}"></script>
<script src="{{url($THEME_JS."main.js")}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
