<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @if(@$website_setting)
            @if(@$website_setting->brand_name)
                {{@$website_setting->brand_name}}
            @endif
        @else
            Netaji
        @endif
        </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    @if(@$website_setting)
        @if(@$website_setting->favicon)
            <link rel="shortcut icon" type="image/{{explode('.',@$website_setting->favicon)[1]}}" href="{{asset('images/'.@$website_setting->favicon)}}" style="height: 32px;width: 32px">

        @endif
    @else
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme/netaji/img/favicon.ico')}}">
    @endif

    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="theme/netaji/css/bootstrap.min.css">
    <link rel="stylesheet" href="theme/netaji/css/owl.carousel.min.css">
    <link rel="stylesheet" href="theme/netaji/css/animate.min.css">
    <link rel="stylesheet" href="theme/netaji/css/magnific-popup.css">
    <link rel="stylesheet" href="theme/netaji/css/meanmenu.css">
    <link rel="stylesheet" href="theme/netaji/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="theme/netaji/css/slick.css">
    <link rel="stylesheet" href="theme/netaji/css/themify-icons.css">
    <link rel="stylesheet" href="theme/netaji/css/default.css">
    <link rel="stylesheet" href="theme/netaji/css/style.css">
    <link rel="stylesheet" href="theme/netaji/css/responsive.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>-->
{{--<![endif]-->--}}

@include('theme/netaji_theme/layouts.header')

<main>
    @yield('content')

</main>

<!-- header-start -->
<!-- footer-area-start -->
<footer>
    <div class="footer-area pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-wrapper mb-30">
                        <div class="footer-text">
                            <h3 contenteditable="true">For any additional inquiries please feel free to send us an e-mail or call</h3>
                            <p><a href="http://bdevs.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="deadabaeaeb1acaa9eb9b3bfb7b2f0bdb1b3">[email&#160;protected]</a></p>
                            <span contenteditable="true">+000 (123) 456 77</span>
                        </div>
                        <div class="footer-info">
                            <h3 contenteditable="true">Location</h3>
                            <p contenteditable="true">795 Folsom Avenue, Suite 600 <br> San Francisco, CA 94107</p>
                        </div>
                        <div class="footer-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-wrapper mb-30">
                        <h3 class="footer-title" contenteditable="true">Recent News</h3>
                        <ul class="footer-news">
                            <li>
                                <div class="footer-news-img">
                                    <img src="{{asset('theme/netaji/img/footer/1.png')}}" alt="" />
                                </div>
                                <div class="footer-news-text">
                                    <h4><a href="#" contenteditable="true">Designing The Invisible Things I Learned Designing.</a></h4>
                                    <span contenteditable="true">05 december 2018</span>
                                </div>
                            </li>
                            <li>
                                <div class="footer-news-img">
                                    <img src="{{asset('theme/netaji/img/footer/2.png')}}" alt="" />
                                </div>
                                <div class="footer-news-text">
                                    <h4><a href="#" contenteditable="true"> The Complete Anatomy Of The Gutenberg WordPress.</a></h4>
                                    <span contenteditable="true">07 december 2018</span>
                                </div>
                            </li>
                            <li>
                                <div class="footer-news-img">
                                    <img src="{{asset('theme/netaji/img/footer/3.png')}}" alt="" />
                                </div>
                                <div class="footer-news-text">
                                    <h4><a href="#" contenteditable="true">Everything You Need To Know About Alignment Flex.</a></h4>
                                    <span contenteditable="true">03 august 2018</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-wrapper pl-15 mb-30">
                        <h3 class="footer-title">Follow Instagram</h3>
                        <ul class="footer-img">
                            <li><a href="#"><img alt="" src="{{asset('theme/netaji/img/instagram/1.jpg')}}"></a></li>
                            <li><a href="#"><img alt="" src="{{asset('theme/netaji/img/instagram/2.jpg')}}"></a></li>
                            <li><a href="#"><img alt="" src="{{asset('theme/netaji/img/instagram/3.jpg')}}"></a></li>
                            <li><a href="#"><img alt="" src="{{asset('theme/netaji/img/instagram/4.jpg')}}"></a></li>
                            <li><a href="#"><img alt="" src="{{asset('theme/netaji/img/instagram/5.jpg')}}"></a></li>
                            <li><a href="#"><img alt="" src="{{asset('theme/netaji/img/instagram/6.jpg')}}"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area pt-25 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="copyright">
                        <p><i class="far fa-copyright" contenteditable="true"></i> 2018 Your Company. All Rights Reserved. Designed By <a href="#">BDevs.</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <ul class="footer-footer-link text-lg-right">
                        <li><a href="#" contenteditable="true">Privacy & Policy </a></li>
                        <li><a href="#" contenteditable="true"> Setting </a></li>
                        <li><a href="#" contenteditable="true"> Contact Us </a></li>
                        <li><a href="#" contenteditable="true">Blog & News</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->
<!-- JS here -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="theme/netaji/js/vendor/jquery-1.12.4.min.js"></script>
<script src="theme/netaji/js/waypoints.min.js"></script>
<script src="theme/netaji/js/jquery.counterup.min.js"></script>
<script src="theme/netaji/js/bootstrap.min.js"></script>
<script src="theme/netaji/js/owl.carousel.min.js"></script>
<script src="theme/netaji/js/isotope.pkgd.min.js"></script>
<script src="theme/netaji/js/jquery.meanmenu.min.js"></script>
<script src="theme/netaji/js/slick.min.js"></script>
<script src="theme/netaji/js/ajax-form.js"></script>
<script src="theme/netaji/js/wow.min.js"></script>
<script src="theme/netaji/js/jquery.scrollUp.min.js"></script>
<script src="theme/netaji/js/imagesloaded.pkgd.min.js"></script>
<script src="theme/netaji/js/jquery.magnific-popup.min.js"></script>
<script src="theme/netaji/js/plugins.js"></script>
<script src="theme/netaji/js/main.js"></script>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'editor1',
        {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
</script>
</body>

</html>