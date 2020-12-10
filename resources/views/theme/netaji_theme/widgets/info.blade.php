@if($widget->get_content($widget->id)[1] > 0)
    @php $counter=0 @endphp
    @foreach($widget->get_content($widget->id)[0] as $content)
        @if($counter > 0)
            @break
        @endif
        <div class="volunteer-area volunteer11" style="background-image:url(theme/netaji/img/bg/2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                        <div class="volunteer-text pt-80 pb-80">
                            <h1 contenteditable="true">{{@$content->title}}</h1>
                            <p contenteditable="true">{{@$content->description}}</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-lg-none d-xl-block">
                        <div class="volunteer-img">
                            <img src="{{asset('images/'.@$content->content_image)}}" alt="" style="width: 100%; height: 400%; border-radius: 20px">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @php $counter++ @endphp
    @endforeach


@else

    <div class="volunteer-area volunteer11" style="background-image:url(theme/netaji/img/bg/2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                    <div class="volunteer-text pt-80 pb-80">
                        <h1 contenteditable="true">Welcome to our County</h1>
                        <p contenteditable="true">But I must explain to you how all this mistaken idea of denople asure and praising pain was born and I willcomplete.</p>
                        <a class="btn" href="#" contenteditable="true">join volunteer</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-lg-none d-xl-block">
                    <div class="volunteer-img">
                        <img src="{{url('theme/netaji/img/bg/become_vo.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif


