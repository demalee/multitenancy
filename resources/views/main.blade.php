@extends('layouts.apps')
@section('content')
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}

    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                    </ol>
                    <h5 class="social">Welcome back, {{Auth::user()->name}}</h5>

                </div>

            </div>
        </div>
    </div>
    <div class="container" id="theme">
        <div class="row">
            <div class="col-md-">



                        <div class="card card-with-border resolve-complain insta-profile">
                            <div class="card-header card-no-border">
                                <div class="media">
                                    <div class="col-md-6">
                                    <img src="{{asset('images/'.@$active_theme->theme_image)}}" alt="" style="width: 100%; height: 200px;">
                                    </div>    <div class="col-md-9"><div class="media-body">
                                        <h5>{{str_replace('_',' ',@$website->name)}}
                                        </h5>
                                        <p class="f-12">
                                            {{@$website->description}}
                                        </p>
                                        <ul>
                                            <li>
                                                <a class="btn btn-light" href="{{url('home')}}">View your website</a>
                                            </li>
                                            <li>
                                                <a class="btn btn-primary" href="{{url('themes')}}">Change template
                                                </a>
                                            </li>
                                        </ul>
{{--                                            <ul>--}}
{{--                                                <li>--}}

{{--                                                    <form action="{{route('config.test')}}" method="post">--}}
{{--                                                        @csrf--}}
{{--                                                        <button class="btn btn-primary">Submit</button>--}}
{{--                                                    </form>--}}
{{--                                                </li>--}}

{{--                                            </ul>--}}
                                        </div></div>
                                </div>
                            </div>
                        </div>
                    </div></div></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 xl-100 box-col-12">
            <div class="row total-sale-col">
                <div class="col-xl-12 box-col-12 xl-100">
                    <div class="row">
                        <div class="col-12 xl-100">
                            <div class="card card-with-border welcome-card o-hidden">
                                <img class="main" src="https://laravel.pixelstrap.com/xolo/assets/images/dashboard/welcome.png" alt="" style="height: 500px">
                                <div class="card-header card-no-border o-hidden total-sale-widget">
                                    <div class="media">
                                        <div class="media-body">
                                            <h3 class="f-w-600">Theme editing</h3>
                                            <ol>
                                            <li>You have successfully choosen and activated your preffered template</li>
                                            <p>NB: You can still choose to change your theme by activating the other theme <a href="{{url('/themes')}}">Here</a> </p>
                                            <li>Click on preview link to edit your website content</li>
                                            <li>Preview will take you to your activated template page,use widget at the top <br>of the navigation bar to add content.</li>
                                             <li>Each widget represents the type of content that will be displayed on each page.</li>
                                            <li>Make sure you activate the widget for each page before using theme <a href="{{route('widgets.create')}}">Here.</a> </li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="media mt-5">
                                        <div class="media-body">

                                            <h5 class="f-w-400">Website publishing</h5>

                                            <p class="mb-0">If you wish to publish your active website:</p>
                                            <ol start="1">
                                                <li>Make sure you have created a subdomain or domain in your server/cpanel </li>
                                                <li>The created subdomain/domain should merge the domain name given <br>during initial website creation process/steps</li>
                                                   <li>Click <a href="{{url('dashboard/dns')}}"> here </a>to navigate to activation page</li>
                                                <li>If successfully activated ,you will see a success message </li>
                                                <li>Navigate to the domain name in the browser,the published website should be functional</li>
                                                <li>To update the changes, login as admin to the dashboard using the credentials you used to login to multisite dashboard</li>

                                            </ol>
                                        </div>
                                    </div>
                                </div><a class="btn btn-primary" href="{{url('dashboard/dns')}}">Publish your website
                                </a>
                            </div>
                        </div>
    <!-- Container-fluid starts-->
{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xl-9 xl-100 box-col-12">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="project-overview">--}}
{{--                            <div class="row">--}}

{{--                                <div class="col-xl-6 col-sm-4 col-6"><div class="media-body">--}}
{{--                                        <center><p><i data-feather="zap"></i></p></center>--}}
{{--                                        <h5>Publish your website--}}

{{--                                        </h5>--}}
{{--                                        <p class="f-12">--}}
{{--                                            The description of the website will go here. I--}}
{{--                                            am sure it will make it more appealing--}}

{{--                                        </p>--}}
{{--                                        <ul>--}}



{{--                                            <li>--}}
{{--                                                <button class="btn btn-primary" type="button">Publish--}}
{{--                                                </button>--}}

{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div></div>--}}
{{--                                <div class="col-xl-2 col-sm-4 col-6">--}}
{{--                                    <h2 class="f-w-600 counter font-info">15</h2>--}}
{{--                                    <p class="mb-0">New Messages</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-2 col-sm-4 col-6">--}}
{{--                                    <h2 class="f-w-600 counter font-warning">20</h2>--}}
{{--                                    <p class="mb-0">Open Requests</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-2 col-sm-4 col-6">--}}
{{--                                    <h2 class="f-w-60 counter font-danger">312</h2>--}}
{{--                                    <p class="mb-0">Hours Spent</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-7 box-col-6">--}}
{{--                        <div class="card card-with-border monthly-growth">--}}
{{--                            <div class="card-header card-no-border">--}}
{{--                                <h5>Task Completion Level</h5>--}}
{{--                                <div class="chart-value-box pull-right chart-data-set">--}}
{{--                                    <div class="value-square-box-info"></div>--}}
{{--                                    <span>Tasks</span>--}}
{{--                                </div>--}}
{{--                                <div class="card-header-right">--}}
{{--                                    <ul class="list-unstyled card-option">--}}
{{--                                        <li><i class="icofont icofont-double-left"></i></li>--}}
{{--                                        <li><i class="view-html fa fa-code"></i></li>--}}
{{--                                        <li><i class="icofont icofont-maximize full-card"></i></li>--}}
{{--                                        <li><i class="icofont icofont-minus minimize-card"></i></li>--}}
{{--                                        <li><i class="icofont icofont-refresh reload-card"></i></li>--}}
{{--                                        <li><i class="icofont icofont-error close-card"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-body pt-0 o-hidden">--}}
{{--                                <div class="spaline-container">--}}
{{--                                    <div id="area-spaline"></div>--}}
{{--                                </div>--}}
{{--                                <div class="code-box-copy">--}}
{{--                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>--}}
{{--                                    <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;--}}
{{--&lt;div class="card-body pt-0 o-hidden"&gt;--}}
{{--  &lt;div class="spaline-container"&gt;--}}
{{--    &lt;div id="area-spaline"&gt;&lt;/div&gt;--}}
{{--  &lt;/div&gt;--}}
{{--&lt;/div&gt;--}}
{{--&lt;!-- Cod Box Copy end --&gt;</code></pre>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-5 box-col-6">--}}
{{--                        <div class="card card-with-border">--}}
{{--                            <div class="card-header card-no-border">--}}
{{--                                <h5>Tasks</h5>--}}
{{--                                <div class="card-header-right">--}}
{{--                                    <ul class="list-unstyled card-option">--}}
{{--                                        <li><i class="icofont icofont-double-left"></i></li>--}}
{{--                                        <li><i class="view-html fa fa-code"></i></li>--}}
{{--                                        <li><i class="icofont icofont-maximize full-card"></i></li>--}}
{{--                                        <li><i class="icofont icofont-minus minimize-card"></i></li>--}}
{{--                                        <li><i class="icofont icofont-refresh reload-card"></i></li>--}}
{{--                                        <li><i class="icofont icofont-error close-card"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-body pt-0 o-hidden">--}}
{{--                                <div class="apex-circle">--}}
{{--                                    <div id="circlechart"></div>--}}
{{--                                </div>--}}
{{--                                <div class="code-box-copy">--}}
{{--                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>--}}
{{--                                    <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;--}}
{{--&lt;div class="card-body pt-0 o-hidden"&gt;--}}
{{--  &lt;div class="apex-circle"&gt;--}}
{{--    &lt;div id="circlechart"&gt;&lt;/div&gt;--}}
{{--  &lt;/div&gt;--}}
{{--&lt;/div&gt;--}}
{{--&lt;!-- Cod Box Copy end --&gt;</code></pre>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--    </div>--}}
@endsection
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            @endif--}}

