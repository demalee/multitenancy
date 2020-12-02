@if($widget->get_content($widget->id)[1] > 0)

    @foreach($widget->get_content($widget->id)[0] as $content)
        <li>
            <div class="city_service_text">
                <span><i class="fa icon-list"></i></span>
                <h5><a href="{{@$content->source_url}}" contenteditable="true">{{@$content->title}}</a></h5>
            </div>
        </li>
    @endforeach

    @else
    <li>
        <div class="city_service_text">
            <span><i class="fa icon-news"></i></span>
            <h5><a href="{{url('event')}}" contenteditable="true">News & Press Releases</a></h5>
        </div>
    </li>



@endif

