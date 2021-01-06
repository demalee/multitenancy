@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row">


        @foreach($themes as $theme)
        <div class="col-sm-12 col-lg-6 col-xl-6 xl-50 col-md-12 box-col-6">
            <div class="card height-equal">
                <div class="calender-widget">
                    <img src="{{asset('images/'.$theme->theme_image)}}" style="width: 100%;height:200px" />

                    <div class="cal-desc text-center card-body">

                        <h6 class="f-w-600">Theme: {{str_replace('_',' ',@$theme->name)}}</h6>
                        <p class="text-muted mt-3 mb-0">Description: A {{@$theme->name}}</p>

                        @if($theme->id == 1)
                            <button class="btn btn-pill btn-primary btn-air-secondary btn-medium">Default</button>
                            <button class="btn btn-pill btn-danger btn-air-success btn-medium" type="button">Preview</button>
                            @else
                            @if($theme->status_active == 0)
                                <form action="{{url('dashboard/theme/change/'.$theme->id)}}" method="post">
                                    @csrf
                                    <button class="btn btn-pill btn-primary btn-air-secondary btn-group-sm" name="submit" value="activate">Activate</button>
                                </form>

{{--
            <button class="btn btn-pill btn-danger btn-air-success btn-group-sm" type="button">Preview</button>--}}
                     <div class="row">
                         <div class="col-md-3">

                         </div>
                     </div>
                            @elseif($theme->status_active == 1)
                                <form action="{{url('dashboard/theme/change/'.$theme->id)}}" method="post">
                                    @csrf
                                   <span class="pull-right"> <button class="btn btn-pill btn-primary btn-air-secondary btn-group-sm "  name="submit" value="deactivate">Deactivate</button>
                              </span>  </form>

                                <span class="pull-left"> <a class="btn btn-pill btn-danger btn-air-success btn-group-sm" href="{{url('home')}}">Preview</a>
                                </span> @endif
                            @endif
                        <hr>
                    </div>
                </div>
            </div>
        </div>
            @endforeach

    </div>
</div>

@endsection
