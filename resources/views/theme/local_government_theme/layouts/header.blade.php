<header>
    <!--CITY TOP WRAP START-->
    <div class="city_top_wrap">
        <div class="container-fluid">
            <div class="city_top_logo">
                <figure>
                    <h4>
{{--                        <a href="#"><img src="{{asset('theme/local/images/top-logo.png')}}" alt="kodeforest"></a>--}}
                        @if(@$website_setting->logo_name)
                            <a href="{{url('home')}}"><img src="{{asset('images/'.@$website_setting->logo_name) }}" alt=""
                                                           style="width: auto; height: 50px; ">
                                @if(@$website_setting->brand_name)
                                    <span style="color: {{@$website_setting->brand_color ?? ''}}" class="ml-3">{{@$website_setting->brand_name}}</span>
                                @endif
                            </a>
                        @endif
                    </h4>
                </figure>
            </div>
            <div class="city_top_news">
                @if(@$website->name)
                <span>Welcome to {{@$website->name}}</span>
                @endif
                    @if(!@$website->name)

                        <span>Welcome to county website</span>
@endif
                        <div class="city-news-slider">
{{--                    <div>--}}
{{--                        <p>Welcome to {{@$website->name}}<i class="fa fa-star"></i></p>--}}
{{--                    </div>--}}


                </div>
            </div>
            <div class="city_top_social">
                <ul>
                    <li><a href="{{@$social_link->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{@$social_link->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{@$social_link->linkedin}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="{{@$social_link->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="{{@$social_link->skype}}" target="_blank"><i class="fa fa-skype"></i></a></li>
                </ul>
            </div>

                <div class="city_top_form">
                    <div class="city_top_search">
                        <input type="text" placeholder="Search">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                    <a class="top_user" href=""><i class="fa fa-user"></i></a>
                </div>

        </div>
    </div>
    <!--CITY TOP WRAP END-->

    <!--CITY TOP NAVIGATION START-->
    <div class="city_top_navigation">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11">
                    <div class="navigation">
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

{{--                            <li><a href="#">County Sectors</a>--}}
{{--                                <ul class="child">--}}
{{--                                    <li><a href="{{url('team')}}">Food Agriculture and Forest</a></li>--}}
{{--                                    <li><a href="{{url('mayor')}}">Devolution</a></li>--}}
{{--                                    <li><a href="{{url('government')}}">Education,youth and Social Services</a></li>--}}

{{--                                    <li><a href="{{url('health')}}">Health Services</a></li>--}}

{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li><a href="#">Resources</a>--}}
{{--                                <ul class="child">--}}
{{--                                    <li><a href="{{url('resident')}}">News and Speeches</a></li>--}}
{{--                                    <li><a href="{{url('resident_detail')}}">Tenders and Notices</a></li>--}}
{{--                                    <li><a href="{{url('resident_detail')}}">Media</a></li>--}}
{{--                                    <li><a href="{{url('resident_detail')}}">Emergency Services</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}



                                   @auth
                                       @if(@auth()->user()->role_id == 1)

                                        <li><a href="#">E-services</a>
                                            <ul class="child">
                                                <li><a href="https://sms.berrycom.co.ke/login">SMS </a></li>
                                                <li><a href="https://sms.berrycom.co.ke/login">Payment Service</a></li>

                                            </ul>
                                        </li>

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

                    </div>
                    <!--DL Menu Start-->
                    <div id="kode-responsive-navigation" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            @if(@$main_menu_items_count>0)
                                @foreach(@$menu_items as $menu_item)
                                    <li><a href="{{url(@$menu_item->page->slug)}}">{{@$menu_item->page->title}}</a></li>
                                @endforeach
                            @endif     <li><a href="{{url('home')}}">Home</a></li>
                            <li><a href="{{url('services')}}">E-Services</a>

                            </li>
                                <li><a href="#">County Sectors</a>
                                    <ul class="child">
                                        <li><a href="{{url('team')}}">Food Agriculture and Forest</a></li>
                                        <li><a href="{{url('mayor')}}">Devolution</a></li>
                                        <li><a href="{{url('government')}}">Education,youth and Social Services</a></li>

                                        <li><a href="{{url('health')}}">Health Services</a></li>

                                    </ul>
                                </li>

                                <li><a href="#">Resources</a>
                                    <ul class="child">
                                        <li><a href="{{url('resident')}}">News and Speeches</a></li>
                                        <li><a href="{{url('resident-detail')}}">Tenders and Notices</a></li>
                                        <li><a href="{{url('resident-detail')}}">Media</a></li>
                                        <li><a href="{{url('resident-detail')}}">Emergency Services</a></li>
                                    </ul>
                                </li>

                            <li><a href="#">New & Event</a>
                                <ul class="child">
                                    <li><a href="#">event</a>
                                        <ul class="child">
                                            <li><a href="{{url('event')}}">event</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">news</a>
                                        <ul class="child">
                                            <li><a href="{{url('news')}}">news page</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a  href="{{ url('main') }}">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                    <!--DL Menu END-->
                </div>

            </div>
        </div>
    </div>
    <!--CITY TOP NAVIGATION END-->

    <!--CITY TOP NAVIGATION START-->
    <div class="city_top_navigation hide">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="navigation">
                        <ul class="">
                            <li><a href="{{url('home')}}">Home</a></li>
                            <li><a href="{{url('services')}}">Services</a>

                            </li>
                            <li><a href="#">Government</a>
                                <ul class="child">
                                    <li><a href="{{url('team')}}">team</a></li>
                                    <li><a href="{{url('mayor')}}">mayor</a></li>
                                    <li><a href="{{url('government')}}">goverment</a></li>
                                    <li><a href="{{url('health')}}">health department</a></li>

                                </ul>
                            </li>

                            <li><a href="#">Resident</a>
                                <ul class="child">
                                    <li><a href="{{url('resident')}}">Resident</a></li>
                                    <li><a href="{{url('resident_detail')}}">Resident detail</a></li>
                                </ul>
                            </li>

                            <li><a href="#">New & Event</a>
                                <ul class="child">
                                    <li><a href="#">event</a>
                                        <ul class="child">
                                            <li><a href="{{url('event')}}">event</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">news</a>
                                        <ul class="child">
                                            <li><a href="{{url('blog')}}">news page</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{url('contact')}}">Contact Us</a></li>
                            <li>
                                <a  href="{{ url('main') }}">Dashboard</a>
                            </li>

                        </ul>
                    </div>
                    <!--DL Menu Start-->
                    <div id="kode-responsive-navigation1" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="">
                            <li><a href="{{url('home')}}">Home</a></li>
                            <li><a href="{{url('services')}}">Services</a>

                            </li>
                            <li><a href="#">Government</a>
                                <ul class="child">
                                    <li><a href="{{url('team')}}">team</a></li>
                                    <li><a href="{{url('mayor')}}">mayor</a></li>
                                    <li><a href="{{url('government')}}">goverment</a></li>

                                    <li><a href="{{url('health')}}">health department</a></li>

                                </ul>
                            </li>

                            <li><a href="#">Resident</a>
                                <ul class="child">
                                    <li><a href="{{url('resident')}}">Resident</a></li>
                                    <li><a href="{{url('resident_detail')}}">Resident detail</a></li>
                                </ul>
                            </li>

                            <li><a href="#">New & Event</a>
                                <ul class="child">
                                    <li><a href="#">event</a>
                                        <ul class="child">
                                            <li><a href="{{url('event')}}">event</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">news</a>
                                        <ul class="child">
                                            <li><a href="{{url('blog')}}">news page</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{url('contact')}}">Contact Us</a></li>
                            <li>
                                <a  href="{{ url('main') }}">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                    <!--DL Menu END-->
                </div>
                <div class="col-md-3">
                    <div class="city_top_form">
                        <div class="city_top_search">
                            <input type="text" placeholder="Search">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                        <a class="top_user" href=""><i class="fa fa-user"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CITY TOP NAVIGATION END-->
</header>
