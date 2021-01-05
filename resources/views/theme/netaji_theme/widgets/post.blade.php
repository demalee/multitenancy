@if($widget->get_content($widget->id)[1] > 0)
    <div class="donation-forms-area pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title text-center mb-60">
                        <h1 contenteditable="true">Posts</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($widget->get_content($widget->id)[0] as $content)

                <div class="col-xl-6 col-lg-6  mb-60">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-4">
                            <div class="donation-forms-img">
                                <a href=""><img src="{{asset('images/'.$content->content_image)}}" alt=""  style="height: 250px; width: 250px;"/></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4">
                            <div class="donation-forms-wrapper">
                                <div class="donation-forms-text">
                                    <h2><a href="">{{@$content->title}}</a></h2>
                                    <div class="donation-forms-meta">
                                        <span><i class="far fa-calendar-alt"></i> {{\Carbon\Carbon::parse(@$content->source_date)->format('d F Y')}}</span>
                                    </div>
                                    <span>{{@$content->start_time}} -  <span>{{@$content->end_time}}</span></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <p>{{@$content->description}}</p>
                                    <a class="btn" href="{{@$content->source_link}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

        </div>
    </div>






@else
    <div class="donation-forms-area pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6  mb-60">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="donation-forms-img">
                                <a href="donation-details.html"><img src="img/donation/1.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="donation-forms-wrapper">
                                <div class="donation-forms-text">
                                    <h2><a href="donation-details.html">County Posts</a></h2>
                                    <div class="donation-forms-meta">
                                        <span><i class="fas fa-user"></i> Michel</span>
                                        <span><i class="far fa-calendar-alt"></i> 20 Nov 2018</span>
                                    </div>
                                    <span>$500 <span>of $350,000 raised</span></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <p>But I must explain to you how all this mistaken idea of denouncing.</p>
                                    <a class="btn" href="donation-details.html">donate now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-60">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="donation-forms-img">
                                <a href="donation-details.html"><img src="img/donation/2.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="donation-forms-wrapper">
                                <div class="donation-forms-text">
                                    <h2><a href="donation-details.html">Donate For Army</a></h2>
                                    <div class="donation-forms-meta">
                                        <span><i class="fas fa-user"></i> Michel</span>
                                        <span><i class="far fa-calendar-alt"></i> 20 Nov 2018</span>
                                    </div>
                                    <span>$500 <span>of $350,000 raised</span></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <p>But I must explain to you how all this mistaken idea of denouncing.</p>
                                    <a class="btn" href="donation-details.html">donate now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-60">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="donation-forms-img">
                                <a href="donation-details.html"><img src="img/donation/3.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="donation-forms-wrapper">
                                <div class="donation-forms-text">
                                    <h2><a href="donation-details.html">Save the Forest</a></h2>
                                    <div class="donation-forms-meta">
                                        <span><i class="fas fa-user"></i> Michel</span>
                                        <span><i class="far fa-calendar-alt"></i> 20 Nov 2018</span>
                                    </div>
                                    <span>$500 <span>of $350,000 raised</span></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <p>But I must explain to you how all this mistaken idea of denouncing.</p>
                                    <a class="btn" href="donation-details.html">donate now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-60">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="donation-forms-img">
                                <a href="donation-details.html"><img src="img/donation/4.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="donation-forms-wrapper">
                                <div class="donation-forms-text">
                                    <h2><a href="donation-details.html">Donate For Study</a></h2>
                                    <div class="donation-forms-meta">
                                        <span><i class="fas fa-user"></i> Michel</span>
                                        <span><i class="far fa-calendar-alt"></i> 20 Nov 2018</span>
                                    </div>
                                    <span>$500 <span>of $350,000 raised</span></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <p>But I must explain to you how all this mistaken idea of denouncing.</p>
                                    <a class="btn" href="donation-details.html">donate now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-60">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="donation-forms-img">
                                <a href="donation-details.html"><img src="img/donation/5.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="donation-forms-wrapper">
                                <div class="donation-forms-text">
                                    <h2><a href="donation-details.html">Donate For Health</a></h2>
                                    <div class="donation-forms-meta">
                                        <span><i class="fas fa-user"></i> Michel</span>
                                        <span><i class="far fa-calendar-alt"></i> 20 Nov 2018</span>
                                    </div>
                                    <span>$500 <span>of $350,000 raised</span></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <p>But I must explain to you how all this mistaken idea of denouncing.</p>
                                    <a class="btn" href="donation-details.html">donate now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-60">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="donation-forms-img">
                                <a href="donation-details.html"><img src="img/donation/6.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="donation-forms-wrapper">
                                <div class="donation-forms-text">
                                    <h2><a href="donation-details.html">Donate For Sports</a></h2>
                                    <div class="donation-forms-meta">
                                        <span><i class="fas fa-user"></i> Michel</span>
                                        <span><i class="far fa-calendar-alt"></i> 20 Nov 2018</span>
                                    </div>
                                    <span>$500 <span>of $350,000 raised</span></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <p>But I must explain to you how all this mistaken idea of denouncing.</p>
                                    <a class="btn" href="donation-details.html">donate now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="donation-forms-button text-center">
                        <a class="btn" href="#">view all fund</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endif


