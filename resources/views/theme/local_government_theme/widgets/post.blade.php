@if($widget->get_content($widget->id)[1] > 0)

    @foreach($widget->get_content($widget->id)[0] as $content)

        <div class="col-md-4 col-sm-4">
            <div class="city_blog_fig">
                <figure class="box">
                    <div class="box-layer layer-1"></div>
                    <div class="box-layer layer-2"></div>
                    <div class="box-layer layer-3"></div>
                    <img src="{{asset('images/'.$content->content_image)}}" alt="" style="height: 300px">
                </figure>
                <div class="city_blog_text">
                    <h4 @auth contenteditable="true" @endauth>{{@$content->title}}</h4>
                    <p @auth contenteditable="true" @endauth>{{@$content->description}}</p>
                    <div class="city_blog_social">
                        <a class="theam_btn border-color color" href="{{@$content->source_link}}" tabindex="0">Read More</a>
                        <div class="city_blog_icon_list">
                            <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                            <a class="share_icon" href="#"><i class="fa icon-social"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="city_blog_fig position">
                <figure class="box">
                    <div class="box-layer layer-1"></div>
                    <div class="box-layer layer-2"></div>
                    <div class="box-layer layer-3"></div>
                    <img src="{{asset('images/'.$content->content_image)}}" alt="" style="height: 200px; width: auto">
                </figure>
                <div class="city_blog_text">
                    <h4 @auth contenteditable="true" @endauth>{{@$content->title}}</h4>
                    <p @auth contenteditable="true" @endauth>{{@$content->description}}</p>
                    <div class="city_blog_social">
                        <a class="theam_btn border-color color" href="{{@$content->source_link}}" tabindex="0">Read More</a>
                        <div class="city_blog_icon_list">
                            <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                            <a class="share_icon" href="#"><i class="fa icon-social"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach


@else

    <div class="col-md-4 col-sm-4">
        <div class="city_blog_fig">
            <figure class="box">
                <div class="box-layer layer-1"></div>
                <div class="box-layer layer-2"></div>
                <div class="box-layer layer-3"></div>
                <img src="{{asset('theme/local/extra-images/blog-fig1.jpg')}}" alt="">
            </figure>
            <div class="city_blog_text">
                <span @auth contenteditable="true" @endauth>Community</span>
                <h4 @auth contenteditable="true" @endauth >Job Seeker</h4>
                <p @auth contenteditable="true" @endauth>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctornisi elit.</p>
                <div class="city_blog_social">
                    <a class="theam_btn border-color color" href="#" tabindex="0">Read More</a>
                    <div class="city_blog_icon_list">
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                        </ul>
                        <a class="share_icon" href="#"><i class="fa icon-social"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="city_blog_fig position">
            <figure class="box">
                <div class="box-layer layer-1"></div>
                <div class="box-layer layer-2"></div>
                <div class="box-layer layer-3"></div>
                <img src="{{asset('theme/local/extra-images/blog-hover.jpg')}}" alt="">
            </figure>
            <div class="city_blog_text">
                <span @auth contenteditable="true" @endauth>Community</span>
                <h4 @auth contenteditable="true" @endauth>Job Seeker</h4>
                <p @auth contenteditable="true" @endauth>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctornisi elit.</p>
                <div class="city_blog_social">
                    <a class="theam_btn border-color color" href="#" tabindex="0">Read More</a>
                    <div class="city_blog_icon_list">
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                        </ul>
                        <a class="share_icon" href="#"><i class="fa icon-social"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif


