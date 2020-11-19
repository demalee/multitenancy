
<header class="style1">
    <div class="notification-box">
        <div class="container">
            <div class="notifecation-message"><strong>GET INCLUDED:</strong> Join The party as we stand for Civil Rights. <a href="#" title="" itemprop="url">Make A Member Today.</a></div>
            <span class="notification-close-btn brd-rd5"><i class="fa fa-close"></i></span>
        </div>
    </div>
    <div class="header-top">
        <div class="container">
            <div class="header-top-inner">
                <div class="logo">
                    @if(@$website_setting->logo_name)
                        <a href="{{url('home')}}"><img src="{{asset('images/'.@$website_setting->logo_name) }}" alt=""
                                                       style="height: 80px; width:auto;">
                            @if(@$website_setting->brand_name)
                                <span style="color: {{@$website_setting->brand_color ?? ''}}" class="ml-3">{{@$website_setting->brand_name}}</span>
                            @endif
                        </a>
                    @else
                        <a href="{{url('home')}}" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/logo.png')}}" alt="logo.png" itemprop="image"></a>
                @endif
                </div>
                <div class="top-links">
                    <a href="#" title=""><i class="fa fa-sign-in theme-clr"></i> Login</a>
                    <a href="#" title=""><i class="fa fa-user theme-clr"></i> Sign Up</a>
                </div>
                <a class="brd-rd30 theme-btn theme-bg" href="{{url('donate-now')}}" title="" itemprop="url">DONATE</a>
                <div class="top-links">
                    <a href="{{url('become-volunteer')}}" title="" itemprop="url">BECOME A MEMBER</a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-wrapper">
        <div class="container">
            <nav class="brd-rd5 theme-bg">
                <div>
                    <ul>
                        @if(@$main_menu_items_count>0)
                            @foreach(@$menu_items as $menu_item)
                                @if(@$menu_item->menu_level == 1)
                                    <li><a href="{{url(@$menu_item->page->slug)}}">{{@$menu_item->page->title}}</a></li>
                                @else
                                    @if(@$menu_item->menu_level == 2)
                                        <li><a href="#">{{@$menu_item->page->title}}</a>
                                            <ul class="child">

                                                @foreach(@$menu_item->sub_menus(@$menu_item->page->id) as $sub_menu)
                                                    <li><a href="{{url(@$sub_menu->page->slug)}}">{{@$sub_menu->page->title}}</a></li>
                                                @endforeach

                                            </ul>
                                        </li>
                                    @endif
                                @endif
                            @endforeach
                        @endif

                        <li><a href="{{url('main')}}" title="" itemprop="url">DASHBOARD</a>

                        </li>
                    </ul>
                </div>
                <div class="header-search-wrap">
                    <a href="#" title="" itemprop="url"><i class="fa fa-search"></i> SEARCH</a>
                    <div class="header-search theme-bg">
                        <span class="search-close-btn"><i class="fa fa-close"></i></span>
                        <form>
                            <input type="text" placeholder="Search here...">
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header><!-- Header Style 1 -->
<div class="res-header">
    <div class="res-header-top">
        <div class="res-top-links">
            <a href="#" title="" itemprop="url"><i class="fa fa-shopping-basket theme-clr"></i> Shop</a>
            <a href="#" title="" itemprop="url"><i class="fa fa-sign-in theme-clr"></i> Login</a>
            <a href="#" title="" itemprop="url"><i class="fa fa-user theme-clr"></i> Sign Up</a>
        </div>
        <div class="res-top-links2">
            <a class="theme-bg" href="#" title="" itemprop="url">Become A Volunteer</a>
            <a class="blue-bg" href="#" title="" itemprop="url">Donate Now</a>
        </div>
    </div>
    <div class="res-logo-sec">
        <div class="logo"><a href="index-2.html" title="" itemprop="url"><img src="{{asset('theme/country/assets/images/logo2.png')}}" alt="logo2.png" itemprop="image"></a></div>
        <span class="res-menu-btn blue-bg brd-rd5"><i class="fa fa-align-justify"></i></span>
    </div>
    <div class="res-menu">
        <span class="res-menu-close brd-rd5"><i class="fa fa-close"></i></span>
        <ul>
            <li class="menu-item-has-children"><a href="{{url('home')}}" title="" itemprop="url">HOME</a>

            </li>

            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">PAGES</a>
                <ul>
                    <li class="menu-item-has-children"><a href="{{url('priorities')}}" title="" itemprop="url">Priorities</a>
                        <ul>
                            <li><a href="{{url('priorities')}}" title="" itemprop="url">Our Priorities</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Our Volunteers</a>
                        <ul>
                            <li><a href="{{url('volunteer')}}" title="" itemprop="url">Our Volunteers</a></li>
                            <li><a href="{{url('volunteer_detail')}}" title="" itemprop="url">Volunteers Detail</a></li>
                        </ul>
                    </li>

                    <li><a href="{{url('volunteer')}}" title="" itemprop="url">Become A Volunteer</a></li>
                    <li><a href="{{url('donate')}}" title="" itemprop="url">Donate Now</a></li>
                    <li><a href="{{url('mission_vision')}}" title="" itemprop="url">Mission & Vission</a></li>
                    <li><a href="{{url('branches')}}" title="" itemprop="url">Find Your Local Unit</a></li>

                </ul>
            </li>
            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">TAKE ACTION</a>
                <ul>
                    <li><a href="{{url('cause')}}" title="" itemprop="url">Cause</a></li>

                </ul>
            </li>


            <li><a href="{{url('about')}}" title="" itemprop="url">ABOUT US</a></li>
            <li><a href="{{url('contact')}}" title="" itemprop="url">CONTACT</a>

            </li>
        </ul>
    </div>
</div><!-- Responsive Header -->
