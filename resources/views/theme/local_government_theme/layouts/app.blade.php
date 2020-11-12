<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Local Government </title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('theme/local/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="{{asset('theme/local/css/slick-theme.css')}}" rel="stylesheet"/>
    <!-- ICONS CSS -->
    <link href="{{asset('theme/local/css/font-awesome.css')}}" rel="stylesheet">
    <!-- ICONS CSS -->
    <link href="{{asset('theme/local/css/animation.css')}}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{asset('theme/local/css/prettyPhoto.css')}}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{asset('theme/local/css/component.css')}}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{asset('theme/local/css/jquery.bxslider.css')}}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{asset('theme/local/css/style5.css')}}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{asset('theme/local/css/demo.css')}}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{asset('theme/local/css/fig-hover.css')}}" rel="stylesheet">
    <!-- Typography CSS -->
    <link href="{{asset('theme/local/css/typography.css')}}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{asset('theme/local/css/style.css')}}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{asset('theme/local/css/component.css')}}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{asset('theme/local/css/shotcode.css')}}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="s{{asset('theme/local/css/svg-icon.css')}}" rel="stylesheet">
    <!-- Color CSS -->
    <link href="{{asset('theme/local/css/color.css')}}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{asset('theme/local/css/responsive.css')}}" rel="stylesheet">

</head>
<body class="demo-5">
<!--WRAPPER START-->
<div class="wrapper">
    @include('theme.local_government_theme.layouts.header')

    <main class="py-4">
        @yield('content')

    </main>
    <div class="city_requset_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="city_request_list">
                        <div class="city_request_row">
                            <span><i class="fa icon-question"></i></span>
                            <div class="city_request_text">
                                <span contenteditable="true">Recent</span>
                                <h4 contenteditable="true">Top Request</h4>
                            </div>
                        </div>
                        <div class="city_request_link">
                            <ul>
                                <li><a href="#" contenteditable="true">Pay a Parking Ticket</a></li>
                                <li><a href="#" contenteditable="true">Building Violation</a></li>
                                <li><a href="#">Affordable Housing</a></li>
                                <li><a href="#">Graffiti Removal</a></li>
                                <li><a href="#">Civil Service Exams</a></li>
                                <li><a href="#">Rodent Baiting</a></li>
                                <li class="margin0"><a href="#">Cleaning</a></li>
                                <li class="margin0"><a href="#">Uncleared Sidewalk</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="city_request_list">
                        <div class="city_request_row">
                            <span><i class="fa icon-shout"></i></span>
                            <div class="city_request_text">
                                <span>Recent</span>
                                <h4>Announcement</h4>
                            </div>
                        </div>
                        <div class="city_request_link">
                            <ul>
                                <li><a href="#">Pay a Parking Ticket</a></li>
                                <li><a href="#">Building Violation</a></li>
                                <li><a href="#">Affordable Housing</a></li>
                                <li><a href="#">Graffiti Removal</a></li>
                                <li><a href="#">Civil Service Exams</a></li>
                                <li><a href="#">Rodent Baiting</a></li>
                                <li class="margin0"><a href="#">Cleaning</a></li>
                                <li class="margin0"><a href="#">Uncleared Sidewalk</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="widget_wrap overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="widget_list">
                            <h4 class="widget_title">Find Us</h4>
                            <div class="widget_text">
                                <ul>
                                    <li><a href="#">2307 Beverley Rd</a></li>
                                    <li><a href="#">Brooklyn, New York 11226</a></li>
                                    <li><a href="#">United States.</a></li>
                                </ul>
                                <p>Open Monday to Saturday From 7h to 18h or talk to an expert 0712-0610-3314 – available 24/7</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="widget_list">
                                    <h4 class="widget_title">Explore</h4>
                                    <div class="widget_service">
                                        <ul>
                                            <li><a href="#">Online Services</a></li>
                                            <li><a href="#">Residents</a></li>
                                            <li><a href="#">Business</a></li>
                                            <li><a href="#">Government</a></li>
                                            <li><a href="#">Visiting</a></li>
                                            <li><a href="#">Employment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="widget_list">
                                    <h4 class="widget_title">Features</h4>
                                    <div class="widget_service">
                                        <ul>
                                            <li><a href="#">Online Services</a></li>
                                            <li><a href="#">Residents</a></li>
                                            <li><a href="#">Business</a></li>
                                            <li><a href="#">Government</a></li>
                                            <li><a href="#">Visiting</a></li>
                                            <li><a href="#">Employment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="widget_list">
                                    <h4 class="widget_title">Services</h4>
                                    <div class="widget_service">
                                        <ul>
                                            <li><a href="#">Online Services</a></li>
                                            <li><a href="#">Residents</a></li>
                                            <li><a href="#">Business</a></li>
                                            <li><a href="#">Government</a></li>
                                            <li><a href="#">Visiting</a></li>
                                            <li><a href="#">Employment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget_list">
                            <h4 class="widget_title">For Appointment</h4>
                            <div class="widget_text text2">
                                <ul>
                                    <li><a href="#">Monday<span>08 am - 3 pm</span></a></li>
                                    <li><a href="#">Tusday <span>08 am - 3 pm</span></a></li>
                                    <li><a href="#">Wednesfay<span>08 am - 3 pm</span></a></li>
                                    <li><a href="#">Thursday<span>08 am - 3 pm</span></a></li>
                                    <li><a href="#">FFriday <span>08 am - 3 pm</span></a></li>
                                    <li><a href="#">Saturday - Sunday<span>Closed</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="widget_copyright">
                        <div class="col-md-3 col-sm-6">
                            <div class="widget_logo">
                                <a href="#"><img src="{{asset('theme/local/images/widget-logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="copyright_text">
                                <p><span>Copyright © 2018 - 19 The Local City Municipal.</span> Designed and Developed by kodeforest</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="city_top_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!--WRAPPER END-->
<!--Jquery Library-->
<script src="{{asset('theme/local/js/jquery.js')}}"></script>
<!--Bootstrap core JavaScript-->
<script src="{{asset('theme/local/js/bootstrap.js')}}"></script>
<!--Slick Slider JavaScript-->
<script src="{{asset('theme/local/js/slick.min.js')}}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{asset('theme/local/js/jquery.prettyPhoto.js')}}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{asset('theme/local/js/jquery.bxslider.min.js')}}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{asset('theme/local/js/index.js')}}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{asset('theme/local/js/modernizr.custom.js')}}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{asset('theme/local/js/jquery.dlmenu.js')}}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{asset('theme/local/js/downCount.js')}}"></script>
<!--Counter up JavaScript-->
<script src="{{asset('theme/local/js/waypoints.js')}}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{asset('theme/local/js/waypoints-sticky.js')}}"></script>

<!--Custom JavaScript-->
<script src="{{asset('theme/local/js/custom.js')}}"></script>
<script>document.documentElement.className = 'js';</script>
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
