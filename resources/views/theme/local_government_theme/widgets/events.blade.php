@if($widget->get_content($widget->id)[1] > 0)
    <div class="container">
        <div class="row">
    @foreach($widget->get_content($widget->id)[0] as $content)



        <div class="col-md-4 col-sm-6 flex">
            <div class="city_event_fig">
                <figure class="box">
                    <div class="box-layer layer-1"></div>
                    <div class="box-layer layer-2"></div>
                    <div class="box-layer layer-3"></div>
                    <img src="{{asset('images/'.$content->content_image)}}" alt="" style="height: 200px">
                    <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/event-fig.jpg')}}" tabindex="-1"><i class="fa fa-plus"></i></a>
                </figure>
                <div class="city_event_text">
                    <div class="city_event_history">
                        <div class="event_date">
                            <span @auth contenteditable="true" @endauth>{{\Carbon\Carbon::parse(@$content->source_date)->format('d')}}</span>
                            <strong @auth contenteditable="true" @endauth>{{\Carbon\Carbon::parse(@$content->source_date)->format('F Y')}}</strong>
                        </div>
                        <div class="city_date_text">
                            <h5 class="custom_size" @auth contenteditable="true" @endauth>{{@$content->title}}</h5>
                            <a href="#"><i class="fa fa-clock-o" @auth contenteditable="true" @endauth></i>{{@$content->start_time}} - {{@$content->end_time}}</a>
                        </div>
                    </div>
                    <p @auth contenteditable="true" @endauth>{{\Illuminate\Support\Str::limit(@$content->description,150,'...')}}</p>
                    <a href="{{@$content->source_link}}" @auth contenteditable="true" @endauth>  <span>Read More</span></a>
                </div>
            </div>
        </div>

    @endforeach
        </div>
    </div>

@else

    <div class="col-md-6 col-sm-6">
        <div class="city_event_fig">
            <figure class="box">
                <div class="box-layer layer-1"></div>
                <div class="box-layer layer-2"></div>
                <div class="box-layer layer-3"></div>
                <img src="{{asset('theme/local/extra-images/event-fig.jpg')}}" alt="">
                <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/event-fig.jpg')}}" tabindex="-1"><i class="fa fa-plus"></i></a>
            </figure>
            <div class="city_event_text">
                <div class="city_event_history">
                    <div class="event_date">
                        <span @auth contenteditable="true" @endauth>25</span>
                        <strong @auth contenteditable="true" @endauth>SEP, 2018</strong>
                    </div>
                    <div class="city_date_text">
                        <h5 class="custom_size" @auth contenteditable="true" @endauth>Mayor Conferences</h5>
                        <a href="#"><i class="fa fa-clock-o" @auth contenteditable="true" @endauth></i>05:23 AM - 09:23 AM </a>
                    </div>
                </div>
                <p @auth contenteditable="true" @endauth>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean..</p>
                <a href="#" @auth contenteditable="true" @endauth>  : <span>Alexzender</span></a>
            </div>
        </div>
    </div>
@endif



