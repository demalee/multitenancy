@if($widget->get_content($widget->id)[1] > 0)

    @foreach($widget->get_content($widget->id)[0] as $content)
<div class="container">
    <div class="row">


        <div class="col-md-4 col-sm-6">
            <div class="city_event_fig">
                <figure class="box">
                    <div class="box-layer layer-1"></div>
                    <div class="box-layer layer-2"></div>
                    <div class="box-layer layer-3"></div>
                    <img src="{{asset('theme/local/extra-images/'.@$content->content_image)}}" alt="">
                    <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/event-fig.jpg')}}" tabindex="-1"><i class="fa fa-plus"></i></a>
                </figure>
                <div class="city_event_text">
                    <div class="city_event_history">
                        <div class="event_date">
                            <span contenteditable="true">25</span>
                            <strong contenteditable="true">SEP, 2018</strong>
                        </div>
                        <div class="city_date_text">
                            <h5 class="custom_size" contenteditable="true">{{@$content->title}}</h5>
                            <a href="#"><i class="fa fa-clock-o" contenteditable="true"></i>05:23 AM - 09:23 AM </a>
                        </div>
                    </div>
                    <p contenteditable="true">{{$content->description}}</p>
                    <a href="#" contenteditable="true">  : <span>author</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
    @endforeach


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
                        <span contenteditable="true">25</span>
                        <strong contenteditable="true">SEP, 2018</strong>
                    </div>
                    <div class="city_date_text">
                        <h5 class="custom_size" contenteditable="true">Mayor Conferences</h5>
                        <a href="#"><i class="fa fa-clock-o" contenteditable="true"></i>05:23 AM - 09:23 AM </a>
                    </div>
                </div>
                <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean..</p>
                <a href="#" contenteditable="true">  : <span>Alexzender</span></a>
            </div>
        </div>
    </div>
@endif



