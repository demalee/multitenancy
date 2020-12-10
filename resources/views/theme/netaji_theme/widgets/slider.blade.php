{{--@if($widget->get_content($widget->id)[1] > 0)--}}

{{--    @foreach($widget->get_content($widget->id)[0] as $content)--}}
{{--    @endforeach--}}
{{--@else--}}
{{--@endif--}}

@if($widget->get_content($widget->id)[1] > 0)

    @foreach($widget->get_content($widget->id)[0] as $content)
        <div class="slider-area">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" style="background-image:url({{asset('images/'.$content->content_image)}})">
                    <div class="container">
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="slider-content">
                                    <h1 data-animation="fadeInUp" data-delay=".4s" contenteditable="true">{{$content->title}}</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s"  contenteditable="true">{{$content->description}}</p>
                                    <a data-animation="fadeInUp" data-delay=".8s" class="btn" href="#" contenteditable="true">join with us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height d-flex align-items-center" style="background-image:url({{asset('images/'.$content->content_image)}})">
                    <div class="container">
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="slider-content">
                                    <h1 data-animation="fadeInUp" data-delay=".4s" contenteditable="true">Let's make the <br> great country</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s" contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai sing pain was born and I will give you a complete account.</p>
                                    <a data-animation="fadeInUp" data-delay=".8s" class="btn" href="#" contenteditable="true">join with us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height d-flex align-items-center" style="background-image:url(theme/netaji/img/slider/image.png)" contenteditable="true">
                    <div class="container">
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="slider-content">
                                    <h1 data-animation="fadeInUp" data-delay=".4s" contenteditable="true">{{$content->title}}</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s" contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai sing pain was born and I will give you a complete account.</p>
                                    <a data-animation="fadeInUp" data-delay=".8s" class="btn" href="#" contenteditable="true">join with us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endforeach
    @else
    <div class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" style="background-image:url(theme/netaji/img/slider/image.png)">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-12">
                            <div class="slider-content">
                                <h1 data-animation="fadeInUp" data-delay=".4s" contenteditable="true">Let's make the <br> great country</h1>
                                <p data-animation="fadeInUp" data-delay=".6s"  contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai sing pain was born and I will give you a complete account.</p>
                                <a data-animation="fadeInUp" data-delay=".8s" class="btn" href="#" contenteditable="true">join with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center" style="background-image:url(theme/netaji/img/slider/image.png)">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-12">
                            <div class="slider-content">
                                <h1 data-animation="fadeInUp" data-delay=".4s" contenteditable="true">Let's make the <br> great country</h1>
                                <p data-animation="fadeInUp" data-delay=".6s" contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai sing pain was born and I will give you a complete account.</p>
                                <a data-animation="fadeInUp" data-delay=".8s" class="btn" href="#" contenteditable="true">join with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center" style="background-image:url(theme/netaji/img/slider/image.png)" contenteditable="true">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-12">
                            <div class="slider-content">
                                <h1 data-animation="fadeInUp" data-delay=".4s" contenteditable="true">Let's make the <br> great country</h1>
                                <p data-animation="fadeInUp" data-delay=".6s" contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai sing pain was born and I will give you a complete account.</p>
                                <a data-animation="fadeInUp" data-delay=".8s" class="btn" href="#" contenteditable="true">join with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
