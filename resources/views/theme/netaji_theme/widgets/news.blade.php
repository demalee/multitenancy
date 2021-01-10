@if($widget->get_content($widget->id)[1] > 0)

        <div class="blog-area pb-90 pt-110 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title text-center mb-60">
                            <h1 @auth contenteditable="true" @endauth>News, latest <span>Articles & Tips</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($widget->get_content($widget->id)[0] as $content)

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="blog-wrapper mb-30">
                            <div class="blog-img">
                                <a href="{{@$content->source_link}}"><img src="{{asset('images/'.$content->content_image)}}" alt="" /></a>
                                <div class="blog-text">
                                    <span contenteditable="true">{{\Carbon\Carbon::parse(@$content->source_date)->format('d F Y')}}</span>
                                    <h2><a href="{{@$content->source_link}}" @auth contenteditable="true" @endauth>{{\Illuminate\Support\Str::limit(@$content->description,100,'...')}}</a></h2>
                                    <a href="{{@$content->source_link}}">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>



{{--    <img src="{{asset('images/'.$content->content_image)}}" alt="">--}}
@else

    <div class="blog-area pb-90 pt-110 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title text-center mb-60">
                        <h1 @auth contenteditable="true" @endauth>News <br> and latest <span>Articles & Tips</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-img">
                            <a href="{{url('blog')}}"><img src="{{asset('theme/netaji/img/blog/blog1.jpg')}}" alt="" /></a>
                            <div class="blog-text">
                                <span @auth contenteditable="true" @endauth>05 december 2018</span>
                                <h2><a href="{{url('blog')}}" contenteditable="true">Form Design Patterns Book Excerpt Registration</a></h2>
                                <a href="{{url('blog')}}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-img">
                            <a href="{{url('blog-details')}}"><img src="{{asset('theme/netaji/img/blog/blog2.jpg')}}" alt="" /></a>
                            <div class="blog-text">
                                <span @auth contenteditable="true" @endauth>05 december 2018</span>
                                <h2><a href="{{url('blog-details')}}" @auth contenteditable="true" @endauth>Working Together Designers And Developers Can.</a></h2>
                                <a href="{{url('blog')}}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
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
