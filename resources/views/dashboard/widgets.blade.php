@extends('layouts.apps')
@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Widgets
                        </h5>
                        <span class="pull-right" >
                            <button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button"><a href="{{url('dashboard/createwidgets')}}" ><span style="color: white">Create Widgets</span></a></button></span>
                    </div>
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Widget Name</th>
                                <th scope="col">Date Added</th>
                                <th scope="col">Status</th>
                                <th scope="col">Add Content</th>
{{--                                <th scope="col" >Delete</th>--}}

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($widgets as $widget)
                                <tr>
                                    <th scope="row">{{$widget->id}}</th>
                                    <td>{{@$widget->name}}</td>
                                    <td>{{@$widget->created_at}}</td>
                                    <td>
                                        @if(@$widget->status_active == 0)
                                            <button class="btn btn-sm btn-secondary">Inactive</button>
                                            @else
                                        <button class="btn btn-sm btn-success">Active</button>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url('dashboard/content/'.$widget->id)}}" class="btn btn-sm btn-primary">Add Content</a>
                                    </td>
{{--                                    <td><i data-feather="trash"></i> </td>--}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div></div></div>
@endsection
