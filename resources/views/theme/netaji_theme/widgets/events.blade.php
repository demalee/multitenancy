@if($widget->get_content($widget->id)[1] > 0)



        <div class="events-area pt-110 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title section2-title text-center mb-60">
                            <h1 @auth contenteditable="true" @endauth>Events</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($widget->get_content($widget->id)[0] as $content)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="events-wrapper text-center mb-60">
                            <div class="events-img">
                                <a href="#"><img src="{{asset('images/'.$content->content_image)}}" alt="" /></a>
                            </div>
                            <div class="events-meta">
                                <span @auth contenteditable="true" @endauth>{{\Carbon\Carbon::parse(@$content->source_date)->format('d F Y')}}</span>
                            </div>
                            <div class="events-text">
                                <h3><a href="#" @auth contenteditable="true" @endauth>{{@$content->title}}</a></h3>
                                <p @auth contenteditable="true" @endauth>{{\Illuminate\Support\Str::limit(@$content->description,150,'...')}}</p>
                                <a class="btn" href="{{@$content->source_link}}">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                </div>
            </div>



@else
    <div class="events-area pt-110 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title section2-title text-center mb-60">
                        <span @auth contenteditable="true" @endauth>Upcomming events</span>
                        <h1 @auth contenteditable="true" @endauth>We arrange many other <span>events</span> and program <br> which needs in our human life</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="events-wrapper text-center mb-60">
                        <div class="events-img">
                            <a href="#"><img src="{{asset('theme/netaji/img/event/events1.jpg')}}" alt="" /></a>
                        </div>
                        <div class="events-meta">
                            <span @auth contenteditable="true" @endauth>10 feb 2018</span>
                        </div>
                        <div class="events-text">
                            <h3><a href="#" @auth contenteditable="true" @endauth>March for our lives</a></h3>
                            <p @auth contenteditable="true" @endauth>But I must explain you how all this mistaken idea  denouncing plsure and praising pain was born and I will give you a complete.</p>
                            <a class="btn" href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="events-wrapper text-center mb-60">
                        <div class="events-img">
                            <a href="#"><img src="{{asset('theme/netaji/img/event/events2.jpg')}}" alt="" /></a>
                        </div>
                        <div class="events-meta">
                            <span @auth contenteditable="true" @endauth>10 dec 2018</span>
                        </div>
                        <div class="events-text">
                            <h3><a href="#" @auth contenteditable="true" @endauth>Annual Campaign</a></h3>
                            <p @auth contenteditable="true" @endauth>But I must explain you how all this mistaken idea  denouncing plsure and praising pain was born and I will give you a complete.</p>
                            <a class="btn" href="#" >view details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="events-wrapper text-center mb-60">
                        <div class="events-img">
                            <a href="#"><img src="{{asset('theme/netaji/img/event/events3.jpg')}}" alt="" /></a>
                        </div>
                        <div class="events-meta">
                            <span>5 aug 2018</span>
                        </div>
                        <div class="events-text">
                            <h3><a href="#" @auth contenteditable="true" @endauth>March for our lives</a></h3>
                            <p @auth contenteditable="true" @endauth>But I must explain you how all this mistaken idea  denouncing plsure and praising pain was born and I will give you a complete.</p>
                            <a class="btn" href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="events-wrapper text-center mb-60">
                        <div class="events-img">
                            <a href="#"><img src="{{asset('theme/netaji/img/event/events4.jpg')}}" alt="" /></a>
                        </div>
                        <div class="events-meta">
                            <span @auth contenteditable="true" @endauth>10 sep 2018</span>
                        </div>
                        <div class="events-text">
                            <h3><a href="#" @auth contenteditable="true" @endauth>Prize Giving Ceremony</a></h3>
                            <p @auth contenteditable="true" @endauth >But I must explain you how all this mistaken idea  denouncing plsure and praising pain was born and I will give you a complete.</p>
                            <a class="btn" href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="events-wrapper text-center mb-60">
                        <div class="events-img">
                            <a href="#"><img src="{{asset('theme/netaji/img/event/events5.jpg')}}" alt="" /></a>
                        </div>
                        <div class="events-meta">
                            <span @auth contenteditable="true" @endauth>10 dec 2018</span>
                        </div>
                        <div class="events-text">
                            <h3 @auth contenteditable="true" @endauth> <a href="#">Annual Conference</a></h3>
                            <p @auth contenteditable="true" @endauth>But I must explain you how all this mistaken idea  denouncing plsure and praising pain was born and I will give you a complete.</p>
                            <a class="btn" href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="events-wrapper text-center mb-60">
                        <div class="events-img">
                            <a href="#"><img src="{{asset('theme/netaji/img/event/events6.jpg')}}" alt="" /></a>
                        </div>
                        <div class="events-meta">
                            <span @auth contenteditable="true" @endauth>05 feb 2018</span>
                        </div>
                        <div class="events-text">
                            <h3><a href="#" contenteditable="true">Study Tour & Traveling</a></h3>
                            <p @auth contenteditable="true" @endauth>But I must explain you how all this mistaken idea  denouncing plsure and praising pain was born and I will give you a complete.</p>
                            <a class="btn" href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="events-wrapper text-center mb-60">
                        <div class="events-img">
                            <a href="#"><img src="{{asset('theme/netaji/img/event/events7.jpg')}}" alt="" /></a>
                        </div>
                        <div class="events-meta">
                            <span @auth contenteditable="true" @endauth>20 feb 2018</span>
                        </div>
                        <div class="events-text">
                            <h3 @auth contenteditable="true" @endauth><a href="#">March for our lives</a></h3>
                            <p @auth contenteditable="true" @endauth>But I must explain you how all this mistaken idea  denouncing plsure and praising pain was born and I will give you a complete.</p>
                            <a class="btn" href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="events-wrapper text-center mb-60">
                        <div class="events-img">
                            <a href="#"><img src="{{asset('theme/netaji/img/event/events8.jpg')}}" alt="" /></a>
                        </div>
                        <div class="events-meta">
                            <span @auth contenteditable="true" @endauth>10 feb 2018</span>
                        </div>
                        <div class="events-text">
                            <h3><a href="#">Annual Campaign</a></h3>
                            <p>But I must explain you how all this mistaken idea  denouncing plsure and praising pain was born and I will give you a complete.</p>
                            <a class="btn" href="#">view details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="events-wrapper text-center mb-60">
                        <div class="events-img">
                            <a href="#"><img src="{{asset('theme/netaji/img/event/events9.jpg')}}" alt="" /></a>
                        </div>
                        <div class="events-meta">
                            <span @auth contenteditable="true" @endauth>05 aug 2018</span>
                        </div>
                        <div class="events-text">
                            <h3><a href="#">March for our lives</a></h3>
                            <p @auth contenteditable="true" @endauth>But I must explain you how all this mistaken idea  denouncing plsure and praising pain was born and I will give you a complete.</p>
                            <a class="btn" href="#">view details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="paginations text-center">
                        <ul>
                            <li class="active"><a href="#" @auth contenteditable="true" @endauth>01</a></li>
                            <li><a href="#" @auth contenteditable="true" @endauth>02</a></li>
                            <li><a href="#" @auth contenteditable="true" @endauth>03</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif


