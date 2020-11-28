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

    <!-- CITY SERVICES2 WRAP START-->
        @if($widget->get_content($widget->id)[1] > 0)

            @foreach($widget->get_content($widget->id)[0] as $content)    <!-- CITY SERVICES2 WRAP END-->
            @include('theme.local_government_theme.widgets.departments')

            @endforeach
            @endif
    <!--CITY REQUEST WRAP START-->
    <!--CITY REQUEST WRAP END-->
    @endforeach
@endsection
