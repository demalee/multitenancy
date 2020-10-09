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
                                <th scope="col">View</th>
                                <th scope="col" >Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Categories</td>
                                <td>2016-10-21</td>
                                <td>
                                    <button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button">Published</button>
                                </td>

                                <td>
                                    <button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button">View</button>
                                </td>
                                <td>
                                    <button class="btn btn-pill btn-danger btn-air-danger btn-sm" type="button">Delete</button>
                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div></div></div>
@endsection
