<?php header('Access-Control-Allow-Origin: *'); ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta https-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Xolo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Xolo admin template, dashboard template, flat admin template, responsive admin template, web app (Laravel 8)">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="https://laravel.pixelstrap.com/xolo/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://laravel.pixelstrap.com/xolo/assets/images/favicon.png" type="image/x-icon">
    <title>Multiste</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
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
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/xolo/assets/css/page-builder.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/xolo/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/xolo/assets/css/style.css">
    <link id="color" rel="stylesheet" href="https://laravel.pixelstrap.com/xolo/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/xolo/assets/css/responsive.css">         </head>
<body>
<!-- Loader starts-->

<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right">
            <div class="main-header-left">
                <div class="logo-wrapper"><a href="{{URL('home')}}">  <H3>MULTISITE</H3></a></div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch">
                        <input id="sidebar-toggle" type="checkbox" data-toggle=".container" checked="checked"><span class="switch-state"></span>
                    </label>
                </div>
            </div>
            <div class="nav-right col pull-right right-menu">
                <ul class="nav-menus">
                    <li class="px-0">
                        <form class="form-inline search-form">
                            <input class="form-control-plaintext" placeholder="Search....."><i class="close-search" data-feather="x"></i>
                        </form><span class="mobile-search"><i data-feather="search"></i></span>
                    </li>
                    <li class="onhover-dropdown"><i data-feather="bell"></i>
                        <ul class="notification-dropdown onhover-show-div">
                            <li>
                                <h6 class="f-w-600">Notifications</h6><span class="f-12">You have 2 unread messages</span>
                            </li>
                            <li>
                                <p class="mb-0"><i class="fa fa-circle-o mr-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                            </li>
                            <li>
                                <p class="mb-0"><i class="fa fa-circle-o mr-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                            </li>
                            <li>
                                <p class="mb-0"><i class="fa fa-circle-o mr-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                            </li>
                            <li>
                                <p class="mb-0"><i class="fa fa-circle-o mr-3 font-warning"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                            </li>
                            <li class="bg-light txt-dark"><a href="#">All </a> notification</li>
                        </ul>
                    </li>
                    <li class="onhover-dropdown"><i data-feather="message-circle"></i>
                        <ul class="chat-dropdown onhover-show-div p-t-20 p-b-20">
                            <li>
                                <div class="media"><img class="img-fluid rounded-circle mr-3" src="https://laravel.pixelstrap.com/xolo/assets/images/user/2.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="media-body"><span class="f-w-600">Erica Hughes</span>
                                        <p class="f-12 mb-0 light-font">There are many variations of passages...</p>
                                        <p class="f-12 mb-0 font-primary">1 hr ago</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><img class="img-fluid rounded-circle mr-3" src="https://laravel.pixelstrap.com/xolo/assets/images/user/1.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="media-body"><span class="f-w-600">Kori Thomas</span>
                                        <p class="f-12 mb-0 light-font">There are many variations of passages...</p>
                                        <p class="f-12 mb-0 font-primary">58 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><img class="img-fluid rounded-circle mr-3" src="https://laravel.pixelstrap.com/xolo/assets/images/user/4.jpg" alt="">
                                    <div class="status-circle offline"></div>
                                    <div class="media-body"><span class="f-w-600">Ain Chavez</span>
                                        <p class="f-12 mb-0 light-font">There are many variations of passages...</p>
                                        <p class="f-12 mb-0 font-primary">32 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="light-font text-center">Mark all as read      </li>
                        </ul>
                    </li>
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                    <li class="theme-setting"><i data-feather="settings"></i></li>
                    <li class="onhover-dropdown px-0"><span class="media user-header"><img class="mr-2 rounded-circle img-35" src="https://laravel.pixelstrap.com/xolo/assets/images/dashboard/user.png" alt=""><span class="media-body"><span class="f-12 f-w-600">Elana Saint</span><span class="d-block">Admin</span></span></span>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><i data-feather="user"> </i>Profile</li>
                            <li class="f-w-600">Home</li>
                            <li class="f-12"><i data-feather="chevron-right"> </i>Inbox</li>
                            <li class="f-12"><i data-feather="chevron-right"> </i>Taskboard</li>
                            <li class="f-12"><i data-feather="chevron-right"> </i>Settings</li>
                            <li><i data-feather="log-in"></i>Log in  </li>
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

            <main class="py-4">
                <!--end menu-->
                @yield('content')
            </main>

        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2020 © Multisite.</p>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </footer>         </div>
</div>
<!-- latest jquery-->
<script src="https://laravel.pixelstrap.com/xolo/assets/js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap js-->
<script src="https://laravel.pixelstrap.com/xolo/assets/js/bootstrap/popper.min.js"></script>
<script src="https://laravel.pixelstrap.com/xolo/assets/js/bootstrap/bootstrap.js"></script>
<!-- feather icon js-->
<script src="https://laravel.pixelstrap.com/xolo/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="https://laravel.pixelstrap.com/xolo/assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="https://laravel.pixelstrap.com/xolo/assets/js/sidebar-menu.js"></script>
<script src="https://laravel.pixelstrap.com/xolo/assets/js/config.js"></script>
<!-- Plugins JS start-->
<script src="https://laravel.pixelstrap.com/xolo/assets/js/editor/ckeditor/ckeditor.js"></script>
<script src="https://laravel.pixelstrap.com/xolo/assets/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="https://laravel.pixelstrap.com/xolo/assets/js/jquery.ui.min.js"></script>
<script src="https://laravel.pixelstrap.com/xolo/assets/js/page-builder/jquery.grideditor.min.js"></script>
<script src="https://laravel.pixelstrap.com/xolo/assets/js/page-builder/page-builder-custom.js"></script>
<script src="https://laravel.pixelstrap.com/xolo/assets/js/tooltip-init.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="https://laravel.pixelstrap.com/xolo/assets/js/script.js"></script>
<script src="https://laravel.pixelstrap.com/xolo/assets/js/theme-customizer/customizer.js"></script>
<!-- login js-->
<!-- Plugin used -->   </body>
</html>
