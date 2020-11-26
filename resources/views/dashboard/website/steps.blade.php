
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Potenza - Job Application Form Wizard with Resume upload and Branch feature">
    <meta name="author" content="Ansonika">
    <title>Multisite</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/vendor.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

    <!-- MODERNIZR MENU -->
    <script src="{{asset('js/modernizr.js')}}"></script>

</head>

<body>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->

<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->

<nav>
    <ul class="cd-primary-nav">
        @include('layouts.headerstep')


    </ul>
</nav>
<!-- /menu -->

<div class="container-fluid">
    <div class="row row-height">
        <div class="col-xl-4 col-lg-4 content-left">
            <div class="content-left-wrapper">
{{--                <a href="index.html" id="logo" style="color: white">Multisite.</a>--}}

                <div id="social">
                    <ul>
                        <li><a href="#0"><i class="icon-facebook"></i></a></li>
                        <li><a href="#0"><i class="icon-twitter"></i></a></li>
                        <li><a href="#0"><i class="icon-google"></i></a></li>
                        <li><a href="#0"><i class="icon-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- /social -->
                <div>
                    <figure><img src="../img/info_graphic_1.svg" alt="" class="img-fluid" width="270" height="270"></figure>
                    <h2>Welcome to Multisite</h2>
                    <p>Create your own website in few minutes
                    </p>
{{--                    <a href="https://1.envato.market/A6oJN" class="btn_1 rounded yellow" target="_parent">Purchase this template</a>--}}
                    <a href="#start" class="btn_1 rounded mobile_btn">Start Now!</a>
                </div>
                <div class="copy">© 2020 Multisite</div>
            </div>
            <!-- /content-left-wrapper -->
        </div>

        <!-- /content-left -->
        <div class="col-xl-8 col-lg-8 content-right" id="start">
            <div id="wizard_container">
                <div id="top-wizard">
                    <span id="location"></span>
                    <div id="progressbar"></div>
                </div>
                <!-- /top-wizard -->
                <form method="POST" action="{{route('websites.store')}}" enctype="multipart/form-data">
                    <input id="website" name="website" type="text" value="">

                    <!-- Leave for security protection, read docs for details -->
                    <div id="middle-wizard">

                        <div class="step">
                            <h2 class="section_title">Add your website details
                            </h2>
                            <h3 class="main_question">You are just a step away from starting your website! Get your website subdomain here.
                            </h3>
                            <div class="form-group add_top_30">
                                <label for="name">Website domain</label>
                                <input type="text" name="fi-first-name" id="fi-first-name" class="form-control required" onchange="getVals(this, 'fi-first-name');">
                            </div>
                            <div class="form-group">
                                <label for="email">How do you describe your website</label>
                                <textarea  name="description" id="description" class="form-control required" onchange="getVals(this, 'description');">
                                </textarea>
                            </div>
                        </div>

                        <div class="step" id="bio">
                            <h2 class="section_title">Choose menu links

                            </h2>
                            <h3 class="main_question">
                                The menu links will be added to the selected website. This
                                can be changed                            </h3>
                            <div class="form-group radio_input">
                                <div class="row">

                                    @foreach($pages as $page)
                                        <div class="col-md-4" >

                                            <label class="container_check">{{$page->title}}
                                                <input type="checkbox" name="ui_designer_experience_2[]" id="page_id[]" value="{{$page->id}}" class="required">
                                                <span class="checkmark"></span>
                                            </label></div>
                                    @endforeach</div>

                            </div>
                        </div>
                        <div class="step" id="bio">
                            <h2 class="section_title">Choose your template
                            </h2>
                            <div class="form-group radio_input">
                                <div class="row">

                                    @foreach($themes as $theme)

                                        <div class="col-md-4" >
                                            <div class=""  >
                                                <input id="{{$theme->id}}" type="radio" name="radio1" value="{{$theme->id}}" required>
                                                <label for="radio" >
                                                    <img src="{{asset('images/'.$theme->theme_image)}}" style="width: 100%;height:100px"/>
                                                    <br>  {{@$theme->name}}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach</div>

                            </div>
                        </div>
                        <div class="step" id="bio">

                            <div class="summary">
                                <h2 class="section_title">Add settings
                                </h2>
                                    <div class="form-group">
                                            <div class="form-group add_top_30">
                                                <label for="name">Upload favicon</label>
                                                <input class="form-control required"   type="file" name="favicon">
                                            </div>
                                        <div class="form-group add_top_30">
                                            <label for="name">Upload logo</label>
                                            <input class="form-control"  id="logo_name" type="file" name="logo_name">
                                        </div>
                                        <div class="form-group add_top_30">
                                            <label for="name">Brand Name</label>
                                            <input class="form-control"   id="brand_name" name="brand_name" type="text" placeholder="Brand name" value=" ">
                                        </div>

                                        <div class="form-group">
                                                <label for="email">Brand Color</label>
                                            <input class="form-control"  id="brand_color" type="color" name="brand_color" value="#563d7c">
                                            </div>
                            </div>
                        </div>



                    </div>
                        <div class="submit step">

                            <h2 class="section_title">Add custom widgets

                                </h2>
                                <h3 class="main_question">
                                    Add widgets to make your website more ascetic and more
                                    user friendly
                                </h3>
<div class="row">
    <div class="col-md-6">


<div class="text center">


                                <div class="form-group add_top_30">

                                   <p> <label class="container_check">Events<i class="icon-download"></i>
                                        <input type="checkbox" name="news" id="events" value="events">
                                        <span class="checkmark"></span>
                                       </label></p></div>
                                <div class="form-group add_top_30">

                                    <label class="container_check"><p>Notifications      <i class="icon-user"></i></p>
                                        <input type="checkbox" name="notifications" id="notifications" value="notifications">
                                        <span class="checkmark"></span>
                                </label></div>
                                <div class="form-group add_top_30">

                                <label class="container_check"> Content     <i class="icon-pencil icon-4x"></i>
                                        <input type="checkbox" name="content"  id="content" value="content" >
                                        <span class="checkmark"></span>
                                </label></div>
                                <div class="form-group add_top_30">

                                <label class="container_check">   Publication     <i class="icon-book icon-4x"></i>
                                        <input type="checkbox" name="publication" value="publication" id="publication" >
                                        <span class="checkmark"></span>
                                </label></div>
                                <div class="form-group add_top_30">

                                <label class="container_check">   Sidebar     <i class="icon-flag icon-4x"></i>
                                        <input type="checkbox" name="news" value="sidebar" id="sidebar">
                                        <span class="checkmark"></span>
                                </label></div>


                            </div>
                        </div>
</div>
                        </div>
                        <!-- /middle-wizard -->
                    <div id="bottom-wizard">
                        <button type="button" name="backward" class="backward">Prev</button>
                        <button type="button" name="forward" class="forward">Next</button>
                        <button type="submit"  class="submit">View your website</button>
                    </div>
                    <!-- /bottom-wizard -->
                    </div>
                </form>
            </div>
            <!-- /Wizard container -->
        </div>
        <!-- /content-right-->
    </div>
    <!-- /row-->
</div>
<!-- /container-fluid -->

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- /cd-overlay-nav -->

<div class="cd-overlay-content">
    <span></span>
</div>
<!-- /cd-overlay-content -->

<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
<!-- /menu button -->

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- COMMON SCRIPTS -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/common_script.js')}}"></script>
<script src="{{asset('js/velocity.js')}}"></script>
<script src="{{asset('js/common.js')}}"></script>
<script src="{{asset('js/validator.js')}}"></script>

<!-- Wizard script-->
<script src="{{asset('js/func.js')}}"></script>


</body>
</html>
