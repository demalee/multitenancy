<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('our_theme/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('our_theme/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('our_theme/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('our_theme/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('our_theme/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('our_theme/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('our_theme/css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('our_theme/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('our_theme/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('our_theme/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('our_theme/css/style.css')}}">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <div class="border-bottom top-bar py-2 bg-dark" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">
                        <span class="mr-3"><strong class="text-white">Phone:</strong> <a href="tel://#">+254 727 866 057</a></span>
                        <span><strong class="text-white">Email:</strong> <a href="#">info@berrycom.co.ke</a></span>
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="social-media">
                        <li><a href="#" class="p-2"><span class="icon-facebook"></span></a></li>
                        <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
                        <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
                        <li><a href="#" class="p-2"><span class="icon-linkedin"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('our_layouts/layouts.header2')
    <main class="py-4">

        @yield('content')
    </main>
    <a href="{{url('login')}}" class="bg-primary py-5 d-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md10"><h2 class="text-white">Let's Get Started</h2></div>
            </div>
        </div>
    </a>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-5">
                            <h2 class="footer-heading mb-4">About Us</h2>
                            <p>Enjoy creating your unique and customizable website with us.</p>
                        </div>
                        <div class="col-md-3 ml-auto">
                            <h2 class="footer-heading mb-4">Features</h2>
                            <ul class="list-unstyled">
                                <li><a href="#home">How it Works</a></li>
                                <li><a href="{{url('steps')}}">Steps</a></li>

                                <li><a href="#">Services</a></li>
                                <li><a href="#why-us">Why us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h2 class="footer-heading mb-4">Follow Us</h2>
                            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                    <form action="#" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Multisite
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

</div> <!-- .site-wrap -->

<script src="{{asset('our_theme/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('our_theme/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('our_theme/js/jquery-ui.js')}}"></script>
<script src="{{asset('our_theme/js/popper.min.js')}}"></script>
<script src="{{asset('our_theme/js/bootstrap.min.js')}}"></script>
<script src="{{asset('our_theme/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('our_theme/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('our_theme/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('our_theme/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('our_theme/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('our_theme/js/aos.js')}}"></script>
<script src="{{asset('our_theme/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('our_theme/js/jquery.sticky.js')}}"></script>

<script src="{{asset('our_theme/js/typed.js')}}"></script>
<script>
    var typed = new Typed('.typed-words', {
        strings: ["Web Apps"," WordPress"," Mobile Apps"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
    });
</script>

<script src="{{asset('our_theme/js/main.js')}}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>

</html>
