@if($widget->get_content($widget->id)[1] > 0)
    @php $counter=0 @endphp
    @foreach($widget->get_content($widget->id)[0] as $content)
{{--        @if($counter > 0)--}}
{{--            @break--}}
{{--        @endif--}}
    <div class="city_jobs_wrap">

        <div class="city_jobs_fig">
            <div class="city_jo_text">
                <img src="{{asset('theme/local/extra-images/service-fig5.jpg')}}" alt="" style="height: 500px; width: 1000px;">

{{--                <img src="{{asset('images/'.$content->content_image)}}" alt="" style="height: 500px; width: 1000px;">--}}

            </div>
        </div>

        <div class="city_jobs_list">
            <ul>
                <li>
                    <div class="city_jobs_item overlay">
                        <span><i class="fa icon-team"></i></span>
                        <div class="ciy_jobs_caption">
                            <h2>{{@$content->title}}</h2>
                            <p>{{@$content->description}}</p>
                        </div>
                    </div>
                </li>


            </ul>
        </div>
    </div>
    @php $counter++ @endphp
    @endforeach

@else
    <div class="city_jobs_wrap">
        <div class="city_jobs_fig">
            <div class="city_jo_text">
                <img src="{{asset('theme/local/extra-images/service-fig5.jpg')}}" alt="" style="height: 500px; width: 1000px;">

            </div>
        </div>
        <div class="city_jobs_list">
            <ul>
                <li>
                    <div class="city_jobs_item overlay">
                        <span><i class="fa icon-team"></i></span>
                        <div class="ciy_jobs_caption">
                            <h2>Mission</h2>
                            <p>This is Photoshop's ersion  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</p>
                            <a href="#">Find Out More</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="city_jobs_item pull-right overlay">
                        <div class="ciy_jobs_caption">
                            <h2>Vision</h2>
                            <p>This is Photoshop's ersion  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</p>
                            <a href="#">Find Out More</a>
                        </div>
                        <span><i class="fa icon-urban"></i></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endif

