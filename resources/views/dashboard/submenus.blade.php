@extends('layouts.apps')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Menus


                    </h5>
                    <span class="pull-right" ><button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button"> Create</button>
</span>

                </div>
                <div class="table-responsive">

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
{{--                            <th scope="col" >Delete</th>--}}

                        </tr>
                        </thead>
                        <tbody>
                        @php $counter=0 @endphp
                        @foreach($menus as $menu)
                        <tr>
                            <th scope="row">{{$counter}}</th>
                            <td>{{$menu->title}}</td>
                            <td>{{\Carbon\Carbon::parse(@$menu->created_at)}}</td>
                            <td>
                                <button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button">Published</button>
                            </td>

                            <td>
                                <a class="btn btn-pill btn-danger btn-air-danger btn-sm" href="{{url('dashboard/submenus/'.$menu->id)}}">Edit Submenu</a>
                            </td>
{{--                            <td>--}}
{{--                                <button class="btn btn-pill btn-danger btn-air-danger btn-sm" type="button">Delete</button>--}}
{{--                            </td>--}}
                        </tr>
                        @php $counter++ @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div></div></div>
@endsection
