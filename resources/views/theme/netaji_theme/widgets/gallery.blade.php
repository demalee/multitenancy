@if($widget->get_content($widget->id)[1] > 0)
    <div class="event-area gray-bg pt-110 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title text-center mb-60">
                        <h1 contenteditable="true">Gallery</h1>
                    </div>
                </div>
            </div>


            <div class="event-bg">

                <div class="event-bg">
                    <div class="event-box-active">

                        @foreach($widget->get_content($widget->id)[0] as $content)
                            <div class="col-md-4">
                        <div class="event-wrapper">

                            <div class="event-img">

                                <img src="{{asset('images/'.$content->content_image)}}" alt="" style="height: 250px; width: 250px;"/>

                                <div class="event-text">
                                </div>
                            </div>
                        </div></div>
                        @endforeach

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
                        <h1 contenteditable="true">Gallery</h1>
                    </div>
                </div>
            </div>
            <div class="event-bg">
                <div class="event-box-active">
                    <div class="event-wrapper">
                        <div class="event-img">
                            <img src="{{url('theme/netaji/img/event/1.jpg')}}" alt="" />
                            <div class="event-text">
                            </div>
                        </div>
                    </div>
                    <div class="event-wrapper">
                        <div class="event-img">
                            <img src="{{url('theme/netaji/img/event/2.jpg')}}" alt="" />
                            <div class="event-text">
                            </div>
                        </div>
                    </div>
                    <div class="event-wrapper">
                        <div class="event-img">
                            <img src="{{url('theme/netaji/img/event/3.jpg')}}" alt="" />
                            <div class="event-text">
                            </div>
                        </div>
                    </div>
                    <div class="event-wrapper">
                        <div class="event-img">
                            <img src="{{url('theme/netaji/img/event/4.jpg')}}" alt="" />
                            <div class="event-text">
                            </div>
                        </div>
                    </div>
                    <div class="event-wrapper">
                        <div class="event-img">
                            <img src="{{url('theme/netaji/img/event/5.jpg')}}" alt="" />
                            <div class="event-text">
                            </div>
                        </div>
                    </div>
                    <div class="event-wrapper">
                        <div class="event-img">
                            <img src="{{url('theme/netaji/img/event/6.jpg')}}" alt="" />
                            <div class="event-text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif


