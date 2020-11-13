<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @if($website_setting)
            @if($website_setting->brand_name)
                {{@$website_setting->brand_name}}
            @else
                Republic
            @endif
        @endif</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->

    @if($website_setting)
        @if($website_setting->favicon)
            <link rel="shortcut icon" type="image/{{explode('.',$website_setting->favicon)[1]}}" href="{{asset('images/'.$website_setting->favicon)}}" style="height: 32px;width: 32px">
        @else
            <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme/republic/images/favicon.ico')}}">
        @endif
    @endif
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset('theme/republic/css/bootstrap.min.css')}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset('theme/republic/css/core.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset('theme/republic/css/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset('theme/republic/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('theme/republic/css/responsive.css')}}">
    <!-- User style -->
    <link rel="stylesheet" href="{{asset('theme/republic/css/custom.css')}}">


    <!-- Modernizr JS -->
    <script src="{{asset('theme/republic/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

@include('theme.republic_theme.layouts.header')

<main>
    @yield('content')

</main>
<!-- Body main wrapper start -->
<div class="wrapper">
    <footer class="htc__footer">
        <div class="footer__container bg-cat-3">
            <div class="container">
                <!-- Start Newsletter area -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="news__letter">
                            <div class="news__letter__title">
                                <h2>Newsletter :</h2>
                                <p>Lorem Ipsum is simply typesetting industry.</p>
                            </div>

                            <div id="mc_embed_signup">
                                <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll" class="mc-form news__letter__btn">
                                        <input type="email" value="" name="EMAIL" class="email" placeholder="Your e-mail address" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <div class="clear send__btn">
                                            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Newsletter area -->
                <!-- Start Footer widget Area -->
                <div class="row">
                    <div class="footer__widget__wrap clearfix">
                        <!-- Start Single Widget -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="footer xs-mt-0">
                                <div class="footer__widget">
                                    <div class="ftr--logo">
                                        <a href="{{url('home')}}">
                                            <img src="{{asset('theme/republic/images/logo/republic.png')}}" alt="logo">
                                        </a>
                                    </div>
                                    <p class="ft-dtl">At vero eos et accusamu iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum delenitid dignisdu blanditiis praesentium voluptatum.</p>
                                    <ul class="social__icon">
                                        <li><a href="https://www.linkedin.com/"><i class="zmdi zmdi-linkedin"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        <li><a href="https://www.tumblr.com/"><i class="zmdi zmdi-tumblr"></i></a></li>
                                        <li><a href="https://plus.google.com/"><i class="zmdi zmdi-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="footer">
                                <div class="footer__widget">
                                    <h2 class="footer__title">Supports Links</h2>
                                    <div class="footer__inner footer--display">
                                        <ul class="footer__menu">
                                            <li><a href="#">Our History</a></li>
                                            <li><a href="#">Our Team Member</a></li>
                                            <li><a href="#">Success News</a></li>
                                            <li><a href="#">All News</a></li>
                                            <li><a href="#">On going Program</a></li>
                                            <li><a href="#">Help & Support</a></li>
                                        </ul>
                                        <ul class="footer__menu">
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Economy</a></li>
                                            <li><a href="#">Power</a></li>
                                            <li><a href="#">Gas Prograss</a></li>
                                            <li><a href="#">People Development</a></li>
                                            <li><a href="#">Skill Development</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="footer">
                                <div class="footer__widget">
                                    <h2 class="footer__title">Contact us</h2>
                                    <div class="footer__inner">
                                        <div class="ft__address">
                                            <p><span>Phone :</span>
                                                <a href="phone:+01122223345">+011 2222 3345</a>
                                                <a href="phone:+01122223345">+011 2222 3345</a>
                                            </p>
                                        </div>
                                        <div class="ft__address">
                                            <p><span>E-mail :</span>
                                                <a href="mailto:www.yourmail.com">www.yourmail.com</a>
                                                <a href="mailto:www.yourmail.com">www.yourmail.com</a>
                                            </p>
                                        </div>
                                        <div class="ft__address">
                                            <p><span>Address :</span>
                                                77 seventh evenue, USA <span class="dis--block">Rose Street. 12225.</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
                <!-- End Footer widget Area -->
            </div>
        </div>
        <div class="cpoyright bg-cat-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="cpoyright__content">
                            <div class="copyright__inner">
                                <p>
                                    Copyright © 2017 <a href="https://devitems.com/" target="_blank">DevItems</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->
</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="{{asset('theme/republic/js/vendor/jquery-1.12.0.min.js')}}"></script>
<!-- Bootstrap framework js -->
<script src="{{asset('theme/republic/js/bootstrap.min.js')}}"></script>
<!-- ajax-mail js -->
<script src="{{asset('theme/republic/js/ajax-mail.js')}}"></script>
<!-- All js plugins included in this file. -->
<script src="{{asset('theme/republic/js/plugins.js')}}"></script>
<script src="{{asset('theme/republic/js/slick.min.js')}}"></script>
<!-- Waypoints.min.js. -->
<script src="{{asset('theme/republic/js/waypoints.min.js')}}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{asset('theme/republic/js/main.js')}}"></script>
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
