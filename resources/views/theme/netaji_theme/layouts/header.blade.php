<header class="header-transparent">
    <div id="sticky-header" class="main-menu-area pt-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <div class="logo">
                        @if(@$website_setting->logo_name)
                        <a href="{{url('home')}}"><img src="{{asset('images/'.@$website_setting->logo_name)}}"
                                                       alt="" style="height: 80px; width:auto;" />
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

                    <div class="main-menu text-right f-right">
                        <nav id="mobile-menu">
                            <ul>
                                @if(@$main_menu_items_count>0)
                                    @foreach(@$menu_items as $menu_item)
                                        @if(@$menu_item->menu_level == 1)
                                            <li><a href="{{url(@$menu_item->page->slug)}}">{{@$menu_item->page->title}}</a></li>
                                        @else
                                            @if(@$menu_item->menu_level == 2)
                                                <li><a href="#">{{@$menu_item->page->title}}</a>
                                                    <ul class="sub-menu text-left">
                                                        @foreach(@$menu_item->sub_menus(@$menu_item->page->id) as $sub_menu)
                                                            <li><a href="{{url(@$sub_menu->page->slug)}}">{{@$sub_menu->page->title}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif

                                    @auth
                                        @if(@auth()->user()->role_id == 1)
                                <li>
                                    <a  href="{{ url('main') }}">Dashboard</a>
                                </li>
                                    <li>
                                            <a data-toggle="modal" href="#exampleModalmdo">
                                                Widget
                                            </a>
                                    </li>
                                        @endif
                                    @endauth
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

</header>
