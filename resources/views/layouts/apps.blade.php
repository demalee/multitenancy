<?php header('Access-Control-Allow-Origin: *'); ?>

    <!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Xolo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Xolo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Multisite</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/prism.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
{{--    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">--}}
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/custom.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap css-->
    <!-- App css-->
    <link id="color" rel="stylesheet" href="https://laravel.pixelstrap.com/xolo/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/xolo/assets/css/responsive.css">  </head>
<link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/xolo/assets/css/fontawesome.css">
<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/xolo/assets/css/icofont.css">
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/xolo/assets/css/themify.css">
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/xolo/assets/css/flag-icon.css">
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/xolo/assets/css/feather-icon.css">
<!-- Plugins css start-->
<!-- Plugins css Ends-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/xolo/assets/css/select2.css">
<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/xolo/assets/css/bootstrap.css">
<!-- App css-->
<link id="color" rel="stylesheet" href="https://laravel.pixelstrap.com/xolo/assets/css/color-1.css" media="screen">
<link rel="stylesheet" href="/IconPicker/dist/fontawesome-5.11.2/css/all.min.css">
<link rel="stylesheet" href="/IconPicker/dist/iconpicker-1.5.0.css">
<link rel="stylesheet" href="{{asset('css/steps.css')}}">
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
<body>
<!-- Loader starts-->
{{--<div class="loader-wrapper">--}}
{{--    <div class="theme-loader"></div>--}}
{{--</div>--}}
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right">
            <div class="main-header-left">
                <div class="logo-wrapper"><a href="{{URL('home')}}">  <H4 style="color: black">MULTISITE</H4></a></div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch">
                        <input id="sidebar-toggle" type="checkbox" data-toggle=".container" checked="checked"><span class="switch-state"></span>
                    </label>
                </div>
            </div>
            <div class="nav-right col pull-right right-menu">
                <ul style="color: black">
                    <li class="px-0"  style="color: black"><a href="{{url('/')}}#services-section"><span  style="color: black">Services</span></a>
                    </li>
                    <li class="px-0"  style="color: black">
                        <a href="{{url('/')}}#why-us"> <span  style="color: black">About Us</span></a>
                    </li>
                    <li class="px-0"  style="color: black">
                        <a href="{{url('/')}}#home" ><span  style="color: black">Contact Us</a>
                    </li>

{{--                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>--}}
                    <li class="theme-setting"><i data-feather="settings"></i></li>

                    <li class="onhover-dropdown px-0"><span class="media user-header"><img class="mr-2 rounded-circle img-35" src="../assets/images/dashboard/user.png" alt=""><span class="media-body"><span class="f-12 f-w-600">Elana Saint</span><span class="d-block">Admin</span></span></span>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><i data-feather="user"> </i>Profile</li>
                            <li class="f-w-600"><a href="{{url('/')}}"> Home</a></li>

                            <li class="f-12">
                                <form class="" action="{{ route('logout') }}" method="post" id="logout_form">
                                    @csrf
                                </form>

                                <a href="#"  type="submit" onclick="logout()"><b><i data-feather="log-in"></i>{{ __('Logout') }}</b></a>

                                <script type="text/javascript" defer>
                                    function logout() {
                                        document.getElementById('logout_form').submit();
                                    }
                                </script>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
        </div>
    </div>         <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper sidebar-icon">
        <nav-menus></nav-menus>
        @include('layouts.header')
        <div class="page-body">
            <main class="py-4">
                <div class="row">
                    <div class="col-sm-12">
                        @include('layouts.alerts')
                    </div>
                </div>
                <!--end menu-->
                @yield('content')
            </main></div>
    <!-- footer start-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 footer-copyright">
                    <p class="mb-0">Copyright 2020 © Multisite All rights reserved.</p>
                </div>

            </div>
        </div>
    </footer>         </div>
</div>
<script src="../assets/js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap js-->
<script src="../assets/js/bootstrap/popper.min.js"></script>
<script src="../assets/js/bootstrap/bootstrap.js"></script>
<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js"></script>
<script src="../assets/js/config.js"></script>
<!-- Plugins JS start-->
<!-- Bootstrap js-->
<script src="../assets/js/script.js"></script>
<script src="../assets/js/theme-customizer/customizer.js"></script>
<script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
<script src="../assets/js/prism/prism.min.js"></script>
<script src="../assets/js/clipboard/clipboard.min.js"></script>
<script src="../assets/js/counter/jquery.waypoints.min.js"></script>
<script src="../assets/js/counter/jquery.counterup.min.js"></script>
<script src="../assets/js/counter/counter-custom.js"></script>
<script src="../assets/js/custom-card/custom-card.js"></script>
<script src="../assets/js/dashboard/dashboard_4.js"></script>
<script src="../assets/js/tooltip-init.js"></script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script src="{{asset('js/select2.min.js')}}" />
<script src="{{asset('js/select-custom.js')}}" />
<script !src="">
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
        $('.js-example-basic-single').select2();
    });
</script>
<!-- Plugins JS Ends-->
<!-- Theme js-->

   </body>
</html>
