@extends('theme.local_government_theme.layouts.apps')
@section('content')
    <!-- SAB BANNER START-->
    @foreach($widgets as $widget)

        @if($widget->name == "Bread Crumbs" and $widget->status_active == 1)


                @include('theme.local_government_theme.widgets.breadcrumbs')

        @endif
    <!-- SAB BANNER END-->

    <!-- CITY SERVICES2 WRAP START-->
        @if($widget->get_content($widget->id)[1] > 0)

            @include('theme.local_government_theme.widgets.departments')

            @endif
    <!--CITY REQUEST WRAP START-->
    <!--CITY REQUEST WRAP END-->
    @endforeach
@endsection
