
<header>

    <div class="header-area">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                @if(@$website_setting->logo_name)
                                <a href="{{url('home')}}"><img src="{{asset('images/'.@$website_setting->logo_name) }}" alt=""
                                    style="width: 50px;height: 50px; ">
                                    @if(@$website_setting->brand_name)
                                    <span style="color: {{@$website_setting->brand_color ?? ''}}" class="ml-3">{{@$website_setting->brand_name}}</span>
                                        @endif
                                </a>
                                    @endif
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">

                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            @if(@$main_menu_items_count>0)
                                           @foreach(@$menu_items as $menu_item)
                                            <li><a href="{{url(@$menu_item->page->slug)}}">{{@$menu_item->page->title}}</a></li>
                                            @endforeach
                                            @endif
                                            <li><a href="{{route('dashboard.website')}}">Create Website</a></li>

                                            @include('theme.default.layouts.authenticate')

                                </ul>
                                    </nav></div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
