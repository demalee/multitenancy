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
        @if($widget->get_content($widget->id)[1] > 0)

                @include('theme.local_government_theme.widgets.post')
        @endif
        <!--CITY NEWS2 WRAP END-->

        <!--CITY REQUEST WRAP START-->
    @endforeach
    <!--CITY REQUEST WRAP END-->
@endsection
