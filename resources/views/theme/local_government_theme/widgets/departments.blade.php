@if($widget->get_content($widget->id)[1] > 0)
    <div class="container">
    <div class="row">
    @foreach($widget->get_content($widget->id)[0] as $content)
        <div class="col-md-4">
                <div class="city_department_fig">
                    <figure class="box">
                        <div class="box-layer layer-1"></div>
                        <div class="box-layer layer-2"></div>
                        <div class="box-layer layer-3"></div>
                        <img src="{{asset('images/'.$content->content_image)}}" alt="" style="height: 200px">
                        <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('images/'.$content->content_image)}}"><i class="fa fa-plus"></i></a>
                    </figure>
                    <div class="city_department_text">
                        <h5 contenteditable="true">{{@$content->title}}</h5>
                        <p contenteditable="true">{{\Illuminate\Support\Str::limit(@$content->description,150,'...')}}</p>
                        <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
    @endforeach
    </div>
    </div>


@else
    <div>
        <div class="width_control">
            <div class="city_department_fig">
                <figure class="box">
                    <div class="box-layer layer-1"></div>
                    <div class="box-layer layer-2"></div>
                    <div class="box-layer layer-3"></div>
                    <img src="{{asset('theme/local/extra-images/department-fig.jpg')}}" alt="">
                    <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('theme/local/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                </figure>
                <div class="city_department_text">
                    <h5 contenteditable="true">Administration</h5>
                    <p contenteditable="true">This is Photoshop's version  of Ipsum. </p>
                    <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endif

