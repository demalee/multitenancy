@if($widget->get_content($widget->id)[1] > 0)

    <div class="sab_banner overlay">
        <div class="container">
            <div class="sab_banner_text">
                <h2 contenteditable="true">{{@$page_name}}</h2>
                <ul class="breadcrumb">
                    @foreach($widget->get_content($widget->id)[0] as $content)
                    <li class="breadcrumb-item" contenteditable="true"><a href="{{@$content->source_link}}">{{@$content->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@else
    <div class="sab_banner overlay">
        <div class="container">
            <div class="sab_banner_text">
                <h2 contenteditable="true">{{@$page_name}}</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item" contenteditable="true"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" contenteditable="true">Upcoming Event</li>
                </ul>
            </div>
        </div>
    </div>
@endif


