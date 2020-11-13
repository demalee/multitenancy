@extends('layouts.apps')
@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Your Settings


                        </h5>
                        <span class="pull-right" ><button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button"><a href="{{url('dashboard/settings')}}" ><span style="color: white">Create settings</span></a></button>
</span>

                    </div>
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                            <tr>

                                <th scope="col">Brand name</th>
                                <th scope="col">Favicon</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Color</th>
                                <th scope="col">Edit</th>
                                <th scope="col" >Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if(@$setting)
                            <tr>

                                <th >{{@$setting->brand_name}}</th>
                                <td><img src="{{asset('images/'.@$setting->favicon)}}" alt="" style="width: 32px;height: 32px"></td>
                                <td><img src="{{asset('images/'.@$setting->logo_name)}}" alt="" style="width: 32px;height: 32px"></td>
                                <td style="background: {{@$setting->brand_color}}"><span style="color: white">{{@$setting->brand_color}}</span></td>
                                <td>

                                    <a class="btn btn-pill btn-primary btn-air-secondary btn-sm" href="">Edit</a>
                                </td>
                                <td>
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-pill btn-danger btn-air-danger btn-sm">Delete</button>
                                    </form>

                                </td>
                            </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div></div></div>
@endsection
