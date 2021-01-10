@if($widget->get_content($widget->id)[1] > 0)

    <div class="sab_banner overlay">
        <div class="container">
            <div class="sab_banner_text">
                <h2 @auth contenteditable="true" @endauth>{{@$page_name}}</h2>
                <ul class="breadcrumb">
                    @foreach($widget->get_content($widget->id)[0] as $content)
                    <li class="breadcrumb-item" @auth contenteditable="true" @endauth ><a href="{{@$content->source_link}}">{{@$content->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@else
    <div class="sab_banner overlay">
        <div class="container">
            <div class="sab_banner_text">
                <h2 @auth contenteditable="true" @endauth>{{@$page_name}}</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item" @auth contenteditable="true" @endauth><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" @auth contenteditable="true" @endauth>Upcoming Event</li>
                </ul>
            </div>
        </div>
    </div>
@endif


