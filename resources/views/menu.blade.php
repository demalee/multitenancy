
@extends('layouts.apps')
@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Menus


                        </h5>
                        <span class="pull-right" ><button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button"><a href="{{url('dashboard/menus/create')}}" ><span style="color: white">Create Menu</span></a></button>
</span>


                    </div>
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Created At</th>
                                <th scope="col">View</th>
                                <th scope="col" >Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @php $counter=1  @endphp
                            @foreach($menus as $menu)
                            <tr>
                                <th scope="row">{{$counter}}</th>
                                <td>{{@$menu->name}}</td>
                                <td>{{\Carbon\Carbon::parse($menu->created_at)}}</td>

                                <td>
                                    <a  class="btn btn-pill btn-primary btn-air-secondary btn-sm" href="{{route('menus.show',$menu->id)}}">add menu items</a>
                                </td>
                                <td>
                                    <form action="{{route('menus.destroy',$menu->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-pill btn-danger btn-air-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                                @php $counter++ @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div></div></div>
@endsection
