<header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-11 col-xl-2">
                <h1 class="mb-0 site-logo"><a href="#home-section" class="text-black h2 mb-0">Multisite<span class="text-primary">.</span> </a></h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="{{url('/')}}" class="nav-link">Home</a></li>

{{--                        <li>--}}
{{--                        <li><a href="{{url('/')}}" class="nav-link">How it Works</a></li>--}}

{{--                        <li>--}}
                        <li><a href="{{url('steps')}}" class="nav-link">Steps</a></li>

                        <li> <a href="{{url('/')}}" class="nav-link">Services</a>
                        </li>
                        <li>
                            <a href="{{url('/')}}" class="nav-link">Why Us</a>
                        </li>

                        <li>@include('theme.default.layouts.authenticate')</li>

                    </ul>
                </nav>
            </div>


            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
    </div>

</header>
