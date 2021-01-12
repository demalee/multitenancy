@if($widget->get_content($widget->id)[1] > 0)



        <div class="feature-area pt-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title text-center mb-60">
                        <h1 @auth contenteditable="true" @endauth>The job of a leader is to love his country</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($widget->get_content($widget->id)[0] as $content)

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feature-wrapper text-center mb-30">
                        <div class="feature-item">
                            <div class="feature-img" @auth contenteditable="true" @endauth>
                                <img src="{{asset('images/'.$content->content_image)}}" alt="" style="height: 400px;width: 370px;" />
                            </div>
                            <div class="feature-text">
                                <h2 @auth contenteditable="true" @endauth>{{@$content->title}}</h2>
                                <a class="btn" href="{{@$content->source_link}}">read more</a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h2 @auth contenteditable="true" @endauth>{{@$content->title}}</h2>
                            <p @auth contenteditable="true" @endauth>{{\Illuminate\Support\Str::limit(@$content->description,150,'...')}}</p>
                            <a class="btn" href="#" @auth contenteditable="true" @endauth>read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>






@else
    <div class="feature-area pt-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title text-center mb-60">
                        <h1 @auth contenteditable="true" @endauth>Departments</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feature-wrapper text-center mb-30">
                        <div class="feature-item">
                            <div class="feature-img" @auth contenteditable="true" @endauth>
                                <img src="{{url('theme/netaji/img/feature/icon1.png')}}" alt="" />
                            </div>
                            <div class="feature-text">
                                <h2 @auth contenteditable="true" @endauth>Our Campaign</h2>
                                <a class="btn" href="#" @auth contenteditable="true" @endauth>read more</a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h2 @auth contenteditable="true" @endauth>Our Campaign</h2>
                            <p @auth contenteditable="true" @endauth>But I must explain to you how this taken idea of denouncing pleasure and praising pain was born and I will give you a coplete account of the system expound </p>
                            <a class="btn" href="#" @auth contenteditable="true" @endauth>read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6" @auth contenteditable="true" @endauth>
                    <div class="feature-wrapper active text-center mb-30">
                        <div class="feature-item">
                            <div class="feature-img" >
                                <img src="{{url('theme/netaji/img/feature/icon2.png')}}" @auth contenteditable="true" @endauth alt="" />
                            </div>
                            <div class="feature-text">
                                <h2 @auth contenteditable="true" @endauth>Join Volunteer</h2>
                                <a class="btn" href="#">read more</a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h2 @auth contenteditable="true" @endauth>Join Volunteer</h2>
                            <p @auth contenteditable="true" @endauth>But I must explain to you how this taken idea of denouncing pleasure and praising pain was born and I will give you a coplete account of the system expound </p>
                            <a class="btn" href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feature-wrapper text-center mb-30">
                        <div class="feature-item">
                            <div class="feature-img">
                                <img src="{{url('theme/netaji/img/feature/icon1.png')}}" alt="" />
                            </div>
                            <div class="feature-text">
                                <h2 @auth contenteditable="true" @endauth>Make Donation</h2>
                                <a class="btn" href="#">read more</a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h2 @auth contenteditable="true" @endauth>Make Donation</h2>
                            <p @auth contenteditable="true" @endauth>But I must explain to you how this taken idea of denouncing pleasure and praising pain was born and I will give you a coplete account of the system expound </p>
                            <a class="btn" href="#" >read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 mt-25">
                    <div class="feature-info text-center">
                        <p @auth contenteditable="true" @endauth>But I must explain to you how all <a href="#">Our timeline</a> dea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

