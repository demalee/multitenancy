<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        @if($website_setting)
            @if($website_setting->brand_name)
                {{@$website_setting->brand_name}}
            @else
                Political & Election
            @endif
        @endif
        </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
   @if($website_setting)
       @if($website_setting->favicon)
            <link rel="shortcut icon" type="image/{{explode('.',$website_setting->favicon)[1]}}" href="{{asset('images/'.$website_setting->favicon)}}" style="height: 32px;width: 32px">
           @else
            <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme/political/assets/images/favicon.png')}}">
           @endif
    @endif
    <link rel="stylesheet" href="{{asset('theme/political/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/political/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('theme/political/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/political/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/political/assets/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('theme/political/assets/css/style.css')}}">
</head>
<body class="body-padding">
<!-- preloader start -->
{{--<div id="loading">--}}
{{--    <div id="loading-center">--}}
{{--        <div id="loading-center-absolute">--}}
{{--            <div class="object" id="object_one"></div>--}}
{{--            <div class="object" id="object_two"></div>--}}
{{--            <div class="object" id="object_three"></div>--}}
{{--            <div class="object" id="object_four"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- preloader end -->
@include('theme.political_theme.layouts.header')

<main class="py-4">
    @yield('content')

</main>

<!-- Start Header -->
<!-- start footer section -->
<footer class="footer-section">
    <div class="footer-top section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="widget">
                        <a class="navbar-brand logo" href="{{url('home')}}"><img src="{{asset('theme/political/assets/images/logo/02.png')}}" alt="logo"></a>
                        <p>Globally brand stand-alone processes and enable methods of empowerment. Efficient provide access to world wide methods vis-a-vis revolution.</p>
                        <ul class="contact-info">
                            <li><i class="fa fa-map-marker"></i>Rodney Square,Wilmington USA</li>
                            <li><i class="fa fa-phone"></i>4588 957 8457</li>
                            <li><i class="fa fa-envelope"></i>contact@yourmail.com</li>
                        </ul>
                        <ul class="social-media">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="widget">
                        <h5>Recent News</h5>
                        <div class="small-post-list">
                            <div class="post-item">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('theme/political/assets/images/small-thumb/01.jpg')}}" alt="thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="#">Holisticly fashion multimedia based synergy vis-a-vis granular.</a>
                                    <ul class="post-meta">
                                        <li>26 March, 2020</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('theme/political/assets/images/small-thumb/02.jpg')}}" alt="thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="#">Holisticly fashion multimedia based synergy vis-a-vis granular.</a>
                                    <ul class="post-meta">
                                        <li>26 March, 2020</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('theme/political/assets/images/small-thumb/03.jpg')}}" alt="thumb"></a>
                                </div>
                                <div class="post-content">
                                    <a href="#">Holisticly fashion multimedia based synergy vis-a-vis granular.</a>
                                    <ul class="post-meta">
                                        <li>26 March, 2020</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="widget">
                        <h5>Recent Tweets</h5>
                        <div class="tweet-list">
                            <div class="tweet-item">
                                <div class="tweet-thumb">
                                    <a href="#"><img src="{{asset('theme/political/assets/images/tweet/01.png')}}" alt="thumb"></a>
                                </div>
                                <div class="tweet-content">
                                    <a class="name" href="#">Stella Gabriella <span>@stellagabriella</span></a>
                                    <p>Holisticly fabricate state of the art growth. <a href="#">#webenabled</a> band: <a href="#">stella.org/your-voice.</a></p>
                                </div>
                            </div>
                            <div class="tweet-item">
                                <div class="tweet-thumb">
                                    <a href="#"><img src="{{asset('theme/political/assets/images/tweet/01.png')}}" alt="thumb"></a>
                                </div>
                                <div class="tweet-content">
                                    <a class="name" href="#">Stella Gabriella <span>@stellagabriella</span></a>
                                    <p>Holisticly fabricate state of the art growth. <a href="#">#webenabled</a> band: <a href="#">stella.org/your-voice.</a></p>
                                </div>
                            </div>
                            <div class="tweet-item">
                                <div class="tweet-thumb">
                                    <a href="#"><img src="{{asset('theme/political/assets/images/tweet/01.png')}}" alt="thumb"></a>
                                </div>
                                <div class="tweet-content">
                                    <a class="name" href="#">Stella Gabriella <span>@stellagabriella</span></a>
                                    <p>Holisticly fabricate state of the art growth. <a href="#">#webenabled</a> band: <a href="#">stella.org/your-voice.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2020 <a href="#">Neta</a>Designed By <a href="https://themeforest.net/user/Labartisan/portfolio" target="_blank">Labartisan</a></p>
    </div>
</footer>
<!-- end footer section -->



<script src='{{asset('theme/political/assets/js/plugins.js')}}'></script>
<script src='{{asset('theme/political/theme/political/assets/js/function.js')}}'></script>
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
