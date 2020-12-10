@extends('theme.netaji_theme.layouts.apps')
@section('content')
    <!-- header-end -->
    @foreach($widgets as $widget)
        @if($widget->name == "Slider" and $widget->active_status(@$page_id->id,@$widget->id))
                    @include('theme.netaji_theme.widgets.slider')

        @endif

        @if($widget->name == "Banner" and $widget->active_status(@$page_id->id,@$widget->id))

                            @include('theme.netaji_theme.widgets.info')

        @endif

        @if($widget->name == "Department" and $widget->active_status(@$page_id->id,@$widget->id))

                            @include('theme.netaji_theme.widgets.departments')
        @endif

        @if($widget->name == "Authority" and $widget->active_status(@$page_id->id,@$widget->id))
            @include('theme.netaji_theme.widgets.authority')

        @endif

        @if($widget->name == "Events" and $widget->active_status(@$page_id->id,@$widget->id))
            @include('theme.netaji_theme.widgets.events')
        @endif
        @if($widget->name == "Post" and $widget->active_status(@$page_id->id,@$widget->id))
            @include('theme.netaji_theme.widgets.post')
@endif

        @if($widget->name == "News" and $widget->active_status(@$page_id->id,@$widget->id))
            @include('theme.netaji_theme.widgets.news')
@endif
        @if($widget->name == "Gallery" and $widget->active_status(@$page_id->id,@$widget->id))
            @include('theme.netaji_theme.widgets.gallery')
        @endif
    @endforeach

@endsection
