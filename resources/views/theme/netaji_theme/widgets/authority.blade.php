
@if($widget->get_content($widget->id)[1] > 0)

    @foreach($widget->get_content($widget->id)[0] as $content)
        <div class="donation-area pt-240 pb-140" style="background-image:url({{asset('images/'.$content->content_image)}})">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6">
                        <div class="donation-wrapper">
                            <div class="donation-text">
                                <h1 @auth contenteditable="true" @endauth>{{@$content->title}}</h1>
                                <p @auth contenteditable="true" @endauth>{{\Illuminate\Support\Str::limit(@$content->description,150,'...')}}</p>
                                <a class="btn" href="{{@$content->source_link}}">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



@else
    <div class="donation-area pt-240 pb-140" style="background-image:url(theme/netaji/img/bg/4.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6">
                    <div class="donation-wrapper">
                        <div class="donation-text">
                            <h1 @auth contenteditable="true" @endauth>Authourity</h1>
                            <p @auth contenteditable="true" @endauth>But I must explain to you how all this mistaken idea of denople asure and praising pain was born and I will give you a complete.</p>

                            <a class="btn" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

