@if($widget->get_content($widget->id)[1] > 0)
@php $counter=0 @endphp
    @foreach($widget->get_content($widget->id)[0] as $content)
        @if($counter > 0)
            @break
            @endif
        <div class="row">
            <div class="col-md-6">
                <div class="city_about_fig">
                    <figure class="box">
                        <div class="box-layer layer-1"></div>
                        <div class="box-layer layer-2"></div>
                        <div class="box-layer layer-3"></div>
                        <img src="{{asset('images/'.@$content->content_image)}}" alt="" style="height: 100%;">
                    </figure>
{{--                    <div class="city_about_video">--}}
{{--                        <figure class="overlay">--}}
{{--                            <img src="{{asset('images/'.@$content->content_image)}}" alt="">--}}
{{--                        </figure>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="col-md-6">
                <div class="city_about_list">
                    <!--SECTION HEADING START-->
                    <div class="section_heading border">
                        <h2 contenteditable="true">{{@$content->title}}</h2>
                    </div>
                    <!--SECTION HEADING END-->
                    <div class="city_about_text">
                        <p contenteditable="true">{{@$content->description}}</p>
                    </div>
{{--                    <ul class="city_about_link">--}}
{{--                        <li contenteditable="true"><a href="#"><i class="fa fa-star"></i>24-Hours Emergency Services</a></li>--}}
{{--                        <li contenteditable="true"><a href="#"><i class="fa fa-star"></i>Citizen Safety Information</a></li>--}}
{{--                        <li contenteditable="true"><a href="#"><i class="fa fa-star"></i>Marriage Procedures</a></li>--}}
{{--                        <li contenteditable="true"><a href="#"><i class="fa fa-star"></i>Constitution and Government Law</a></li>--}}
{{--                        <li contenteditable="true"><a href="#"><i class="fa fa-star"></i>Ongoing Projects</a></li>--}}
{{--                    </ul>--}}
                </div>
            </div>
        </div>
        @php $counter++ @endphp
    @endforeach


@else

    <div class="row">
        <div class="col-md-6">
            <div class="city_about_fig">
                <figure class="box">
                    <div class="box-layer layer-1"></div>
                    <div class="box-layer layer-2"></div>
                    <div class="box-layer layer-3"></div>
                    <img src="{{asset('theme/local/extra-images/about-fig.jpg')}}" alt="">
                </figure>
                <div class="city_about_video">
                    <figure class="overlay">
                        <img src="{{asset('theme/local/extra-images/about_video.jpg')}}" alt="">
                        <a class="paly_btn hvr-pulse" data-rel="prettyPhoto" href="https://www.youtube.com/watch?v=SAaevusBnNI"><i class="fa icon-play-button"></i></a>
                    </figure>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="city_about_list">
                <!--SECTION HEADING START-->
                <div class="section_heading border">
                    <span contenteditable="true">Welcome to Smart City</span>
                    <h2 contenteditable="true">Municipal</h2>
                </div>
                <!--SECTION HEADING END-->
                <div class="city_about_text">
                    <h6 contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</h6>
                    <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                </div>
                <ul class="city_about_link">
                    <li contenteditable="true"><a href="#"><i class="fa fa-star"></i>24-Hours Emergency Services</a></li>
                    <li contenteditable="true"><a href="#"><i class="fa fa-star"></i>Citizen Safety Information</a></li>
                    <li contenteditable="true"><a href="#"><i class="fa fa-star"></i>Marriage Procedures</a></li>
                    <li contenteditable="true"><a href="#"><i class="fa fa-star"></i>Constitution and Government Law</a></li>
                    <li contenteditable="true"><a href="#"><i class="fa fa-star"></i>Ongoing Projects</a></li>
                </ul>
            </div>
        </div>
    </div>

@endif


