@if($widget->get_content($widget->id)[1] > 0)

    @foreach($widget->get_content($widget->id)[0] as $content)
        <div class="col-md-4 col-sm-4">
            <div class="city_news_fig">
                <figure class="box">
                    <div class="box-layer layer-1"></div>
                    <div class="box-layer layer-2"></div>
                    <div class="box-layer layer-3"></div>
                    <img src="{{asset('images/'.$content->content_image)}}" alt="" style="height: 200px;">
                </figure>
                <div class="city_news_text">
                    <h2 contenteditable="true">{{\Illuminate\Support\Str::limit(@$content->title,10,'...')}}</h2>
                    <ul class="city_news_meta">
                        <li><a href="#" contenteditable="true">May 22, 2018</a></li>
                        <li><a href="#" contenteditable="true">Public Notices</a></li>
                    </ul>
                    <p contenteditable="true">{{\Illuminate\Support\Str::limit(@$content->description,100,'...')}}</p>
                    <a class="theam_btn border-color color" href="#" tabindex="0">Read More</a>
                    <br><br>
                </div>
            </div>
        </div>
    @endforeach

{{--    <img src="{{asset('images/'.$content->content_image)}}" alt="">--}}
@else

    <div class="col-md-6 col-sm-6">
        <div class="city_news_fig">
            <figure class="box">
                <div class="box-layer layer-1"></div>
                <div class="box-layer layer-2"></div>
                <div class="box-layer layer-3"></div>
                <img src="{{asset('theme/local/extra-images/news-fig.jpg')}}" alt="">
            </figure>
            <div class="city_news_text">
                <h2 contenteditable="true">A Fundraiser for the City Club</h2>
                <ul class="city_news_meta">
                    <li><a href="#" contenteditable="true">May 22, 2018</a></li>
                    <li><a href="#" contenteditable="true">Public Notices</a></li>
                </ul>
                <p contenteditable="true">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sollicitudin</p>
                <a class="theam_btn border-color color" href="#" tabindex="0">Read More</a>
            </div>
        </div>
    </div>
@endif





{{--                                <div class="col-md-6 col-sm-6">--}}
{{--                                    <div class="city_news_row">--}}
{{--                                        <ul>--}}
{{--                                            <li>--}}
{{--                                                <div class="city_news_list">--}}
{{--                                                    <figure class="box">--}}
{{--                                                        <div class="box-layer layer-1"></div>--}}
{{--                                                        <div class="box-layer layer-2"></div>--}}
{{--                                                        <div class="box-layer layer-3"></div>--}}
{{--                                                        <img src="{{asset('theme/local/extra-images/news-fig1.jpg')}}" alt="">--}}
{{--                                                    </figure>--}}
{{--                                                    <div class="city_news_list_text">--}}
{{--                                                        <h5 contenteditable="true">Lorem Ipsum Proin gravida nibh </h5>--}}
{{--                                                        <ul class="city_news_meta">--}}
{{--                                                            <li><a href="#" contenteditable="true">May 22, 2018</a></li>--}}
{{--                                                            <li><a href="#" contenteditable="true">Public Notices</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <div class="city_news_list">--}}
{{--                                                    <figure class="box">--}}
{{--                                                        <div class="box-layer layer-1"></div>--}}
{{--                                                        <div class="box-layer layer-2"></div>--}}
{{--                                                        <div class="box-layer layer-3"></div>--}}
{{--                                                        <img src="{{asset('theme/local/extra-images/news-fig2.jpg')}}" alt="">--}}
{{--                                                    </figure>--}}
{{--                                                    <div class="city_news_list_text">--}}
{{--                                                        <h5>Lorem Ipsum Proin gravida nibh </h5>--}}
{{--                                                        <ul class="city_news_meta">--}}
{{--                                                            <li><a href="#" contenteditable="true">May 22, 2018</a></li>--}}
{{--                                                            <li><a href="#">Public Notices</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <div class="city_news_list">--}}
{{--                                                    <figure class="box">--}}
{{--                                                        <div class="box-layer layer-1"></div>--}}
{{--                                                        <div class="box-layer layer-2"></div>--}}
{{--                                                        <div class="box-layer layer-3"></div>--}}
{{--                                                        <img src="{{asset('theme/local/extra-images/news-fig3.jpg')}}" alt="">--}}
{{--                                                    </figure>--}}
{{--                                                    <div class="city_news_list_text">--}}
{{--                                                        <h5 contenteditable="true">Lorem Ipsum Proin gravida nibh </h5>--}}
{{--                                                        <ul class="city_news_meta">--}}
{{--                                                            <li><a href="#" contenteditable="true">May 22, 2018</a></li>--}}
{{--                                                            <li><a href="#">Public Notices</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <div class="city_news_list">--}}
{{--                                                    <figure class="box">--}}
{{--                                                        <div class="box-layer layer-1"></div>--}}
{{--                                                        <div class="box-layer layer-2"></div>--}}
{{--                                                        <div class="box-layer layer-3"></div>--}}
{{--                                                        <img src="{{asset('theme/local/extra-images/news-fig4.jpg')}}" alt="">--}}
{{--                                                    </figure>--}}
{{--                                                    <div class="city_news_list_text">--}}
{{--                                                        <h5 contenteditable="true">Lorem Ipsum Proin gravida nibh </h5>--}}
{{--                                                        <ul class="city_news_meta">--}}
{{--                                                            <li contenteditable="true"><a href="#">May 22, 2018</a></li>--}}
{{--                                                            <li contenteditable="true"><a href="#">Public Notices</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <div class="city_news_list">--}}
{{--                                                    <figure class="box">--}}
{{--                                                        <div class="box-layer layer-1"></div>--}}
{{--                                                        <div class="box-layer layer-2"></div>--}}
{{--                                                        <div class="box-layer layer-3"></div>--}}
{{--                                                        <img src="{{asset('theme/local/extra-images/news-fig5.jpg')}}" alt="">--}}
{{--                                                    </figure>--}}
{{--                                                    <div class="city_news_list_text">--}}
{{--                                                        <h5 contenteditable="true">Lorem Ipsum Proin gravida nibh </h5>--}}
{{--                                                        <ul class="city_news_meta">--}}
{{--                                                            <li><a href="#" contenteditable="true">May 22, 2018</a></li>--}}
{{--                                                            <li><a href="#" contenteditable="true">Public Notices</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
