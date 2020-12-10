@if($widget->get_content($widget->id)[1] > 0)

        <div class="event-area gray-bg pt-110 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title text-center mb-60">
                            <h1 contenteditable="true">County Posts</h1>
                        </div>
                    </div>
                </div>
                <div class="event-bg">
                    <div class="event-box-active">
                        @foreach($widget->get_content($widget->id)[0] as $content)
                            <div class="col-md-4">
                        <div class="event-wrapper">
                            <div class="event-img">
                                <img src="{{asset('images/'.$content->content_image)}}" alt="" />
                                <div class="event-text">
                                    <h2 contenteditable="true" contenteditable="true"><a href="#">{{@$content->title}}</a></h2>
                                    <span contenteditable="true">10 december 2018</span>
                                </div>
                            </div>
                        </div>
                            </div>@endforeach
                    </div>
                </div>
            </div>
        </div>





@else
    <div class="event-area gray-bg pt-110 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title text-center mb-60">
                        <h1 contenteditable="true">County Posts</h1>
                    </div>
                </div>
            </div>
            <div class="event-bg">
                <div class="event-box-active">
                    <div class="event-wrapper">
                        <div class="event-img">
                            <img src="{{url('theme/netaji/img/event/1.jpg')}}" alt="" />
                            <div class="event-text">
                                <h2 contenteditable="true" contenteditable="true"><a href="#">March for our lives</a></h2>
                                <span contenteditable="true">10 december 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="event-wrapper">
                        <div class="event-img">
                            <img src="{{url('theme/netaji/img/event/2.jpg')}}" alt="" />
                            <div class="event-text">
                                <h2><a href="#" contenteditable="true">Annual Conference</a></h2>
                                <span contenteditable="true">15 december 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="event-wrapper">
                        <div class="event-img">
                            <img src="{{url('theme/netaji/img/event/3.jpg')}}" alt="" />
                            <div class="event-text">
                                <h2><a href="#" contenteditable="true">Complete Anatomy.</a></h2>
                                <span contenteditable="true">16 december 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="event-wrapper">
                        <div class="event-img">
                            <img src="{{url('theme/netaji/img/event/4.jpg')}}" alt="" />
                            <div class="event-text">
                                <h2><a href="#" contenteditable="true">Our human Activities</a></h2>
                                <span contenteditable="true">16 december 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="event-wrapper">
                        <div class="event-img">
                            <img src="{{url('theme/netaji/img/event/5.jpg')}}" alt="" />
                            <div class="event-text">
                                <h2><a href="#" contenteditable="true">About Alignment Flex.</a></h2>
                                <span contenteditable="true">12 January 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="event-wrapper">
                        <div class="event-img">
                            <img src="{{url('theme/netaji/img/event/6.jpg')}}" alt="" />
                            <div class="event-text">
                                <h2><a href="#" contenteditable="true">I Learned Designing.</a></h2>
                                <span contenteditable="true">16 november 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif


