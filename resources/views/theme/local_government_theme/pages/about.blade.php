@extends('theme.local_government_theme.layouts.apps')

@section('content')
    <!--CITY MAIN BANNER START-->
    @foreach($widgets as $widget)


        @if($widget->name == "Bread Crumbs" and  $widget->active_status(@$page_id->id,@$widget->id))
{{--            @php dd($page_id->id,@$widget->id,  @endphp--}}
            @include('theme.local_government_theme.widgets.breadcrumbs')
        @endif

        @if($widget->name == "Info" and $widget->active_status(@$page_id->id,@$widget->id))
            <div class="city_about_wrap">
                <div class="container">
                    @include('theme.local_government_theme.widgets.info')
                </div>
            </div>
        @endif

        @if($widget->name == "Department" and $widget->active_status(@$page_id->id,@$widget->id))
            <div class="city_department_wrap overlay">
                <div class="bg_white">
                    <div class="container-fluid">
                        <!--SECTION HEADING START-->
                        <div class="section_heading margin-bottom">
                            <span contenteditable="true">Explore</span>
                            <h2 contenteditable="true">Govt Departments</h2>
                        </div>
                        <!--SECTION HEADING END-->

                            @include('theme.local_government_theme.widgets.departments')
                    </div>
                </div>
            </div>
        @endif

        @if($widget->name == "Authority" and $widget->active_status(@$page_id->id,@$widget->id))
            <div class="city_office_wrap">
                <div class="bg_white bg_none">
                    <div class="container-fluid">
                        <div class="city_office_row">
                            <div class="city_triagle">
                                <span></span>
                            </div>
                            <div class="center_text">
                                <div class="city_office_list">
                                    <div class="city_office_text">
                                        <h6 contenteditable="true">City</h6>
                                        <h3 contenteditable="true">Governor’s Office</h3>
                                        <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                    <div class="city_office_logo">
                                        <a href="#"><img src="{{asset('theme/local/images/office-logo.png')}}" alt=""></a>
                                    </div>
                                    <div class="city_office_text pull_right">
                                        <h6 contenteditable="true">City</h6>
                                        <h3 contenteditable="true">Senate Office</h3>
                                        <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="city_triagle text-right">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if($widget->name == "Gallery" and $widget->active_status(@$page_id->id,@$widget->id))
            {{--            <div class="city_blog_wrap">--}}
            {{--                <div class="container">--}}
            {{--                    <!--SECTION HEADING START-->--}}
            {{--                    <div class="heding_full">--}}
            {{--                        <div class="section_heading">--}}
            {{--                            <span contenteditable="true">Welcome to Local City</span>--}}
            {{--                            <h2 contenteditable="true">City Spotlights</h2>--}}
            {{--                        </div>--}}
            {{--                        <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin, lorem quis bibendum auctor Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin, lorem quis bibendum auctor</p>--}}
            {{--                    </div>--}}
            {{--                    <!--SECTION HEADING END-->--}}
            {{--                    <div class="row">--}}
            {{--                        @include('theme.local_government_theme.widgets.gallery')--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        @endif


        @if($widget->name == "Post" and $widget->active_status(@$page_id->id,@$widget->id))
            <div class="city_blog_wrap">
                <div class="container">
                    <!--SECTION HEADING START-->
                    <div class="heding_full">
                        <div class="section_heading">
                            <span contenteditable="true">Government</span>
                            <h2 contenteditable="true">Posts</h2>
                        </div>
                        <p contenteditable="true"></p>
                    </div>
                    <!--SECTION HEADING END-->
                    <div class="row">
                        @include('theme.local_government_theme.widgets.post')
                    </div>
                </div>
            </div>
        @endif

        @if($widget->name == "Projects" and $widget->active_status(@$page_id->id,@$widget->id))
            <div class="city_project_wrap">
                <div class="container-fluid">
                    <!--SECTION HEADING START-->
                    <div class="section_heading center">
                        <span contenteditable="true">Government</span>
                        <h2 contenteditable="true">Programs & Projects</h2>
                    </div>
                    <div class="city-project-slider">
                        @include('theme.local_government_theme.widgets.program')
                    </div>
                </div>
            </div>
        @endif

        @if($widget->name == "Events" and $widget->active_status(@$page_id->id,@$widget->id))
            <div class="city_event_wrap">
                <div class="bg_white width">
                    <div class="container-fluid">
                        <!--SECTION HEADING START-->
                        <div class="heding_full">
                            <div class="section_heading">
                                <span contenteditable="true">Government</span>
                                <h2 contenteditable="true">Feature Events & Meeting</h2>
                            </div>
{{--                            <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin, lorem quis bibendum auctor Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin, lorem quis bibendum auctor</p>--}}
                        </div>
                        <div class="row">
                            @include('theme.local_government_theme.widgets.events')
                        </div>
                    </div>
                </div>
            </div>
        @endif

{{--        @if($widget->name == "Testimonials" and $widget->active_status(@$page_id->id,@$widget->id))--}}
{{--            <div class="city_client_wrap">--}}
{{--                @include('theme.local_government_theme.widgets.testimonials')--}}
{{--            </div>--}}
{{--        @endif--}}


        @if($widget->name == "News" and $widget->active_status(@$page_id->id,@$widget->id))
            <div class="city_news_wrap">
                <div class="container">
                    <div class="row">
                            <!--SECTION HEADING START-->
                            <div class="section_heading margin-bottom">
                                <span contenteditable="true">Government</span>
                                <h2 contenteditable="true">News Releases</h2>
                            </div>
                            <!--SECTION HEADING START-->
                            <div class="row">
                                @include('theme.local_government_theme.widgets.news')
                            </div>
{{--                        <div class="col-md-4">--}}
{{--                            <div class="city_news_form">--}}
{{--                                <div class="city_news_feild">--}}
{{--                                    <span contenteditable="true">Signup</span>--}}
{{--                                    <h4 contenteditable="true">Newsletter</h4>--}}
{{--                                    <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida </p>--}}
{{--                                    <div class="city_news_search">--}}
{{--                                        <input type="text" name="text" placeholder="Enter Your Email Adress Here" required>--}}
{{--                                        <button class="theam_btn border-color color">Subcribe Now</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="city_news_feild feild2">--}}
{{--                                    <span contenteditable="true">Recent</span>--}}
{{--                                    <h4 contenteditable="true">Documents</h4>--}}
{{--                                    <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida </p>--}}
{{--                                    <div class="city_document_list">--}}
{{--                                        <ul>--}}
{{--                                            <li contenteditable="true"><a href="#"><i class="fa icon-document"></i>Council Agenda April 24, 2015 (27 kB)</a></li>--}}
{{--                                            <li contenteditable="true"><a href="#"><i class="fa icon-document"></i>Council Agenda April 24, 2015 (27 kB)</a></li>--}}
{{--                                            <li contenteditable="true"><a href="#"><i class="fa icon-document"></i>Council Agenda April 24, 2015 (27 kB)</a></li>--}}
{{--                                            <li contenteditable="true"><a href="#"><i class="fa icon-document"></i>Council Agenda April 24, 2015 (27 kB)</a></li>--}}
{{--                                            <li contenteditable="true"><a href="#"><i class="fa icon-document"></i>Council Agenda April 24, 2015 (27 kB)</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        @endif


    @endforeach

@endsection
