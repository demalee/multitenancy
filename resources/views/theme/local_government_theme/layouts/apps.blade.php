<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@if(@$website_setting)
            @if(@$website_setting->brand_name)
                {{@$website_setting->brand_name}}
                @endif
        @else
            Local Government
        @endif
    </title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('theme/local/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="{{asset('theme/local/css/slick-theme.css')}}" rel="stylesheet"/>
    <!-- ICONS CSS -->
    <link href="{{asset('theme/local/css/font-awesome.css')}}" rel="stylesheet">
    <!-- ICONS CSS -->
    <link href="{{asset('theme/local/css/animation.css')}}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{asset('theme/local/css/prettyPhoto.css')}}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{asset('theme/local/css/component.css')}}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{asset('theme/local/css/jquery.bxslider.css')}}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{asset('theme/local/css/style5.css')}}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{asset('theme/local/css/demo.css')}}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{asset('theme/local/css/fig-hover.css')}}" rel="stylesheet">
    <!-- Typography CSS -->
    <link href="{{asset('theme/local/css/typography.css')}}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{asset('theme/local/css/style.css')}}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{asset('theme/local/css/component.css')}}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{asset('theme/local/css/shotcode.css')}}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{asset('theme/local/css/svg-icon.css')}}" rel="stylesheet">
    <!-- Color CSS -->
    <link href="{{asset('theme/local/css/color.css')}}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{asset('theme/local/css/responsive.css')}}" rel="stylesheet">

    <style>
        :root {
            --light: 80;
            /* the threshold at which colors are considered "light." Range: integers from 0 to 100,
          recommended 50 - 70 */
            --threshold: 60;
        }

        .city_comment_form_login .theam_btn,
        .side_news_deatil:hover .theam_btn,
        .city_news2_post.post2:hover .theam_btn,
        .navigation ul li ul li a:hover,
        .blog_post_slide .slick-prev:hover,
        .blog_post_slide .slick-next:hover,
        .blog_next_post ul li a:hover,
        .city_blog2_fig.fig2.detail .city_blog2_met:after,
        .city_blog2_fig.fig2.detail .city_blog2_met:before,
        .city_blog2_fig.fig2.detail .city_blog2_met,
        .city_contact_text:hover,
        .city_event_detail.question .event_booking_area .theam_btn.btn2,
        .city_mayor_contact .theam_btn,
        .sidebar_search_login a,
        .forum_author_posts,
        .forum_title,
        .city_news2_detail:hover .theam_btn,
        .city_404_wrap.coming.overlay:before,
        .city_404_text .theam_btn:hover,
        .city_team_fig .city_top_social li a:hover,
        .blog_tags a:hover,
        .blog_author_date li:before,
        .city_blog2_fig.fig2 .theam_btn:hover,
        .city_blog2_fig.fig2 .theam_btn:hover,
        .city_blog2_fig .paly_btn:hover,
        .city_blog2_fig:hover .city_blog2_met,
        .city_blog2_fig:hover .city_blog2_met:after,
        .city_blog2_fig:hover .city_blog2_met:before,
        .city_blog2_list:hover .city_meta_list,
        .list li:hover,
        .list li.option.selected.focus,
        .event_booking_form .theam_btn:hover,
        .event_counter_list .countdown li,
        .city_event2_year .list li:hover,
        .city_event2_year .list li.option.selected.focus,
        .city_event2_list2_row:hover .theam_btn,
        .city_event2_list2_row:hover .event_categories_date,
        .city_full_event_list:hover .theam_btn.btn2,
        .city_special2_dream,
        .city_treatment_wrap,
        .city_treatment_text .paly_btn,
        .city_about_list.list2 .theam_btn:hover,
        .accordion-section-title.active,
        .city_health2_text .slick-prev:hover,
        .city_health2_text .slick-next:hover,
        .city_emergency_slider .slick-prev:hover,
        .city_emergency_slider .slick-next:hover,
        .city_department_wrap .slick-prev:hover,
        .city_department_wrap .slick-next:hover,
        .side_submit_form,
        .city_event2_fig:hover .theam_btn.btn2,
        .city_event2_date,
        .city_visit_text .theam_btn:hover,
        .city_business_fig .city_service2_list span,
        .city_service2_btn.btn2 .theam_btn,
        .pagination ul li a:hover,
        .city_news2_text .theam_btn,
        .special_service_text .theam_btn:hover,
        .widget_wrap.overlay:before,
        .widget_wrap,
        .city_news_feild,
        .city_client_wrap,
        .city_event_fig:hover .event_date,
        .city_project_wrap .slick-prev:hover,
        .city_project_wrap .slick-next:hover,
        .city_project_fig .overlay:before,
        .city_jobs_item.overlay:before,
        .city_blog_fig.position:hover .theam_btn,
        .city_department_wrap .slick-prev:hover,
        .city_department_wrap .slick-next:hover,
        .city_department_wrap.overlay:before,
        .city_department_fig:hover,
        .city_about_video .overlay:before,
        .city_top_social ul li a,
        .city_main_banner .slick-prev:hover,
        .city_main_banner .slick-next:hover,
        .banner_text,
        .city_top_navigation,
        .city_top_news span,
        .city_top_navigation:before
        {
            background-color: {{@$website_setting->brand_color}} !important;
        }

        .city_forget:hover,
        .city_checkout_list li a:hover,
        .dl-menuwrapper li a:hover,
        .city_news2_post.post2:hover .city_news2_detail h4,
        .navigation ul li ul li a:before,
        .blog_post_slide_text h6:hover a,
        .blog_next_post ul li a i,
        .detail_process_list li a:hover,
        .city_mayor_text p,
        .city_mayor_text h2,
        .forum_user_meta .city_meta_list li a:hover,
        .forum_detail_deta > a:hover,
        .forum_detail_deta .city_meta_list li a:hover,
        .forum_quote h5,
        .forum_detail_deta a i,
        .forum_author_text h6:hover a,
        .forum_month a,
        .city_news2_detail .city_meta_list li a:hover,
        .city_news2_detail:hover h2,
        .city_team_fig:hover .city_team_text h4 a,
        .information_list li a:hover,
        .city_project_description .city_local_link li a:before,
        .city_blog2_fig.fig2:hover .city_meta_list li a:hover,
        .city_blog2_fig.fig2 .city_blog2_text h4:hover a,
        .city_blog2_fig.fig2:hover .city_meta_list li a i,
        .city_blog2_fig:hover .see_more_btn,
        .city_blog2_text h5:hover a,
        .city_blog2_list .city_meta_list li a i,
        .city_event_tags span a:hover,
        .event_counter_list .countdown li:before,
        .venue_list ul li p:hover a,
        .city_blog_text.event2 .social_icon li a:hover,
        .city_event2_list2_row:hover .share_icon,
        .city_blog_text.event2 .city_meta_list li a:hover,
        .city_blog_text.event2 h4:hover a,
        .city_blog_text.event2 span,
        .event2_menu_list a:hover,
        .event_video .paly_btn:hover,
        .event_categories_text a:hover,
        .categories_list ul li a:hover,
        .section_heading h3,
        .city_senior_team:hover .city_senior_team_text h5,
        .city_senior_team_text a:hover,
        .city_local_link li a:hover,
        .city_health2_service:hover span,
        .city_health2_service a:hover,
        .city_health2_service:hover h5 a,
        .side_notice_text h6:hover a,
        .side_notice_detail > a,
        .side_contact_text a:hover,
        .city_event2_text h4:hover a,
        .city_event2_text span,
        .city_event2_text ul li a:hover,
        .city_visit_text p i,
        .city_visit_text h3 span,
        .see_more_btn:hover,
        .city_busine_detail li a:hover,
        .city_busine_detail li a i,
        .city_blog_grid_text a:hover,
        .emergency_service_item h4:hover a,
        .city_emergency_slide_text h5:hover a,
        .city_emergency_call ul li a:hover,
        .special_service_text .theam_btn,
        .city_service2_list > span,
        .breadcrumb > li a:hover,
        .city_project_mansory ul li a.active,
        .city_request_link ul li a:hover:before,
        .city_request_link ul li a:hover,
        .city_document_list ul li a:hover,
        .city_news_meta li a:hover,
        .city_event_fig a:hover,
        .city_event_fig > a:hover,
        .city_event_fig:hover .city_date_text a i,
        .city_event_fig:hover .custom_size,
        .city_jobs_item span,
        .ciy_jobs_row span,
        .city_blog_fig.position:hover .share_icon,
        .city_office_text a,
        .city_department_text a:hover,
        .city_about_link li a:hover,
        .section_heading h2,
        .city_service_text h5 a:hover,
        .banner_search_field a
        {
            {{--color:{{$website_setting->font_color}} !important;--}}
             --switch: calc((var(--light) - var(--threshold)) * -100%);
            color: hsl(0, 0%, var(--switch)) !important;
        }





    </style>
</head>
<body class="demo-5">
<!--WRAPPER START-->
<div class="wrapper">
    @include('theme.local_government_theme.layouts.header')

    <main class="py-4">
        @yield('content')

    </main>
{{--    <div class="city_requset_wrap">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 col-sm-6">--}}
{{--                    <div class="city_request_list">--}}
{{--                        <div class="city_request_row">--}}
{{--                            <span><i class="fa icon-question"></i></span>--}}
{{--                            <div class="city_request_text">--}}
{{--                                <span contenteditable="true">Recent</span>--}}
{{--                                <h4 contenteditable="true">Top Request</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="city_request_link">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#" contenteditable="true">Pay a Parking Ticket</a></li>--}}
{{--                                <li><a href="#" contenteditable="true">Building Violation</a></li>--}}
{{--                                <li><a href="#">Affordable Housing</a></li>--}}
{{--                                <li><a href="#">Graffiti Removal</a></li>--}}
{{--                                <li><a href="#">Civil Service Exams</a></li>--}}
{{--                                <li><a href="#">Rodent Baiting</a></li>--}}
{{--                                <li class="margin0"><a href="#">Cleaning</a></li>--}}
{{--                                <li class="margin0"><a href="#">Uncleared Sidewalk</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-sm-6">--}}
{{--                    <div class="city_request_list">--}}
{{--                        <div class="city_request_row">--}}
{{--                            <span><i class="fa icon-shout"></i></span>--}}
{{--                            <div class="city_request_text">--}}
{{--                                <span>Recent</span>--}}
{{--                                <h4>Announcement</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="city_request_link">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Pay a Parking Ticket</a></li>--}}
{{--                                <li><a href="#">Building Violation</a></li>--}}
{{--                                <li><a href="#">Affordable Housing</a></li>--}}
{{--                                <li><a href="#">Graffiti Removal</a></li>--}}
{{--                                <li><a href="#">Civil Service Exams</a></li>--}}
{{--                                <li><a href="#">Rodent Baiting</a></li>--}}
{{--                                <li class="margin0"><a href="#">Cleaning</a></li>--}}
{{--                                <li class="margin0"><a href="#">Uncleared Sidewalk</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <footer>
        <div class="widget_wrap overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="widget_list">
                            <h4 class="widget_title">Find Us</h4>
                            <div class="widget_text">
                                <ul>
                                    <li><a href="#">2307 Beverley Rd</a></li>
                                    <li><a href="#">Brooklyn, New York 11226</a></li>
                                    <li><a href="#">United States.</a></li>
                                </ul>
                                <p>Open Monday to Saturday From 7h to 18h or talk to an expert 0712-0610-3314 – available 24/7</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="widget_list">
                                    <h4 class="widget_title">Explore</h4>
                                    <div class="widget_service">
                                        <ul>
                                            <li><a href="#">Online Services</a></li>
                                            <li><a href="#">Residents</a></li>
                                            <li><a href="#">Business</a></li>
                                            <li><a href="#">Government</a></li>
                                            <li><a href="#">Visiting</a></li>
                                            <li><a href="#">Employment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="widget_list">
                                    <h4 class="widget_title">Features</h4>
                                    <div class="widget_service">
                                        <ul>
                                            <li><a href="#">Online Services</a></li>
                                            <li><a href="#">Residents</a></li>
                                            <li><a href="#">Business</a></li>
                                            <li><a href="#">Government</a></li>
                                            <li><a href="#">Visiting</a></li>
                                            <li><a href="#">Employment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="widget_list">
                                    <h4 class="widget_title">Services</h4>
                                    <div class="widget_service">
                                        <ul>
                                            <li><a href="#">Online Services</a></li>
                                            <li><a href="#">Residents</a></li>
                                            <li><a href="#">Business</a></li>
                                            <li><a href="#">Government</a></li>
                                            <li><a href="#">Visiting</a></li>
                                            <li><a href="#">Employment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget_list">
                            <h4 class="widget_title">For Appointment</h4>
                            <div class="widget_text text2">
                                <ul>
                                    <li><a href="#">Monday<span>08 am - 3 pm</span></a></li>
                                    <li><a href="#">Tusday <span>08 am - 3 pm</span></a></li>
                                    <li><a href="#">Wednesfay<span>08 am - 3 pm</span></a></li>
                                    <li><a href="#">Thursday<span>08 am - 3 pm</span></a></li>
                                    <li><a href="#">FFriday <span>08 am - 3 pm</span></a></li>
                                    <li><a href="#">Saturday - Sunday<span>Closed</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="widget_copyright">
                        <div class="col-md-3 col-sm-6">
                            <div class="widget_logo">
                                @if(@$website_setting->logo_name)
                                    <a href="{{url('home')}}"><img src="{{asset('images/'.@$website_setting->logo_name) }}" alt=""
                                                                   style="width: auto; height: 50px; ">
                                        @if(@$website_setting->brand_name)
                                            <span style="color: {{@$website_setting->brand_color ?? ''}}" class="ml-3">{{@$website_setting->brand_name}}</span>
                                        @endif
                                    </a>
                                @endif                         </div>
                        </div>
                        <div class="col-md-6">
                            <div class="copyright_text">
                                <p><span>Copyright © Multisite.</span> Designed and Developed by kodeforest</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="city_top_social">
                                <ul>
                                    <li><a href="{{@$social_link->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{@$social_link->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{@$social_link->linkedin}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="{{@$social_link->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="{{@$social_link->skype}}" target="_blank"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@include('layouts.partials.add_content_any')
<!--WRAPPER END-->
<!--Jquery Library-->
<script src="{{asset('theme/local/js/jquery.js')}}"></script>
<!--Bootstrap core JavaScript-->
<script src="{{asset('theme/local/js/bootstrap.js')}}"></script>
<!--Slick Slider JavaScript-->
<script src="{{asset('theme/local/js/slick.min.js')}}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{asset('theme/local/js/jquery.prettyPhoto.js')}}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{asset('theme/local/js/jquery.bxslider.min.js')}}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{asset('theme/local/js/index.js')}}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{asset('theme/local/js/modernizr.custom.js')}}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{asset('theme/local/js/jquery.dlmenu.js')}}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{asset('theme/local/js/downCount.js')}}"></script>
<!--Counter up JavaScript-->
<script src="{{asset('theme/local/js/waypoints.js')}}"></script>
<!--Pretty Photo JavaScript-->
<script src="{{asset('theme/local/js/waypoints-sticky.js')}}"></script>

<!--Custom JavaScript-->
<script src="{{asset('theme/local/js/custom.js')}}"></script>
<script>document.documentElement.className = 'js';</script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'editor1',
        {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
</script>
</body>

</html>
