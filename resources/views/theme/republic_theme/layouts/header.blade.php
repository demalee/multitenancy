<!-- Start Header Style -->
<header id="header" class="htc-header">
    <!-- Start Header Top -->
    <div class="header__top bg-cat-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="logo">
                        <a href="{{url('home')}}"><img src="{{asset('theme/republic/images/logo/republic.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="htc__address">
                        <div class="address__icon">
                            <i class="zmdi zmdi-phone"></i>
                        </div>
                        <div class="address">
                            <p>Call us for any help</p>
                            <a href="phone:+1122546665">+11 22 54 6665</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="ml-header-top transparent--header hidden-xs">
        <div class="htc__mainmenu">
            <div class="container">
                <div class="row">
                    <div class="header__wrap">
                        <div class="col-md-10 col-lg-10 col-sm-10">
                            <div class="mainmenu-content">
                                <nav class="mainmenu__nav">
                                    <ul class="main__menu">
                                        <li class="active"><a href="{{url('home')}}">Home</a></li>
                                        <li><a href="{{url('about')}}">About</a></li>
                                        <li><a href="{{url('services')}}">services</a></li>

                                        <li><a href="{{url('contact')}}">contact</a></li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li>
                                                    <a href="{{url('about')}}">about us</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('gallery')}}">gallery</a>
                                                </li>


                                                <li>
                                                    <a href="{{url('blog')}}">blog sidebar</a>
                                                </li>

                                                <li>
                                                    <a href="{{url('contact')}}">contact</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-2">
                            <div class="htc__toggle__search">
                                <!-- Start Search Area -->
                                <div class="cart__search">
                                    <ul class="cart__search__list">
                                        <li class="search search__open"><a href="#"><i class="zmdi zmdi-search"></i></a></li>
                                    </ul>
                                </div>
                                <!-- End Search Area -->
                                <!-- Start Toggle Menu -->
                                <div class="visible-mobile-menu-off">
                                    <div class="toggle-menu"><i class="zmdi zmdi-menu"></i></div>
                                    <div class="site-info-wrap">
                                        <div class="li-col-full">
                                            <span class="close icon-clear pull-right"><i class="zmdi zmdi-close"></i></span>
                                            <em class="color main-font">Default welcome msg!</em>
                                        </div>
                                        <div class="toggle-wrap">
                                            <!-- Start Single Menu -->
                                            <ul class="toggle-dropdown-menu ">
                                                <li><h4 class="megamenu__subtitle"><span>My Account</span></h4></li>
                                                <li><a href="#">What we do</a></li>
                                                <li><a href="#">Help</a></li>
                                                <li><a href="#">Compare</a></li>
                                                <li><a href="#">Jobs</a></li>
                                            </ul>
                                            <!-- End Single Menu -->
                                            <!-- Start Single Menu -->
                                            <ul class="toggle-dropdown-menu ">
                                                <li><h4 class="megamenu__subtitle"><span>Language</span></h4></li>
                                                <li><a href="#"><img src="{{asset('theme/republic/images/ser-img/1.png')}}" alt="flag images"><span>English</span></a></li>
                                                <li><a href="#"><img src="{{asset('theme/republic/images/ser-img/2.png')}}" alt="flag images"><span>German</span></a></li>
                                                <li><a href="#"><img src="{{asset('theme/republic/images/ser-img/3.png')}}" alt="flag images"><span>Spanish</span></a></li>
                                                <li><a href="#"><img src="{{asset('theme/republic/images/ser-img/4.png')}}" alt="flag images"><span>Russian</span></a></li>
                                            </ul>
                                            <!-- End Single Menu -->
                                            <!-- Start Single Menu -->
                                            <ul class="toggle-dropdown-menu ">
                                                <li><h4 class="megamenu__subtitle"><span>Currency</span></h4></li>
                                                <li><a href="#">GBP - British</a></li>
                                                <li><a href="#">EUR - Euro</a></li>
                                                <li><a href="#">USD - US Dollar</a></li>
                                            </ul>
                                            <!-- End Single Menu -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Toggle Menu -->
                            </div>
                            <!-- Start search menu -->
                            <div class="search__area">
                                <div class="container" >
                                    <div class="row" >
                                        <div class="col-md-12" >
                                            <div class="search__inner">
                                                <form action="#" method="get">
                                                    <input placeholder="Search here... " type="text">
                                                    <button type="submit"></button>
                                                </form>
                                                <div class="search__close__btn">
                                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End search menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
    <!-- Mobile-menu-area start -->
    <div class="mobile-menu-area hidden-md hidden-lg hidden-sm">
        <div class="fluid-container mobile-menu-container">
            <div class="mobile-logo"><a href="{{url('home')}}"><img src="{{asset('theme/republic/images/logo/republic.png')}}" alt="Mobile logo"></a></div>
            <div class="mobile-menu clearfix">
                <nav id="mobile_dropdown">
                    <ul class="">
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('about-us')}}">About</a></li>
                        <li><a href="{{url('service')}}">services</a></li>

                        <li><a href="{{url('contact')}}">contact</a></li>
                        <li><a href="#">pages</a>
                            <ul>
                                <li>
                                    <a href="{{url('about-us')}}">about us</a>
                                </li>
                                <li>
                                    <a href="{{url('gallery')}}">gallery</a>
                                </li>


                                <li>
                                    <a href="{{url('blog')}}">blog</a>
                                </li>

                                <li>
                                    <a href="{{url('contact')}}">contact</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Mobile-menu-area End -->
</header>
