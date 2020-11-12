<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-lg-0">
            <a class="navbar-brand logo" href="{{url('home')}}"><img src="{{asset('theme/political/assets/images/logo/01.png')}}" alt="logo"></a>
            <a class="navbar-brand logo" href="{{url('home')}}"><img src="{{asset('theme/political/assets/images/logo/02.png')}}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="active"><a href="{{url('home')}}">Home</a>

                    </li>
                    <li><a href="#0">Pages</a>
                        <ul class="submenu">
                            <li><a href="#0">Causes</a>
                                <ul class="submenu">
                                    <li><a href="{{url('cause')}}">Causes List View</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('volunteer')}}">Volunteer</a></li>
                            <li><a href="{{url('about')}}">About Us</a></li>

                        </ul>
                    </li>
                    <li><a href="{{url('biography')}}">Biography</a></li>
                    <li><a href="#0">Blog</a>
                        <ul class="submenu">
                            <li><a href="{{url('blog')}}">Blog</a></li>

                        </ul>
                    </li>
                    <li><a href="#0">Campaign</a>
                        <ul class="submenu">
                            <li><a href="{{url('campaign')}}">Campaign</a></li>
                            <li><a href="{{url('campaign_detail')}}">Campaign Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('gallery')}}">Gallery</a>

                    </li>
                    <li><a href="#0">Shop</a>
                        <ul class="submenu">
                            <li><a href="{{url('shop')}}">Shop</a></li>
                            <li><a href="{{url('product_detail')}}">Product Detail</a></li>

                        </ul>
                    </li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                </ul>
                <a href="{{url('donate')}}" class="custom-btn donate">Donate Now</a>
            </div>
        </nav>
    </div>
</header>
