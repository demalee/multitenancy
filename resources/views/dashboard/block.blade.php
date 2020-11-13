@extends('layouts.apps')
@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Blocks


                        </h5>
                        <span class="pull-right" ><button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button"><a href="{{url('dashboard/pages/create')}}" ><span style="color: white">Create</span></a></button>
</span>

                    </div>
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Block Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Description</th>
                                <th scope="col">View</th>
                                <th scope="col" >Delete</th>

                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th>1</th>
                                    <th >Multisite Block</th>
                                    <td>left</td>
                                    <td>Test</td>
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




                            </tbody>
                        </table>
                    </div>
                </div>
            </div></div></div>
@endsection
