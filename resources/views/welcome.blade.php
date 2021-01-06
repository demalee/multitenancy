@extends('our_layouts.layouts.apps')
@section('content')
<div class="site-blocks-cover overlay" style="background-image: url(our_theme/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

                <div class="row justify-content-center mb-4">
                    <div class="col-md-8 text-center">
                        <h1>Welcome to multisite <span class="typed-wods"></span></h1>
                        <p class="lead mb-5">Create your own  <a href="#" target="_blank">website in few minutes</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Grid row -->
<style>
    ul.timeline {
        list-style-type: none;
        position: relative;
    }
    ul.timeline:before {
        content: ' ';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 29px;
        width: 2px;
        height: 100%;
        z-index: 400;
    }
    ul.timeline > li {
        margin: 20px 0;
        padding-left: 20px;
    }
    ul.timeline > li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #22c0e8;
        left: 20px;
        width: 20px;
        height: 20px;
        z-index: 400;
    }
</style>

<!------ Include the above in your HEAD tag ---------->

<!------ Include the above in your HEAD tag ---------->

<section class="site-section" id="home">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center" data-aos="fade-up">
                <h2 class="text-black h1 site-section-heading text-center">Steps of creating your website</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="p-3 box-with-humber">
                    <div class="number-behind">01.</div>
                    <h2 class="text-primary">Create Account</h2>
                    <p class="mb-4">First create account if you dont have one,or login if you already have an account with us.</p>
{{--                    <p class="mb-4">Fill in the following details in registration page.</p>--}}

{{--                    <ul class="list-unstyled ul-check primary">--}}
{{--                        <li>Your name</li>--}}
{{--                        <li>Your username/Email</li>--}}
{{--                        <li>Your Password</li>--}}
{{--                    </ul>--}}
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="p-3 box-with-humber">
                    <div class="number-behind">02.</div>
                    <h2 class="text-primary">Website creation process</h2>
                    <p class="mb-4">After successully creating an account with us for the first time,you will be redirected to a page that will allow you to create your website.</p>
{{--                    <p class="mb-4">The first process is filling in the webiste information.</p>--}}

{{--                    <ul class="list-unstyled ul-check primary">--}}
{{--                        <li>Website title-This is the url or domain of the website you want to create.</li>--}}
{{--                        <li>Website description-Describe the website you want to create,the use and its goals</li>--}}

{{--                    </ul>--}}
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="p-3 box-with-humber">
                    <div class="number-behind">03.</div>
                    <h2 class="text-primary">Themes</h2>
                    <p class="mb-4">We have provided you with sample themes where you will choose to create the website</p>
                    <p class="mb-4">The themes are for the looks and feels of the website.</p>

{{--                    <ul class="list-unstyled ul-check primary">--}}
{{--                        <li>You will be able to manipulate the theme you have choosen based on your interest.This is done in the dashboard</li>--}}
{{--                        <li>You will be able to create your own content,add images and edit the website as per your preference</li>--}}

{{--                    </ul>--}}
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="p-3 box-with-humber">
                    <div class="number-behind">04.</div>
                    <h2 class="text-primary">Menus</h2>
                    <p class="mb-4">Menus are basically the links and urls of the website.</p>
                    <p class="mb-4">You will choose which menus you would like to appear on your websites.</p>

{{--                    <ul class="list-unstyled ul-check primary">--}}
{{--                        <li>Header-Are the urlsof the webiste located at the top</li>--}}
{{--                        <li>Subheader-Header can have a subheader.An example is in this landing page where we have phone number at the top then below it is header.</li>--}}
{{--                        <li>Menu-Headers holds menus</li>--}}
{{--                        <li>Submenu-Menus can consist of submenus(the dropdowns)</li>--}}
{{--                        <li>Footer-Located at the bottom of the webiste</li>--}}
{{--                        <li>Sidebar-Located either at the right or left of the website body.Holds urls or extra information</li>--}}

{{--                    </ul>--}}
                </div>
            </div>
        </div>
    </div>
    <a href="{{url('steps')}}" class="bg-primary py-5 d-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md10"><h2 class="text-white">See More steps  </h2></div>
            </div>
        </div>
    </a>
</section>



<section class="section ft-feature-1" id="why-us">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-12 bg-black w-100 ft-feature-1-content">
                <div class="row align-items-center">
                    <div class="col-lg-5">

                        <img src="our_theme/images/about_1.jpg" alt="Image" class="img-fluid mb-4 mb-lg-0">

                    </div>
                    <div class="col-lg-3 ml-auto">
                        <div class="mb-5">
                            <h3 class="d-flex align-items-center"><span class="icon icon-beach_access mr-2"></span><span>Theme editing</span></h3>
                            <p>After completing website creation process,you will be redirected to theme you have chosen.Click on dashboard and enjoy editing your website</p>


                        </div>

                        <div>
                            <h3 class="d-flex align-items-center"><span class="icon icon-build mr-2"></span><span>Resources</span></h3>
                            <p>In the dashboard,we have provided you with all the resources and tools you will need to create a complete website.</p>

                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="mb-5">
                            <h3 class="d-flex align-items-center"><span class="icon icon-format_paint mr-2"></span><span>Easy to use</span></h3>
                            <p>The dashboard is simple and easy to use.Its  easy to understand.</p>

                        </div>

                        <div>
                            <h3 class="d-flex align-items-center"><span class="icon icon-question_answer mr-2"></span><span>user friendly </span></h3>
                            <p>The steps and procedures needed during website and pages creation is simple and easy to follow.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="site-section border-bottom" id="services-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center" data-aos="fade-up">
                <h2 class="text-black h1 site-section-heading text-center">Services</h2>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary icon-laptop2"></span></div>
                    <div>
                        <h3>Page Creation</h3>
                        <p>Every website has a page,on the dasboard you will be able to create a specific page for the website</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary icon-shopping_cart"></span></div>
                    <div>
                        <h3>Menus and Widgets</h3>
                        <p>The pages urls will be in Menus.The menus and widgets is used to navigate to different pages created.You can add and edit menus for your website</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary icon-question_answer"></span></div>
                    <div>
                        <h3>  Custom  Themes</h3>
                        <p>You can activate and preview the available themes in the dahsboard.After activating a specific,you can preview and edit the selected themes</p>

                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary icon-format_paint"></span></div>
                    <div>
                        <h3>Gallery</h3>
                        <p>Gallery is used to store your media eg images.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary icon-extension"></span></div>
                    <div>
                        <h3>Settings</h3>
                        <p>Settings helps you customize your website eg changing logo</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary icon-phonelink"></span></div>
                    <div>
                        <h3>  Appearance</h3>
                        <p>The appearace consist of themes,widgets and menus.This is basically the part where you customize your website</p>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




@endsection
