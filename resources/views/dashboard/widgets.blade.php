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
                            <button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button"><a href="{{url('dashboard/createwidgets')}}" ><span style="color: white">Create Widgets</span></a></button>
</span>

                    </div>
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Widget Name</th>
                                <th scope="col">Add Content</th>
                                <th scope="col" >Delete</th>

                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>News</td>
                                    <td>
                                        <a href="{{url('dashboard/content')}}">Add Content</a>
                                    </td>
                                    <td><i data-feather="trash"></i> </td>


                                </tr>




                            </tbody>
                        </table>
                    </div>
                </div>
            </div></div></div>
@endsection
