@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row">


        @foreach($themes as $theme)
        <div class="col-sm-12 col-lg-3 col-xl-3 xl-50 col-md-12 box-col-3">
            <div class="card height-equal">
                <div class="calender-widget">
                    <img src="{{asset('images/'.$theme->theme_image)}}" style="width: 100%;height:200px" />
                    <div class="cal-date">
                        <h5>Added on :25<br>APRIL</h5>
                    </div>
                    <div class="cal-desc text-center card-body">

                        <h6 class="f-w-600">Author: Corporate Technologies</h6>
                        <p class="text-muted mt-3 mb-0">
                            Version: 5.7</p>
                        <p class="text-muted mt-3 mb-0">Description: A {{@$theme->name}} theme</p>

                        @if($theme->id == 1)
                            <button class="btn btn-pill btn-primary btn-air-secondary btn-sm">Default</button>
                            <button class="btn btn-pill btn-danger btn-air-success btn-sm" type="button">Preview</button>
                            @else
                            @if($theme->status_active == 0)
                                <form action="{{url('dashboard/theme/change/'.$theme->id)}}" method="post">
                                    @csrf
                                    <button class="btn btn-pill btn-primary btn-air-secondary btn-sm" name="submit" value="activate">Activate</button>
                                </form>

                                <button class="btn btn-pill btn-danger btn-air-success btn-sm" type="button">Preview</button>
                                @elseif($theme->status_active == 1)
                                <form action="{{url('dashboard/theme/change/'.$theme->id)}}" method="post">
                                    @csrf
                                    <button class="btn btn-pill btn-primary btn-air-secondary btn-sm" name="submit" value="deactivate">Deactivate</button>
                                </form>

                            <button class="btn btn-pill btn-danger btn-air-success btn-sm" type="button">Preview</button>
                            @endif
                            @endif
                    </div>
                </div>
            </div>
        </div>
            @endforeach

    </div>
</div>

@endsection
