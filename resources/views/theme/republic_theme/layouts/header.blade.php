<!-- Start Header Style -->
<header id="header" class="htc-header">
    <!-- Start Header Top -->
    <div class="header__top bg-cat-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="logo">
                        @if(@$website_setting->logo_name)
                            <a href="{{url('home')}}"><img src="{{asset('images/'.@$website_setting->logo_name) }}" alt=""
                                                           style="height: 80px; width:auto;">
                                @if(@$website_setting->brand_name)
                                    <span style="color: {{@$website_setting->brand_color ?? ''}}" class="ml-3">{{@$website_setting->brand_name}}</span>
                                @endif
                            </a>
                        @else
                        <a href="{{url('home')}}"><img src="{{asset('theme/republic/images/logo/republic.png')}}" alt="logo"></a>
                       @endif
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
                                        @if(@$main_menu_items_count>0)
                                            @foreach(@$menu_items as $menu_item)
                                                @if(@$menu_item->menu_level == 1)
                                                    <li><a href="{{url(@$menu_item->page->slug)}}">{{@$menu_item->page->title}}</a></li>
                                                @else
                                                    @if(@$menu_item->menu_level == 2)
                                                        <li><a href="#">{{@$menu_item->page->title}}</a>
                                                            <ul>

                                                                @foreach(@$menu_item->sub_menus(@$menu_item->page->id) as $sub_menu)
                                                                    <li><a href="{{url(@$sub_menu->page->slug)}}">{{@$sub_menu->page->title}}</a></li>
                                                                @endforeach

                                                            </ul>
                                                        </li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                        <li>
                                            <a  href="{{ url('main') }}">Dashboard</a>
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
                        @if(@$main_menu_items_count>0)
                            @foreach(@$menu_items as $menu_item)
                                <li><a href="{{url(@$menu_item->page->slug)}}">{{@$menu_item->page->title}}</a></li>
                            @endforeach
                        @endif
                        <li><a href="#">pages</a>
                            <ul>

                                <li>
                                    <a href="{{url('gallery')}}">gallery</a>
                                </li>


                                <li>
                                    <a href="{{url('blog')}}">blog</a>
                                </li>


                            </ul>
                        </li>
                        <li>
                            <a  href="{{ url('main') }}">Dashboard</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Mobile-menu-area End -->
</header>
