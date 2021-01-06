@extends('layouts.apps')
@section('content')          <!-- Page Sidebar Ends-->
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-b-0">Activate widgets
                    </h5>
                    <br>
                    <h6>Add widgets to make your website more ascetic and more
                        user friendly</h6>
                </div>
                <form class="form theme-form" method="post" action="{{route('widgets.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="row icon-lists feather-icons">

                            <label for="" class="col-sm-12"> <h6>Edit widgets to the page</h6></label>
                            <input type="text" name="page_id" value="{{@$id}}">
                            @foreach($widgets as $widget)
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">

                                        <div class="media-body align-self-center">
                                            <label for="">
                                                <input type="checkbox"  name="widget_item[]"
                                                       @if($widget->active_status(@$id,@$widget->id)) checked @endif
                                                       value="{{$widget->id}}"
                                                >
                                                <i data-feather="activity"></i>{{$widget->name}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>


                        </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary" name="submit" value="activate_edit_widgets">Activate Widgets</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
