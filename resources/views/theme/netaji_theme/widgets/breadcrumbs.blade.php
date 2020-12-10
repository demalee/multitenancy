@if($widget->get_content($widget->id)[1] > 0)

    <div class="breadcrumb-area pt-250 pb-250" style="background-image:url({{asset('images/'.$content->content_image)}})">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-text text-center">
                        <h1>{{@$page_name}}</h1>
                        <ul class="breadcrumb-menu">
                            <li><a href="{{url('home')}}" contenteditable="true">home</a></li>
                            <li><span contenteditable="true">{{@$page_name}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@else
       <div class="breadcrumb-area pt-250 pb-250" style="background-image:url(theme/netaji/img/bg/8.jpg)">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>Services</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{url('home')}}" contenteditable="true">home</a></li>
                        <li><span contenteditable="true">Events</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>

@endif


