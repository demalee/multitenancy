@extends('theme.local_government_theme.layouts.apps')

@section('content')
    @foreach($widgets as $widget)
    <!-- SAB BANNER START-->
    @if($widget->name == "Bread Crumbs" and $widget->status_active == 1)
        @include('theme.local_government_theme.widgets.breadcrumbs')
    @endif

    <!-- SAB BANNER END-->

    <!-- CITY EVENT2 WRAP START-->

    @if($widget->name == "Post")
    <div class="city_event2_wrap">
        <div class="container">
            <div class="row">
                            <div class="row">
                                @include('theme.local_government_theme.widgets.gallery')
                            </div>

            </div>
        </div>
    </div>
    @endif
    @endforeach
    <!-- CITY EVENT2 WRAP END-->

    <!--CITY REQUEST WRAP START-->

    <!--CITY REQUEST WRAP END-->
@endsection
