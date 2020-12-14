{{--@if($widget->get_content($widget->id)[1] > 0)--}}

{{--    @foreach($widget->get_content($widget->id)[0] as $content)--}}
{{--    @endforeach--}}
{{--@else--}}
{{--@endif--}}

@if($widget->get_content($widget->id)[1] > 0)

    @foreach($widget->get_content($widget->id)[0] as $content)

    <div>


        <figure class="overlay">
            <img src="{{asset('images/'.$content->content_image)}}" alt="" style="height: 700px">
            <div class="banner_text">
                <div class="small_text animated" contenteditable="true">Welcome to</div>
                <div class="large_text animated">{{$content->title}}<div class="medium_text animated" contenteditable="true">{{$content->title}}</div>
                    <div class='console-underscore' id='console'>&#95;</div></div>
                <div class="banner_btn">
                    <center><a class="theam_btn animated" href="#" contenteditable="true">Read More</a></center>
                </div>
                <div class="banner_search_form">
                    <label>Search Here</label>
                    <div class="banner_search_field animated">
                        <input type="text" placeholder="What  do you want to do">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </figure>
    </div>
    @endforeach
    @else
    <div>
        <figure class="overlay">
            <img src="{{asset('theme/local/extra-images/main-banner.jpg')}}" alt="">
            <div class="banner_text">
                <div class="small_text animated" contenteditable="true">Welcome to</div>
                <div class="large_text animated">Nairobi <div class='console-underscore' id='console'>&#95;</div></div>
                <div class="banner_btn">
                    <center><a class="theam_btn animated" href="{{url('contact')}}" >Read More</a></center>
                </div>
                <div class="banner_search_form">
                    <label>Search Here</label>
                    <div class="banner_search_field animated">
                        <input type="text" placeholder="What  do you want to do">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </figure>
    </div>
    @endif
