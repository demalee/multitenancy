@extends('layouts.apps')
@section('content')

    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i class="f-16 fa fa-home"></i></a></li>
                        <li class="breadcrumb-item">Change DNS</li>
                        <li class="breadcrumb-item">DNS Management</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">

                <div class="card">
                    <div class="card-header">
                        <h5>DNS Management
                        </h5>
                        <h6></h6>
                    </div>
                    <form class="form theme-form" method="post" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col-sm-9">

                                        <label>Initial Name Server</label>
                                            <input class="form-control" name="brand_name" type="text" placeholder="www.test.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9">

                                        <label>New Name Server</label>
                                            <input class="form-control" name="brand_name" type="text" placeholder=" www.test2.com">
                                        </div>
                                    </div>
                                </div></div>

                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" >Change DNS</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
