<header class="main-nav">
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title active" href="{{url('main')}}"><i data-feather="home"></i><span>Dashboard</span>

                        </a>

                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="#"><i data-feather="airplay"></i><span>Appearance</span>
                            <div class="according-menu"><i data-feather="chevrons-right"></i></div>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: none">
                            <li><a href="{{url('/themes')}}" class="">Themes</a></li>
                            <li><a href="{{url('dashboard/menus')}}" class="">Menus</a></li>
                            <li><a href="#" class="">Widgets</a></li>
                            <li><a href="#" class="">Themes Options</a></li>
                            <li><a href="{{url('custom-css')}}" class="">Custom-css</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{route('dashboard.pages')}}"><i data-feather="file-plus"></i><span>Pages</span>

                        </a>

                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{url('dashboard/setting')}}"><i data-feather="settings"></i><span>Settings</span>

                        </a>

                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{url('dashboard/block')}}"><i data-feather="shuffle"></i><span>Block</span>

                        </a>

                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{url('home')}}"><i data-feather="eye"></i><span>Preview</span>

                        </a>

                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{url('/')}}"><i data-feather="home"></i><span>Home</span>

                        </a>

                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
