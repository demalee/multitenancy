@extends('theme.local_government_theme.layouts.app')

@section('content')
    <!--CITY MAIN BANNER START-->
    <div class="city_main_banner">
        <div class="main-banner-slider">
            <div>
                <figure class="overlay">
                    <img src="{{asset('theme/local/extra-images/main-banner.jpg')}}" alt="">
                    <div class="banner_text">
                        <div class="small_text animated" contenteditable="true">Welcome to</div>
                        <div class="medium_text animated" contenteditable="true">Smart City</div>
                        <div class="large_text animated"><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div>
                        <div class="banner_btn">
                            <a class="theam_btn animated" href="#" contenteditable="true">Read More</a>
                            <a class="theam_btn animated" href="#" >Explore Now</a>
                        </div>
                        <div class="banner_search_form">
                            <label>Search Here</label>
                            <div class="banner_search_field animated">
                                <input type="text" placeholder="What  do you want to do">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div>
                <figure class="overlay">
                    <img src="{{asset('theme/local/extra-images/main-banner1.jpg')}}" alt="">
                    <div class="banner_text">
                        <div class="small_text animated" contenteditable="true">Welcome to</div>
                        <div class="medium_text animated" contenteditable="true">Smart City</div>
                        <div class="large_text animated" contenteditable="true">municipal</div>
                        <div class="banner_btn">
                            <a class="theam_btn animated" href="#">Read More</a>
                            <a class="theam_btn animated" href="#">Explore Now</a>
                        </div>
                        <div class="banner_search_form">
                            <label>Search Here</label>
                            <div class="banner_search_field animated">
                                <input type="text" placeholder="What  do you want to do">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div>
                <figure class="overlay">
                    <img src="{{asset('theme/local/extra-images/main-banner2.jpg')}}" alt="">
                    <div class="banner_text">
                        <div class="small_text animated" contenteditable="true">Welcome to</div>
                        <div class="medium_text animated" contenteditable="true">Smart City</div>
                        <div class="large_text animated" contenteditable="true">municipal</div>
                        <div class="banner_btn">
                            <a class="theam_btn animated" href="#" contenteditable="true">Read More</a>
                            <a class="theam_btn animated" href="#" contenteditable="true">Explore Now</a>
                        </div>
                        <div class="banner_search_form">
                            <label>Search Here</label>
                            <div class="banner_search_field animated">
                                <input type="text" placeholder="What  do you want to do">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
    <!--CITY MAIN BANNER END-->

    <!--CITY BANNER SERVICES START-->
    <div class="city_banner_services">
        <div class="container-fluid">
            <div class="city_service_list">
                <ul>
                    <li>
                        <div class="city_service_text">
                            <span><i class="fa icon-news"></i></span>
                            <h5><a href="#" contenteditable="true">News & Public Notices</a></h5>
                        </div>
                    </li>
                    <li>
                        <div class="city_service_text">
                            <span><i class="fa icon-law"></i></span>
                            <h5><a href="#" contenteditable="true">Goverment Tender </a></h5>
                        </div>
                    </li>
                    <li>
                        <div class="city_service_text">
                            <span><i class="fa icon-cursor"></i></span>
                            <h5><a href="#" contenteditable="true">Pay Online Tickets</a></h5>
                        </div>
                    </li>
                    <li>
                        <div class="city_service_text">
                            <span><i class="fa icon-trash"></i></span>
                            <h5><a href="#" contenteditable="true">Garbage and Recycling</a></h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--CITY BANNER SERVICES END-->

    <!--CITY ABOUT WRAP START-->
    <div class="city_about_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="city_about_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('theme/local/extra-images/about-fig.jpg')}}" alt="">
                        </figure>
                        <div class="city_about_video">
                            <figure class="overlay">
                                <img src="{{asset('theme/local/extra-images/about_video.jpg')}}" alt="">
                                <a class="paly_btn hvr-pulse" data-rel="prettyPhoto" href="https://www.youtube.com/watch?v=SAaevusBnNI"><i class="fa icon-play-button"></i></a>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="city_about_list">
                        <!--SECTION HEADING START-->
                        <div class="section_heading border">
                            <span contenteditable="true">Welcome to Smart City</span>
                            <h2 contenteditable="true">Municipal</h2>
                        </div>
                        <!--SECTION HEADING END-->
                        <div class="city_about_text">
                            <h6 contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</h6>
                            <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                        </div>
                        <ul class="city_about_link">
                            <li contenteditable="true"><a href="#"><i class="fa fa-star"></i>24-Hours Emergency Services</a></li>
                            <li contenteditable="true"><a href="#"><i class="fa fa-star"></i>Citizen Safety Information</a></li>
                            <li contenteditable="true"><a href="#"><i class="fa fa-star"></i>Marriage Procedures</a></li>
                            <li contenteditable="true"><a href="#"><i class="fa fa-star"></i>Constitution and Government Law</a></li>
                            <li contenteditable="true"><a href="#"><i class="fa fa-star"></i>Ongoing Projects</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CITY ABOUT WRAP END-->

    <!--CITY DEPARTMENT WRAP START-->
    <div class="city_department_wrap overlay">
        <div class="bg_white">
            <div class="container-fluid">
                <!--SECTION HEADING START-->
                <div class="section_heading margin-bottom">
                    <span contenteditable="true">Explore</span>
                    <h2 contenteditable="true">Govt Departments</h2>
                </div>
                <!--SECTION HEADING END-->
                <div class="city-department-slider">
                    <div>
                        <div class="width_control">
                            <div class="city_department_fig">
                                <figure class="box">
                                    <div class="box-layer layer-1"></div>
                                    <div class="box-layer layer-2"></div>
                                    <div class="box-layer layer-3"></div>
                                    <img src="{{asset('theme/local/extra-images/department-fig.jpg')}}" alt="">
                                    <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                                </figure>
                                <div class="city_department_text">
                                    <h5 contenteditable="true">Administration</h5>
                                    <p contenteditable="true">This is Photoshop's version  of Ipsum. </p>
                                    <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="width_control">
                            <div class="city_department_fig">
                                <figure class="box">
                                    <div class="box-layer layer-1"></div>
                                    <div class="box-layer layer-2"></div>
                                    <div class="box-layer layer-3"></div>
                                    <img src="{{asset('theme/local/extra-images/department-fig1.jpg')}}" alt="">
                                    <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                                </figure>
                                <div class="city_department_text">
                                    <h5 contenteditable="true">Employment </h5>
                                    <p contenteditable="true">This is Photoshop's version  of Ipsum. </p>
                                    <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="width_control">
                            <div class="city_department_fig">
                                <figure class="box">
                                    <div class="box-layer layer-1"></div>
                                    <div class="box-layer layer-2"></div>
                                    <div class="box-layer layer-3"></div>
                                    <img src="{{asset('theme/local/extra-images/department-fig2.jpg')}}" alt="">
                                    <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                                </figure>
                                <div class="city_department_text">
                                    <h5 contenteditable="true">Education</h5>
                                    <p contenteditable="true">This is Photoshop's version  of Ipsum. </p>
                                    <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="width_control">
                            <div class="city_department_fig">
                                <figure class="box">
                                    <div class="box-layer layer-1"></div>
                                    <div class="box-layer layer-2"></div>
                                    <div class="box-layer layer-3"></div>
                                    <img src="{{asset('theme/local/extra-images/department-fig3.jpg')}}" alt="">
                                    <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                                </figure>
                                <div class="city_department_text">
                                    <h5 contenteditable="true">Health Care</h5>
                                    <p contenteditable="true"> This is Photoshop's version  of Ipsum. </p>
                                    <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="width_control">
                            <div class="city_department_fig">
                                <figure class="box">
                                    <div class="box-layer layer-1"></div>
                                    <div class="box-layer layer-2"></div>
                                    <div class="box-layer layer-3"></div>
                                    <img src="{{asset('theme/local/extra-images/department-fig4.jpg')}}" alt="">
                                    <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                                </figure>
                                <div class="city_department_text">
                                    <h5 contenteditable="true">Travel & Tourism</h5>
                                    <p contenteditable="true">This is Photoshop's version  of Ipsum. </p>
                                    <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="width_control">
                            <div class="city_department_fig">
                                <figure class="box">
                                    <div class="box-layer layer-1"></div>
                                    <div class="box-layer layer-2"></div>
                                    <div class="box-layer layer-3"></div>
                                    <img src="{{asset('theme/local/extra-images/department-fig5.jpg')}}" alt="">
                                    <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                                </figure>
                                <div class="city_department_text">
                                    <h5 contenteditable="true">Police Department</h5>
                                    <p contenteditable="true">This is Photoshop's version  of Ipsum. </p>
                                    <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="width_control">
                            <div class="city_department_fig">
                                <figure class="box">
                                    <div class="box-layer layer-1"></div>
                                    <div class="box-layer layer-2"></div>
                                    <div class="box-layer layer-3"></div>
                                    <img src="{{asset('theme/local/extra-images/department-fig.jpg')}}" alt="">
                                    <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                                </figure>
                                <div class="city_department_text">
                                    <h5 contenteditable="true">Administration</h5>
                                    <p contenteditable="true">This is Photoshop's version  of Ipsum. </p>
                                    <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="width_control">
                            <div class="city_department_fig">
                                <figure class="box">
                                    <div class="box-layer layer-1"></div>
                                    <div class="box-layer layer-2"></div>
                                    <div class="box-layer layer-3"></div>
                                    <img src="{{asset('theme/local/extra-images/department-fig1.jpg')}}" alt="">
                                    <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                                </figure>
                                <div class="city_department_text">
                                    <h5 contenteditable="true">Employment </h5>
                                    <p contenteditable="true">This is Photoshop's version  of Ipsum. </p>
                                    <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="width_control">
                            <div class="city_department_fig">
                                <figure class="box">
                                    <div class="box-layer layer-1"></div>
                                    <div class="box-layer layer-2"></div>
                                    <div class="box-layer layer-3"></div>
                                    <img src="{{asset('theme/local/extra-images/department-fig2.jpg')}}" alt="">
                                    <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                                </figure>
                                <div class="city_department_text">
                                    <h5 contenteditable="true">Education</h5>
                                    <p contenteditable="true">This is Photoshop's version  of Ipsum. </p>
                                    <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="width_control">
                            <div class="city_department_fig">
                                <figure class="box">
                                    <div class="box-layer layer-1"></div>
                                    <div class="box-layer layer-2"></div>
                                    <div class="box-layer layer-3"></div>
                                    <img src="{{asset('theme/local/extra-images/department-fig3.jpg')}}" alt="">
                                    <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                                </figure>
                                <div class="city_department_text">
                                    <h5 contenteditable="true">Health Care</h5>
                                    <p contenteditable="true">This is Photoshop's version  of Ipsum. </p>
                                    <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="width_control">
                            <div class="city_department_fig">
                                <figure class="box">
                                    <div class="box-layer layer-1"></div>
                                    <div class="box-layer layer-2"></div>
                                    <div class="box-layer layer-3"></div>
                                    <img src="{{asset('theme/local/extra-images/department-fig4.jpg')}}" alt="">
                                    <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                                </figure>
                                <div class="city_department_text">
                                    <h5 contenteditable="true">Travel & Tourism</h5>
                                    <p contenteditable="true">This is Photoshop's version  of Ipsum. </p>
                                    <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="width_control">
                            <div class="city_department_fig">
                                <figure class="box">
                                    <div class="box-layer layer-1"></div>
                                    <div class="box-layer layer-2"></div>
                                    <div class="box-layer layer-3"></div>
                                    <img src="{{asset('theme/local/extra-images/department-fig5.jpg')}}" alt="">
                                    <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                                </figure>
                                <div class="city_department_text">
                                    <h5 contenteditable="true">Police Department</h5>
                                    <p contenteditable="true">This is Photoshop's version  of Ipsum. </p>
                                    <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CITY DEPARTMENT WRAP END-->

    <!--CITY OFFICE WRAP START-->
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
                                <h3 contenteditable="true">Mayor’s Office</h3>
                                <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="city_office_logo">
                                <a href="#"><img src="{{asset('theme/local/images/office-logo.png')}}" alt=""></a>
                            </div>
                            <div class="city_office_text pull_right">
                                <h6 contenteditable="true">City</h6>
                                <h3 contenteditable="true">Council Office</h3>
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
    <!--CITY OFFICE WRAP END-->

    <!--CITY BLOG WRAP START-->
    <div class="city_blog_wrap">
        <div class="container">
            <!--SECTION HEADING START-->
            <div class="heding_full">
                <div class="section_heading">
                    <span contenteditable="true">Welcome to Local City</span>
                    <h2 contenteditable="true">City Spotlights</h2>
                </div>
                <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin, lorem quis bibendum auctor Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin, lorem quis bibendum auctor</p>
            </div>
            <!--SECTION HEADING END-->
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="city_blog_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('theme/local/extra-images/blog-fig.jpg')}}" alt="">
                        </figure>
                        <div class="city_blog_text">
                            <span contenteditable="true">Community</span>
                            <h4 contenteditable="true">Animal Control</h4>
                            <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctornisi elit.</p>
                            <div class="city_blog_social">
                                <a class="theam_btn border-color color" href="#" tabindex="0">Read More</a>
                                <div class="city_blog_icon_list">
                                    <ul class="social_icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                    <a class="share_icon" href="#"><i class="fa icon-social"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="city_blog_fig position">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('theme/local/extra-images/blog-hover.jpg')}}" alt="">
                        </figure>
                        <div class="city_blog_text">
                            <span contenteditable="true">Community</span>
                            <h4 contenteditable="true">Animal Control</h4>
                            <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctornisi elit.</p>
                            <div class="city_blog_social">
                                <a class="theam_btn border-color color" href="#" tabindex="0">Read More</a>
                                <div class="city_blog_icon_list">
                                    <ul class="social_icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                    <a class="share_icon" href="#"><i class="fa icon-social"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="city_blog_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('theme/local/extra-images/blog-fig1.jpg')}}" alt="">
                        </figure>
                        <div class="city_blog_text">
                            <span contenteditable="true">Community</span>
                            <h4 contenteditable="true" >Job Seeker</h4>
                            <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctornisi elit.</p>
                            <div class="city_blog_social">
                                <a class="theam_btn border-color color" href="#" tabindex="0">Read More</a>
                                <div class="city_blog_icon_list">
                                    <ul class="social_icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                    <a class="share_icon" href="#"><i class="fa icon-social"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="city_blog_fig position">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('theme/local/extra-images/blog-hover.jpg')}}" alt="">
                        </figure>
                        <div class="city_blog_text">
                            <span contenteditable="true">Community</span>
                            <h4 contenteditable="true">Job Seeker</h4>
                            <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctornisi elit.</p>
                            <div class="city_blog_social">
                                <a class="theam_btn border-color color" href="#" tabindex="0">Read More</a>
                                <div class="city_blog_icon_list">
                                    <ul class="social_icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                    <a class="share_icon" href="#"><i class="fa icon-social"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="city_blog_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('theme/local/extra-images/blog-fig2.jpg')}}" alt="">
                        </figure>
                        <div class="city_blog_text">
                            <span contenteditable="true">Community</span>
                            <h4 contenteditable="true">Senior Citizen</h4>
                            <p contenteditable="true"> This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctornisi elit.</p>
                            <div class="city_blog_social">
                                <a class="theam_btn border-color color" href="#" tabindex="0">Read More</a>
                                <div class="city_blog_icon_list">
                                    <ul class="social_icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                    <a class="share_icon" href="#"><i class="fa icon-social"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="city_blog_fig position">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('theme/local/extra-images/blog-hover.jpg')}}" alt="">
                        </figure>
                        <div class="city_blog_text">
                            <span contenteditable="true">Community</span>
                            <h4 contenteditable="true">Senior Citizen</h4>
                            <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctornisi elit.</p>
                            <div class="city_blog_social">
                                <a class="theam_btn border-color color" href="#" tabindex="0">Read More</a>
                                <div class="city_blog_icon_list">
                                    <ul class="social_icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                    <a class="share_icon" href="#"><i class="fa icon-social"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CITY BLOG WRAP END-->

    <!--CITY JOBS WRAP START-->
    <div class="city_jobs_wrap">
        <div class="city_jobs_fig">
            <div class="city_job_text">
                <span contenteditable="true"> Mayor of the city</span>
                <h2 contenteditable="true">Meet Dorien Daniels</h2>
                <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis </p>
                <a class="theam_btn" href="#" tabindex="0">Get In Touch</a>
            </div>
        </div>
        <div class="city_jobs_list">
            <ul>
                <li>
                    <div class="city_jobs_item overlay">
                        <span><i class="fa icon-team"></i></span>
                        <div class="ciy_jobs_caption">
                            <h2 contenteditable="true">Living Here</h2>
                            <p contenteditable="true">This is Photoshop's ersion  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</p>
                            <a href="#">Find Out More</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="city_jobs_item pull-right overlay">
                        <div class="ciy_jobs_caption">
                            <h2 contenteditable="true">Visit Here</h2>
                            <p contenteditable="true">This is Photoshop's ersion  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</p>
                            <a href="#">Find Out More</a>
                        </div>
                        <span><i class="fa icon-urban"></i></span>
                    </div>
                </li>
                <li>
                    <div class="city_jobs_item overlay">
                        <span><i class="fa icon-portfolio"></i></span>
                        <div class="ciy_jobs_caption">
                            <h2 contenteditable="true">Doing Busines Here</h2>
                            <p contenteditable="true">This is Photoshop's ersion  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</p>
                            <a href="#">Find Out More</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--CITY JOBS WRAP END-->

    <!--CITY PROJECT WRAP START-->
    <div class="city_project_wrap">
        <div class="container-fluid">
            <!--SECTION HEADING START-->
            <div class="section_heading center">
                <span contenteditable="true">Goverment</span>
                <h2 contenteditable="true">Programs & Projects</h2>
            </div>
            <!--SECTION HEADING END-->
            <div class="city_project_mansory">
                <ul id="filterable-item-filter-1">
                    <li><a data-value="all" href="#" contenteditable="true">All</a></li>
                    <li><a data-value="1" href="#"contenteditable="true">Categories</a></li>
                    <li><a data-value="2" href="#" contenteditable="true">Eco</a></li>
                    <li><a data-value="3" class="active" href="#">Programs</a></li>
                    <li><a data-value="4" href="#" contenteditable="true">Social life</a></li>
                    <li><a data-value="5" href="#" contenteditable="true">Sport</a></li>
                    <li><a data-value="6" href="#" contenteditable="true"> Technology</a></li>
                </ul>
            </div>
            <div class="city-project-slider">
                <div>
                    <div class="city_project_fig">
                        <figure class="overlay">
                            <img src="{{asset('theme/local/extra-images/project-fig.jpg')}}" alt="">
                            <div class="city_project_text">
                                <span><i class="fa icon-plastic"></i></span>
                                <a href="#" contenteditable="true">Constructions</a>
                                <h3><a href="#" contenteditable="true">Government vows to prioritize local contractors in infrastructure program</a></h3>
                            </div>
                        </figure>
                    </div>
                </div>

                <div>
                    <div class="city_project_fig">
                        <figure class="overlay">
                            <img src="{{asset('theme/local/extra-images/project-fig1.jpg')}}" alt="">
                            <div class="city_project_text">
                                <span><i class="fa icon-sun"></i></span>
                                <a href="#" contenteditable="true"> Goverment Solar Project</a>
                                <h3><a href="#" contenteditable="true">Businesses Should Accelerate Their Renewable Energy Strategy</a> </h3>
                            </div>
                        </figure>
                    </div>
                </div>

                <div>
                    <div class="city_project_fig">
                        <figure class="overlay">
                            <img src="{{asset('theme/local/extra-images/project-fig2.jpg')}}" alt="">
                            <div class="city_project_text">
                                <span><i class="fa icon-partner"></i></span>
                                <a href="#" contenteditable="true">Citizen Program</a>
                                <h3><a href="#" contenteditable="true">Government vows to prioritize local contractors in infrastructure program</a></h3>
                            </div>
                        </figure>
                    </div>
                </div>
                <div>
                    <div class="city_project_fig">
                        <figure class="overlay">
                            <img src="{{asset('theme/local/extra-images/project-fig2.jpg')}}" alt="">
                            <div class="city_project_text">
                                <span><i class="fa icon-plastic"></i></span>
                                <a href="#" contenteditable="true">Citizen Program</a>
                                <h3><a href="#" contenteditable="true">Government vows to prioritize local contractors in infrastructure program</a></h3>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CITY PROJECT WRAP END-->

    <!--CITY EVENT WRAP START-->
    <div class="city_event_wrap">
        <div class="bg_white width">
            <div class="container-fluid">
                <!--SECTION HEADING START-->
                <div class="heding_full">
                    <div class="section_heading">
                        <span contenteditable="true">Upcoming</span>
                        <h2 contenteditable="true">Feature Events & Meeting</h2>
                    </div>
                    <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin, lorem quis bibendum auctor Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin, lorem quis bibendum auctor</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="city_event_fig">
                            <figure class="box">
                                <div class="box-layer layer-1"></div>
                                <div class="box-layer layer-2"></div>
                                <div class="box-layer layer-3"></div>
                                <img src="{{asset('theme/local/extra-images/event-fig.jpg')}}" alt="">
                                <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/event-fig.jpg')}}" tabindex="-1"><i class="fa fa-plus"></i></a>
                            </figure>
                            <div class="city_event_text">
                                <div class="city_event_history">
                                    <div class="event_date">
                                        <span contenteditable="true">25</span>
                                        <strong contenteditable="true">SEP, 2018</strong>
                                    </div>
                                    <div class="city_date_text">
                                        <h5 class="custom_size" contenteditable="true">Mayor Conferences</h5>
                                        <a href="#"><i class="fa fa-clock-o" contenteditable="true"></i>05:23 AM - 09:23 AM </a>
                                    </div>
                                </div>
                                <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean..</p>
                                <a href="#" contenteditable="true">  : <span>Alexzender</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="city_event_fig">
                            <figure class="box">
                                <div class="box-layer layer-1"></div>
                                <div class="box-layer layer-2"></div>
                                <div class="box-layer layer-3"></div>
                                <img src="{{asset('theme/local/extra-images/event-fig1.jpg')}}" alt="">
                                <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/event-fig1.jpg')}}" tabindex="-1"><i class="fa fa-plus"></i></a>
                            </figure>
                            <div class="city_event_text">
                                <div class="city_event_history">
                                    <div class="event_date">
                                        <span contenteditable="true">24</span>
                                        <strong contenteditable="true">SEP, 2018</strong>
                                    </div>
                                    <div class="city_date_text">
                                        <h5 class="custom_size" contenteditable="true">Culture & Recreation</h5>
                                        <a href="#" contenteditable="true"><i class="fa fa-clock-o"></i>05:23 AM - 09:23 AM </a>
                                    </div>
                                </div>
                                <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean..</p>
                                <a href="#" contenteditable="true">Speaker : <span >Alexzender</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="city_event_fig">
                            <figure class="box">
                                <div class="box-layer layer-1"></div>
                                <div class="box-layer layer-2"></div>
                                <div class="box-layer layer-3"></div>
                                <img src="{{asset('theme/local/extra-images/event-fig2.jpg')}}" alt="">
                                <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/event-fig2.jpg')}}" tabindex="-1"><i class="fa fa-plus"></i></a>
                            </figure>
                            <div class="city_event_text">
                                <div class="city_event_history">
                                    <div class="event_date">
                                        <span contenteditable="true">20</span>
                                        <strong contenteditable="true">SEP, 2018</strong>
                                    </div>
                                    <div class="city_date_text">
                                        <h5 class="custom_size">Fundraise Event</h5>
                                        <a href="#"><i class="fa fa-clock-o"></i>05:23 AM - 09:23 AM </a>
                                    </div>
                                </div>
                                <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean..</p>
                                <a href="#" contenteditable="true">Speaker : <span>Alexzender</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="city_event_fig">
                            <figure class="box">
                                <div class="box-layer layer-1"></div>
                                <div class="box-layer layer-2"></div>
                                <div class="box-layer layer-3"></div>
                                <img src="{{asset('theme/local/extra-images/event-fig3.jpg')}}" alt="">
                                <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/event-fig3.html')}}" tabindex="-1"><i class="fa fa-plus"></i></a>
                            </figure>
                            <div class="city_event_text">
                                <div class="city_event_history">
                                    <div class="event_date">
                                        <span contenteditable="true">15</span>
                                        <strong contenteditable="true">SEP, 2018</strong>
                                    </div>
                                    <div class="city_date_text">
                                        <h5 class="custom_size" contenteditable="true">Coporate Meetings</h5>
                                        <a href="#" contenteditable="true"><i class="fa fa-clock-o"></i>05:23 AM - 09:23 AM </a>
                                    </div>
                                </div>
                                <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean..</p>
                                <a href="#" contenteditable="true">Speaker : <span>Alexzender</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CITY EVENT WRAP END-->

    <!--CITY CLIENT WRAP START-->
    <div class="city_client_wrap">
        <div class="container">
            <div class="city_client_row">
                <ul class="bxslider bx-pager">
                    <li>
                        <div class="city_client_fig">
                            <figure class="box">
                                <div class="box-layer layer-1"></div>
                                <div class="box-layer layer-2"></div>
                                <div class="box-layer layer-3"></div>
                                <img src="{{asset('theme/local/extra-images/client.jpg')}}" alt="">
                            </figure>
                            <div class="city_client_text">
                                <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. </p>
                                <h4><a href="#" contenteditable="true">Likor Stom</a> </h4>
                                <span><a href="#" contenteditable="true">Directio-Baseline</a></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="city_client_fig">
                            <figure class="box">
                                <div class="box-layer layer-1"></div>
                                <div class="box-layer layer-2"></div>
                                <div class="box-layer layer-3"></div>
                                <img src="{{asset('theme/local/extra-images/client.jpg')}}" alt="">
                            </figure>
                            <div class="city_client_text">
                                <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. </p>
                                <h4><a href="#" contenteditable="true">Likor Stom</a> </h4>
                                <span><a href="#" contenteditable="true">Directio-Baseline</a></span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="city_client_link" id="bx-pager">
                <a data-slide-index="0" href="#">
                    <div class="client_arrow">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('theme/local/extra-images/client1.jpg')}}" alt="">
                        </figure>
                    </div>
                </a>
                <a data-slide-index="1" href="#">
                    <div class="client_arrow">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('theme/local/extra-images/client2.jpg')}}" alt="">
                        </figure>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--CITY CLIENT WRAP END-->

    <!--CITY NEWS WRAP START-->
    <div class="city_news_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--SECTION HEADING START-->
                    <div class="section_heading margin-bottom">
                        <span contenteditable="true">Welcome to Local City</span>
                        <h2 contenteditable="true">News Releases</h2>
                    </div>
                    <!--SECTION HEADING START-->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="city_news_fig">
                                <figure class="box">
                                    <div class="box-layer layer-1"></div>
                                    <div class="box-layer layer-2"></div>
                                    <div class="box-layer layer-3"></div>
                                    <img src="{{asset('theme/local/extra-images/news-fig.jpg')}}" alt="">
                                </figure>
                                <div class="city_news_text">
                                    <h2 contenteditable="true">A Fundraiser for the City Club</h2>
                                    <ul class="city_news_meta">
                                        <li><a href="#" contenteditable="true">May 22, 2018</a></li>
                                        <li><a href="#" contenteditable="true">Public Notices</a></li>
                                    </ul>
                                    <p contenteditable="true">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sollicitudin</p>
                                    <a class="theam_btn border-color color" href="#" tabindex="0">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="city_news_row">
                                <ul>
                                    <li>
                                        <div class="city_news_list">
                                            <figure class="box">
                                                <div class="box-layer layer-1"></div>
                                                <div class="box-layer layer-2"></div>
                                                <div class="box-layer layer-3"></div>
                                                <img src="{{asset('theme/local/extra-images/news-fig1.jpg')}}" alt="">
                                            </figure>
                                            <div class="city_news_list_text">
                                                <h5 contenteditable="true">Lorem Ipsum Proin gravida nibh </h5>
                                                <ul class="city_news_meta">
                                                    <li><a href="#" contenteditable="true">May 22, 2018</a></li>
                                                    <li><a href="#" contenteditable="true">Public Notices</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="city_news_list">
                                            <figure class="box">
                                                <div class="box-layer layer-1"></div>
                                                <div class="box-layer layer-2"></div>
                                                <div class="box-layer layer-3"></div>
                                                <img src="{{asset('theme/local/extra-images/news-fig2.jpg')}}" alt="">
                                            </figure>
                                            <div class="city_news_list_text">
                                                <h5>Lorem Ipsum Proin gravida nibh </h5>
                                                <ul class="city_news_meta">
                                                    <li><a href="#" contenteditable="true">May 22, 2018</a></li>
                                                    <li><a href="#">Public Notices</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="city_news_list">
                                            <figure class="box">
                                                <div class="box-layer layer-1"></div>
                                                <div class="box-layer layer-2"></div>
                                                <div class="box-layer layer-3"></div>
                                                <img src="{{asset('theme/local/extra-images/news-fig3.jpg')}}" alt="">
                                            </figure>
                                            <div class="city_news_list_text">
                                                <h5 contenteditable="true">Lorem Ipsum Proin gravida nibh </h5>
                                                <ul class="city_news_meta">
                                                    <li><a href="#" contenteditable="true">May 22, 2018</a></li>
                                                    <li><a href="#">Public Notices</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="city_news_list">
                                            <figure class="box">
                                                <div class="box-layer layer-1"></div>
                                                <div class="box-layer layer-2"></div>
                                                <div class="box-layer layer-3"></div>
                                                <img src="{{asset('theme/local/extra-images/news-fig4.jpg')}}" alt="">
                                            </figure>
                                            <div class="city_news_list_text">
                                                <h5 contenteditable="true">Lorem Ipsum Proin gravida nibh </h5>
                                                <ul class="city_news_meta">
                                                    <li contenteditable="true"><a href="#">May 22, 2018</a></li>
                                                    <li contenteditable="true"><a href="#">Public Notices</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="city_news_list">
                                            <figure class="box">
                                                <div class="box-layer layer-1"></div>
                                                <div class="box-layer layer-2"></div>
                                                <div class="box-layer layer-3"></div>
                                                <img src="{{asset('theme/local/extra-images/news-fig5.jpg')}}" alt="">
                                            </figure>
                                            <div class="city_news_list_text">
                                                <h5 contenteditable="true">Lorem Ipsum Proin gravida nibh </h5>
                                                <ul class="city_news_meta">
                                                    <li><a href="#" contenteditable="true">May 22, 2018</a></li>
                                                    <li><a href="#" contenteditable="true">Public Notices</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="city_news_form">
                        <div class="city_news_feild">
                            <span contenteditable="true">Signup</span>
                            <h4 contenteditable="true">Newsletter</h4>
                            <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida </p>
                            <div class="city_news_search">
                                <input type="text" name="text" placeholder="Enter Your Email Adress Here" required>
                                <button class="theam_btn border-color color">Subcribe Now</button>
                            </div>
                        </div>
                        <div class="city_news_feild feild2">
                            <span contenteditable="true">Recent</span>
                            <h4 contenteditable="true">Documents</h4>
                            <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida </p>
                            <div class="city_document_list">
                                <ul>
                                    <li contenteditable="true"><a href="#"><i class="fa icon-document"></i>Council Agenda April 24, 2015 (27 kB)</a></li>
                                    <li contenteditable="true"><a href="#"><i class="fa icon-document"></i>Council Agenda April 24, 2015 (27 kB)</a></li>
                                    <li contenteditable="true"><a href="#"><i class="fa icon-document"></i>Council Agenda April 24, 2015 (27 kB)</a></li>
                                    <li contenteditable="true"><a href="#"><i class="fa icon-document"></i>Council Agenda April 24, 2015 (27 kB)</a></li>
                                    <li contenteditable="true"><a href="#"><i class="fa icon-document"></i>Council Agenda April 24, 2015 (27 kB)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CITY NEWS WRAP END-->

    <!--CITY REQUEST WRAP END-->
@endsection
