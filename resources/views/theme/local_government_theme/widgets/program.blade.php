
@if($widget->get_content($widget->id)[1] > 0)

    @foreach($widget->get_content($widget->id)[0] as $content)
        <div>
            <div class="city_project_fig">
                <figure class="overlay">
                    <img src="{{asset('images/'.$content->content_image)}}" alt="">
                    <div class="city_project_text">
                        <span><i class="fa icon-plastic"></i></span>
                        <a href="#" contenteditable="true">{{@$content->title}}</a>
                        <h3><a href="#" contenteditable="true">{{@$content->description}}</a></h3>
                    </div>
                </figure>
            </div>
        </div>
    @endforeach


@else
    <div>
        <div class="city_project_fig">
            <figure class="overlay">
                <img src="{{asset('theme/local/extra-images/project-fig.jpg')}}" alt="">
                <div class="city_project_text">
                    <span><i class="fa icon-plastic"></i></span>
                    <a href="#" contenteditable="true">Constructions</a>
                    <h3><a href="#" contenteditable="true">Government vows to prioritize local contractors in infrastructure program</a></h3>
                </div>
            </figure>
        </div>
    </div>
@endif

