<div class="container">
    <div class="city_client_row">
        <ul class="bxslider bx-pager">
            <li>
                <div class="city_client_fig">
                    <figure class="box">
                        <div class="box-layer layer-1"></div>
                        <div class="box-layer layer-2"></div>
                        <div class="box-layer layer-3"></div>
                        <img src="{{asset('theme/local/extra-images/client.jpg')}}" alt="">
                    </figure>
                    <div class="city_client_text">
                        <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. </p>
                        <h4><a href="#" @auth contenteditable="true" @endauth>Likor Stom</a> </h4>
                        <span><a href="#" @auth contenteditable="true" @endauth>Directio-Baseline</a></span>
                    </div>
                </div>
            </li>
            <li>
                <div class="city_client_fig">
                    <figure class="box">
                        <div class="box-layer layer-1"></div>
                        <div class="box-layer layer-2"></div>
                        <div class="box-layer layer-3"></div>
                        <img src="{{asset('theme/local/extra-images/client.jpg')}}" alt="">
                    </figure>
                    <div class="city_client_text">
                        <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. </p>
                        <h4><a href="#" @auth contenteditable="true" @endauth>Likor Stom</a> </h4>
                        <span><a href="#" @auth contenteditable="true" @endauth>Directio-Baseline</a></span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="city_client_link" id="bx-pager">
        <a data-slide-index="0" href="#">
            <div class="client_arrow">
                <figure class="box">
                    <div class="box-layer layer-1"></div>
                    <div class="box-layer layer-2"></div>
                    <div class="box-layer layer-3"></div>
                    <img src="{{asset('theme/local/extra-images/client1.jpg')}}" alt="">
                </figure>
            </div>
        </a>
        <a data-slide-index="1" href="#">
            <div class="client_arrow">
                <figure class="box">
                    <div class="box-layer layer-1"></div>
                    <div class="box-layer layer-2"></div>
                    <div class="box-layer layer-3"></div>
                    <img src="{{asset('theme/local/extra-images/client2.jpg')}}" alt="">
                </figure>
            </div>
        </a>
    </div>
</div>
{{--<div class="container">--}}
{{--    <div class="city_client_row">--}}
{{--        <ul class="bxslider bx-pager">--}}
{{--            @if($widget->get_content($widget->id)[1] > 0)--}}

{{--                @foreach($widget->get_content($widget->id)[0] as $content)--}}
{{--                    <li>--}}
{{--                        <div class="city_client_fig">--}}
{{--                            <figure class="box">--}}
{{--                                <div class="box-layer layer-1"></div>--}}
{{--                                <div class="box-layer layer-2"></div>--}}
{{--                                <div class="box-layer layer-3"></div>--}}
{{--                                <img src="{{asset('images/'.$content->content_image)}}" alt="" style="height: 100px;width: 100px">--}}
{{--                            </figure>--}}
{{--                            <div class="city_client_text">--}}
{{--                                <p contenteditable="true">{{@$content->description}}</p>--}}
{{--                                <h4><a href="#">{{@$content->title}}</a> </h4>--}}
{{--                                <span><a href="#">next</a></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            @else--}}
{{--                <li>--}}
{{--                    <div class="city_client_fig">--}}
{{--                        <figure class="box">--}}
{{--                            <div class="box-layer layer-1"></div>--}}
{{--                            <div class="box-layer layer-2"></div>--}}
{{--                            <div class="box-layer layer-3"></div>--}}
{{--                            <img src="{{asset('theme/local/extra-images/client.jpg')}}" alt="">--}}
{{--                        </figure>--}}
{{--                        <div class="city_client_text">--}}
{{--                            <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. </p>--}}
{{--                            <h4><a href="#" contenteditable="true">Likor Stom</a> </h4>--}}
{{--                            <span><a href="#" contenteditable="true">Directio-Baseline</a></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            @endif--}}

{{--        </ul>--}}
{{--    </div>--}}
{{--    <div class="city_client_link" id="bx-pager">--}}
{{--        <a data-slide-index="0" href="#">--}}
{{--                                    <div class="client_arrow">--}}
{{--                                        <figure class="box">--}}
{{--                                            <div class="box-layer layer-1"></div>--}}
{{--                                            <div class="box-layer layer-2"></div>--}}
{{--                                            <div class="box-layer layer-3"></div>--}}
{{--                                            <img src="{{asset('theme/local/extra-images/client1.jpg')}}" alt="">--}}
{{--                                        </figure>--}}
{{--                                    </div>--}}
{{--        </a>--}}
{{--        <a data-slide-index="1" href="#">--}}
{{--                                    <div class="client_arrow">--}}
{{--                                        <figure class="box">--}}
{{--                                            <div class="box-layer layer-1"></div>--}}
{{--                                            <div class="box-layer layer-2"></div>--}}
{{--                                            <div class="box-layer layer-3"></div>--}}
{{--                                            <img src="{{asset('theme/local/extra-images/client2.jpg')}}" alt="">--}}
{{--                                        </figure>--}}
{{--                                    </div>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</div>--}}





