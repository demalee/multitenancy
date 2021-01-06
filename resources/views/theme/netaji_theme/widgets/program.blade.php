
@if($widget->get_content($widget->id)[1] > 0)

    @foreach($widget->get_content($widget->id)[0] as $content)

        <div class="services-area pt-110 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title text-center mb-60">
                            <h1 contenteditable="true">Programs</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-wrapper text-center mb-70">
                            <div class="services-img">
                                <img src="{{asset('images/'.$content->content_image)}}" alt="" />
                            </div>
                            <div class="services-text">
                                <h2 contenteditable="true">{{@$content->title}}</h2>
                                <p contenteditable="true">{{\Illuminate\Support\Str::limit(@$content->description,150,'...')}}</p>
                                <a href="#">read more<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    @endforeach


@else
    <div class="services-area pt-110 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title text-center mb-60">
                        <h1 contenteditable="true">County Programs </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-wrapper text-center mb-70">
                        <div class="services-img">
                            <img src="{{url('theme/netaji/img/service/1.png')}}" alt="" />
                        </div>
                        <div class="services-text">
                            <h2 contenteditable="true">Economic Progress</h2>
                            <p contenteditable="true">But I must explain to you how all this mista en idea of denouncing pleasure and praising pain was born and I will give</p>
                            <a href="#">read more<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-wrapper text-center mb-70">
                        <div class="services-img">
                            <img src="{{url('theme/netaji/img/service/2.png')}}" alt="" />
                        </div>
                        <div class="services-text">
                            <h2 contenteditable="true">Education Progress</h2>
                            <p contenteditable="true">But I must explain to you how all this mista en idea of denouncing pleasure and praising pain was born and I will give</p>
                            <a href="#">read more<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-wrapper text-center mb-70">
                        <div class="services-img">
                            <img src="{{url('theme/netaji/img/service/3.png')}}" alt="" />
                        </div>
                        <div class="services-text">
                            <h2 contenteditable="true">Accomodation</h2>
                            <p contenteditable="true">But I must explain to you how all this mista en idea of denouncing pleasure and praising pain was born and I will give</p>
                            <a href="#">read more<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-wrapper text-center mb-70">
                        <div class="services-img">
                            <img src="{{url('theme/netaji/img/service/4.png')}}" alt="" />
                        </div>
                        <div class="services-text">
                            <h2 contenteditable="true">Medical Care</h2>
                            <p contenteditable="true">But I must explain to you how all this mista en idea of denouncing pleasure and praising pain was born and I will give</p>
                            <a href="#">read more<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-wrapper text-center mb-70">
                        <div class="services-img">
                            <img src="{{url('theme/netaji/img/service/5.png')}}" alt="" />
                        </div>
                        <div class="services-text">
                            <h2 contenteditable="true">Clothes For Human</h2>
                            <p contenteditable="true">But I must explain to you how all this mista en idea of denouncing pleasure and praising pain was born and I will give</p>
                            <a href="#">read more<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-wrapper text-center mb-70">
                        <div class="services-img">
                            <img src="{{url('theme/netaji/img/service/6.png')}}" alt="" />
                        </div>
                        <div class="services-text">
                            <h2 contenteditable="true">Healthy Foods</h2>
                            <p contenteditable="true">But I must explain to you how all this mista en idea of denouncing pleasure and praising pain was born and I will give</p>
                            <a href="#">read more<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif

