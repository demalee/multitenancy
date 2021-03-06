<header id="header">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand top">
        <div class="container header">





    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-fixed sub">
        <div class="container header">

            <!-- Navbar Brand-->
            <a class="navbar-brand" href="{{url('/')}}">


                <!--
                    Custom Logo
                    <img src="assets/images/logo.svg" alt="NEXGEN">
                -->
            </a>

            <!-- Nav holder -->


            <!-- Navbar Items -->
            <ul class="navbar-nav items">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link">HOME <i class="icon-arrow-down"></i></a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Multi-Page <i class="icon-arrow-right"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Multi-Page <span>1</span></a></li>
                                <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Multi-Page <span>2</span></a></li>
                                <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Multi-Page <span>3</span></a></li>

                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="nav-item"> <a class="nav-link" href="{{url('about')}}">About </a></li>



                <li class="nav-item dropdown">
                    <a href="#" class="nav-link">PARTS <i class="icon-arrow-down"></i></a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="{{url('services')}}" class="nav-link">Section</a></li>
                    </ul>
                </li>

                    @guest

                    <li class="nav-item"> <a class="nav-link" href="{{url('login')}}" class="btn"><i class="fas fa-user"></i>Login</a>

                @endguest
                @auth


                    <li class="nav-item"> <a class="nav-link"  href="{{ route('dashboard') }}">Dashboard</a>
                    </li>

                    <!-- Logout nav link -->
                    <li class="nav-item">
                        <form class="" action="{{ route('logout') }}" method="post" id="logout_form">
                            @csrf
                        </form>

                    <li class="nav-item"> <a class="nav-link"  type="submit" onclick="logout()"><b>{{ __('Logout') }}</b></a></li>

                        <script type="text/javascript" defer>
                            function logout() {
                                document.getElementById('logout_form').submit();
                            }
                        </script>
                        </li>

                    @endauth

                    </li>
            </ul>

            <!-- Navbar Icons -->
            <ul class="navbar-nav icons">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#search">
                        <i class="icon-magnifier"></i>
                    </a>
                </li>

            </ul>

            <!-- Navbar Toggle -->
            <ul class="navbar-nav toggle">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                        <i class="icon-menu m-0"></i>
                    </a>
                </li>
            </ul>

            <!-- Navbar Action -->

        </div>
    </nav>
        </div></nav>
</header>
