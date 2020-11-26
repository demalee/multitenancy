<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-lg-0">
            @if(@$website_setting->logo_name)
                <a href="{{url('home')}}"><img src="{{asset('images/'.@$website_setting->logo_name) }}" alt=""
                                               style="height: 80px; width:auto;">
                    @if(@$website_setting->brand_name)
                        <span style="color: {{@$website_setting->brand_color ?? ''}}" class="ml-3">{{@$website_setting->brand_name}}</span>
                    @endif
                </a>
            @endif
{{--            <a class="navbar-brand logo" href="{{url('home')}}"><img src="{{asset('theme/political/assets/images/logo/01.png')}}" alt="logo"></a>--}}
{{--            <a class="navbar-brand logo" href="{{url('home')}}"><img src="{{asset('theme/political/assets/images/logo/02.png')}}" alt="logo"></a>--}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    @if(@$main_menu_items_count>0)
                        @foreach(@$menu_items as $menu_item)
                            @if(@$menu_item->menu_level == 1)
                                <li><a href="{{url(@$menu_item->page->slug)}}">{{@$menu_item->page->title}}</a></li>
                            @else
                                @if(@$menu_item->menu_level == 2)
                                    <li><a href="#0">{{@$menu_item->page->title}}</a>
                                        <ul class="submenu">

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
                <a href="{{url('donate')}}" class="custom-btn donate">Donate Now</a>
            </div>
        </nav>
    </div>
</header>
