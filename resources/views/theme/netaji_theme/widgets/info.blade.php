@if($widget->get_content($widget->id)[1] > 0)
    @php $counter=0 @endphp
    @foreach($widget->get_content($widget->id)[0] as $content)
        @if($counter > 0)
            @break
        @endif

        <div class="about-me-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about2-me-wrapper mb-30">
                            <div class="about-me-content">
                                <h1>{{@$content->title}}</h1>
                                <p>{{@$content->description}} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about2-me-img">
                            <img src="{{asset('images/'.@$content->content_image)}}" alt="" style="height: 500px; width:500px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @php $counter++ @endphp
    @endforeach


@else
    <div class="about-me-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about2-me-wrapper mb-30">
                        <div class="about-me-content">
                            <h1>The job of a leader is love country & people of the country</h1>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about2-me-img">
                        <img src="images/gov.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endif


