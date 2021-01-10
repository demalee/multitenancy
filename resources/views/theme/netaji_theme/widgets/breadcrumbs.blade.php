@if($widget->get_content($widget->id)[1] > 0)
    @php $counter=0 @endphp
    @foreach($widget->get_content($widget->id)[0] as $content)
        @if($counter > 0)
            @break
        @endif
    <div class="breadcrumb-area pt-250 pb-250" style="background-image:url({{asset('images/'.$content->content_image)}})">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-text text-center">
                        <h1>{{@$page_name}}</h1>
                        <ul class="breadcrumb-menu">
                            <li><a href="{{url('home')}}" @auth contenteditable="true" @endauth>home</a></li>
                            <li><span @auth contenteditable="true" @endauth>{{@$page_name}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @php $counter++ @endphp
    @endforeach
@else
       <div class="breadcrumb-area pt-250 pb-250" style="background-image:url(theme/netaji/img/bg/8.jpg)">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>Services</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{url('home')}}" @auth contenteditable="true" @endauth>home</a></li>
                        <li><span @auth contenteditable="true" @endauth>Events</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>

@endif


