@extends('theme.local_government_theme.layouts.apps')
@section('content')

    <!-- SAB BANNER START-->
    @foreach($widgets as $widget)

        @if($widget->name == "Bread Crumbs" and $widget->status_active == 1)


                @include('theme.local_government_theme.widgets.breadcrumbs')

        @endif
        <!-- SAB BANNER END-->
        @if($widget->get_content($widget->id)[1] > 0)

                @include('theme.local_government_theme.widgets.events')

        @endif
        <!--CITY NEWS2 WRAP END-->

        <!--CITY REQUEST WRAP START-->
    @endforeach
    <!--CITY REQUEST WRAP END-->
@endsection
