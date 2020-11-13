
@extends('layouts.apps')
@section('content')

    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://laravel.pixelstrap.com/xolo"><i class="f-16 fa fa-home"></i></a></li>
                        <li class="breadcrumb-item">Edit settings</li>
                        <li class="breadcrumb-item">Settings</li>
                    </ol>
                    <h3>Edit Settings</h3>
                </div>

            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-header">
                        <h5></h5>
                    </div>
                    <form class="form theme-form" method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Upload favicon</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" name="favicon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Upload Logo</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" name="logo_name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Brand Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="brand_name" type="text" placeholder="Brand name">
                                        </div>
                                    </div></div></div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label pt-0">Brand Color</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="color" name="brand_color" value="#563d7c">
                                        </div>
                                    </div></div></div>

                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" >Submit</button>
                            <input class="btn btn-light" type="reset" value="Cancel">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
