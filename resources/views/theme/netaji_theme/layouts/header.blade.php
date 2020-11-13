<header class="header-transparent">
    <div id="sticky-header" class="main-menu-area pt-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <div class="logo">
                        @if(@$website_setting->logo_name)
                        <a href="{{url('home')}}"><img src="{{asset('images/'.@$website_setting->logo_name)}}"
                                                       alt="" style="width: 50px;height: 50px;" />
                       <Span class="ml-3" style="color: {{@$website_setting->brand_color }}">{{@$website_setting->brand_name}}</Span>
                        </a>
                            @else
                        <a href="{{url('home')}}"><img src="{{asset('theme/netaji/img/logo/logo.png')}}"
                                                       alt=""/>
                            <Span class="ml-3" style="color: {{@$website_setting->brand_color }}">{{@$website_setting->brand_name}}</Span>
                        </a>
                        @endif
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="menu-bar info-bar text-right d-none d-md-none d-lg-block">
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </div>
                    <div class="main-menu text-right f-right">
                        <nav id="mobile-menu">
                            <ul>
                                @if(@$main_menu_items_count>0)
                                    @foreach(@$menu_items as $menu_item)
                                        <li><a href="{{url(@$menu_item->page->slug)}}">{{@$menu_item->page->title}}</a></li>
                                    @endforeach
                                @endif

                                <li><a href="{{url('events')}}">EVENTS</a>
                                    <ul class="sub-menu text-left">
                                        <li><a href="{{url('events')}}">events grid</a></li>
                                        <li><a href="{{url('events')}}">events list</a></li>
                                        <li><a href="{{url('events-details')}}">events details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="sub-menu text-left">

                                        <li><a href="{{url('issue')}}">issues</a></li>

                                        <li><a href="{{url('donation')}}">donation</a></li>


                                        <li><a href="{{url('volunteer')}}" contenteditable="true">our volunteer</a></li>
                                        <li><a href="{{url('biography')}}" contenteditable="true">biography</a></li>
                                        <li><a href="{{url('faq')}}" contenteditable="true">faq</a></li>

                                    </ul>
                                </li>
                                <li><a href="{{url('blog')}}" >NEWS</a>
                                    <ul class="sub-menu text-left">
                                        <li><a href="{{url('blog')}}">blog grid</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <a  href="{{ url('main') }}">Dashboard</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="extra-info">
        <div class="close-icon">
            <button>
                <i class="far fa-window-close"></i>
            </button>
        </div>
        <div class="logo-side mb-30">
            <a href="{{url('home')}}">
                <img src="{{url('theme/netaji/img/logo/logo.png')}}" alt="" />
            </a>
        </div>
        <div class="side-menu mb-30">
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Shop</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Blog Details</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <div class="instagram">
            <a href="#">
                <img src="{{asset('theme/netaji/img/instagram/1.jpg')}}" alt="">
            </a>
            <a href="#">
                <img src="{{asset('theme/netaji/img/instagram/2.jpg')}}" alt="">
            </a>
            <a href="#">
                <img src="{{asset('theme/netaji/img/instagram/3.jpg')}}" alt="">
            </a>
            <a href="#">
                <img src="{{asset('theme/netaji/img/instagram/4.jpg')}}" alt="">
            </a>
            <a href="#">
                <img src="{{asset('theme/netaji/img/instagram/5.jpg')}}" alt="">
            </a>
            <a href="#">
                <img src="{{asset('theme/netaji/img/instagram/6.jpg')}}" alt="">
            </a>
        </div>
        <div class="social-icon-right mt-20">
            <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
                <i class="fab fa-google-plus-g"></i>
            </a>
            <a href="#">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</header>
