
@if($widget->get_content($widget->id)[1] > 0)

    @foreach($widget->get_content($widget->id)[0] as $content)
        <li>
            <div class="city_client_fig">
                <figure class="box">
                    <div class="box-layer layer-1"></div>
                    <div class="box-layer layer-2"></div>
                    <div class="box-layer layer-3"></div>
                    <img src="{{asset('theme/local/extra-images/client.jpg')}}" alt="">
                </figure>
                <div class="city_client_text">
                    <p contenteditable="true">{{@$content->description}}</p>
                    <h4><a href="#" contenteditable="true">{{@$content->title}}</a> </h4>
                    <span><a href="#" contenteditable="true">next</a></span>
                </div>
            </div>
        </li>
    @endforeach


@else
    <li>
        <div class="city_client_fig">
            <figure class="box">
                <div class="box-layer layer-1"></div>
                <div class="box-layer layer-2"></div>
                <div class="box-layer layer-3"></div>
                <img src="{{asset('theme/local/extra-images/client.jpg')}}" alt="">
            </figure>
            <div class="city_client_text">
                <p contenteditable="true">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. </p>
                <h4><a href="#" contenteditable="true">Likor Stom</a> </h4>
                <span><a href="#" contenteditable="true">Directio-Baseline</a></span>
            </div>
        </div>
    </li>
@endif


