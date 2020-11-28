@extends('theme.local_government_theme.layouts.apps')

@section('content')

    <!-- SAB BANNER START-->
    @foreach($widgets as $widget)

        @if($widget->name == "Bread Crumbs" and $widget->status_active == 1)


                @foreach($widget->get_content($widget->id)[0] as $content)
                    @include('theme.local_government_theme.widgets.breadcrumbs')
                @endforeach

        @endif

    <!-- SAB BANNER END-->

    <!-- CITY EVENT2 WRAP START-->
    <div class="city_event2_wrap">

                @if($widget->get_content($widget->id)[1] > 0)
                    @include('theme.local_government_theme.widgets.events')

                @endif
    </div>
    <!-- CITY EVENT2 WRAP END-->

    <!--CITY REQUEST WRAP START-->
    @endforeach
    <!--CITY REQUEST WRAP END-->
@endsection
