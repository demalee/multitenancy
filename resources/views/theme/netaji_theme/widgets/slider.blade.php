{{--@if($widget->get_content($widget->id)[1] > 0)--}}

{{--    @foreach($widget->get_content($widget->id)[0] as $content)--}}
{{--    @endforeach--}}
{{--@else--}}
{{--@endif--}}

@if($widget->get_content($widget->id)[1] > 0)
@php $counter=0 @endphp

        <div class="slider-area">
            @foreach($widget->get_content($widget->id)[0] as $content)
                @if($counter > 0)
                    @break
                @endif
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" style="background-image:url({{asset('images/'.$content->content_image)}})">
                    <div class="container">
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="slider-content">
                                    <h1 data-animation="fadeInUp" data-delay=".4s" contenteditable="true">{{$content->title}}</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s"  contenteditable="true">{{$content->description}}</p>
                                    <a data-animation="fadeInUp" data-delay=".8s" class="btn" href="{{@$content->source_link}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
{{--                @if($counter >0)--}}
{{--                    @break--}}
{{--                @endif--}}
                @php $counter++ @endphp
            @endforeach
        </div>


    @else
    <div class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" style="background-image:url(img/slider/mandera.jpg)">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-12">
                            <div class="slider-content">
                                <h1 data-animation="fadeInUp" data-delay=".4s">A lorem  Ipsum</h1>
                                <p data-animation="fadeInUp" data-delay=".6s">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                <a data-animation="fadeInUp" data-delay=".8s" class="btn" href="#">join with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center" style="background-image:url(img/slider/slider1.jpg)">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-12">
                            <div class="slider-content">
                                <h1 data-animation="fadeInUp" data-delay=".4s">Let's make the <br> great country</h1>
                                <p data-animation="fadeInUp" data-delay=".6s">But I must explain to you how all this mistaken idea of denouncing pleasure and prai sing pain was born and I will give you a complete account.</p>
                                <a data-animation="fadeInUp" data-delay=".8s" class="btn" href="#">join with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center" style="background-image:url(img/slider/slider1.jpg)">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-12">
                            <div class="slider-content">
                                <h1 data-animation="fadeInUp" data-delay=".4s">Let's make the <br> great country</h1>
                                <p data-animation="fadeInUp" data-delay=".6s">But I must explain to you how all this mistaken idea of denouncing pleasure and prai sing pain was born and I will give you a complete account.</p>
                                <a data-animation="fadeInUp" data-delay=".8s" class="btn" href="#">join with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
