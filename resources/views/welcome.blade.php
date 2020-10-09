@extends('layouts.apps')
@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                </ol>
                <h5 class="social-title">Welcome back, Elana!</h5>

            </div>
            <div class="col-lg-6">
                <!-- Bookmark Start-->
                <div class="bookmark pull-right">
                    <ul>
                        <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                        <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                        <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                        <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                        <li>
                            <a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                            <form class="form-inline search-form">
                                <div class="form-group form-control-search">
                                    <input type="text" placeholder="Search..">
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- Bookmark Ends-->
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-9 xl-100 box-col-12">
            <div class="row">
                <div class="col-12">
                    <div class="project-overview">
                        <div class="row">
                            <div class="col-xl-2 col-sm-4 col-6">
                                <h2 class="f-w-600 counter font-primary">18</h2>
                                <p class="mb-0">Active Cases</p>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <h2 class="f-w-600 counter font-secondary">143</h2>
                                <p class="mb-0">Pending Tasks</p>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <h2 class="f-w-600 counter font-success">574</h2>
                                <p class="mb-0">Upcoming Events</p>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <h2 class="f-w-600 counter font-info">15</h2>
                                <p class="mb-0">New Messages</p>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <h2 class="f-w-600 counter font-warning">20</h2>
                                <p class="mb-0">Open Requests</p>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <h2 class="f-w-600 counter font-danger">312</h2>
                                <p class="mb-0">Hours Spent</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 box-col-6">
                    <div class="card card-with-border monthly-growth">
                        <div class="card-header card-no-border">
                            <h5>Task Completion Level</h5>
                            <div class="chart-value-box pull-right chart-data-set">
                                <div class="value-square-box-info"></div>
                                <span>Tasks</span>
                            </div>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="icofont icofont-double-left"></i></li>
                                    <li><i class="view-html fa fa-code"></i></li>
                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                    <li><i class="icofont icofont-error close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body pt-0 o-hidden">
                            <div class="spaline-container">
                                <div id="area-spaline"></div>
                            </div>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body pt-0 o-hidden"&gt;
  &lt;div class="spaline-container"&gt;
    &lt;div id="area-spaline"&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 box-col-6">
                    <div class="card card-with-border">
                        <div class="card-header card-no-border">
                            <h5>Tasks</h5>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="icofont icofont-double-left"></i></li>
                                    <li><i class="view-html fa fa-code"></i></li>
                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                    <li><i class="icofont icofont-error close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body pt-0 o-hidden">
                            <div class="apex-circle">
                                <div id="circlechart"></div>
                            </div>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body pt-0 o-hidden"&gt;
  &lt;div class="apex-circle"&gt;
    &lt;div id="circlechart"&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
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

