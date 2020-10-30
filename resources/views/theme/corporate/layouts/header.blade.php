<header id="header">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand top">
        <div class="container header">





    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-fixed sub">
        <div class="container header">

            <!-- Navbar Brand-->
            <a class="navbar-brand" href="{{url('home')}}">


                <!--
                    Custom Logo
                    <img src="assets/images/logo.svg" alt="NEXGEN">
                -->
            </a>

            <!-- Nav holder -->


            <!-- Navbar Items -->
            <ul class="navbar-nav items">
                @foreach($menu_items as $menu_item)
                    <li class="nav-item">
                        <a class="nav-link" href="{{url(@$menu_item->page->slug)}}">{{@$menu_item->page->title}}</a>
                    </li>
                @endforeach

                <li class="nav-item"><a class="nav-link" href="{{route('dashboard.website')}}">Create Website</a></li>

                    @guest

                    <li class="nav-item"> <a class="nav-link" href="{{url('login')}}" class="btn"><i class="fas fa-user"></i>Login</a>

                @endguest
                @auth


                    <li class="nav-item"> <a class="nav-link"  href="{{ url('main') }}">Dashboard</a>
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
