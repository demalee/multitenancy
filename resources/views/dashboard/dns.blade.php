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
            @if($website->status_active == 0)
                <div class="col-sm-8">

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
                                    <div class="col text-center">
                                        {{--                                    <div class="form-group row">--}}
                                        {{--                                        <div class="col-sm-9">--}}

                                        {{--                                        <label>Initial Name Server</label>--}}
                                        {{--                                            <input class="form-control" name="brand_name" type="text" placeholder="www.test.com">--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="form-group row">--}}
                                        {{--                                        <div class="col-sm-9">--}}

                                        {{--                                        <label>New Name Server</label>--}}
                                        {{--                                            <input class="form-control" name="brand_name" type="text" placeholder=" www.test2.com">--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                        <div>
                                            <br>
                                            <br>
                                            <span class="fa fa-5x fa-times" style="color: red"></span>
                                            <br>
                                            <br>
                                            <h3>Website is inactive,Would you like to activate it? </h3>
                                            <br>
                                            <br>
                                        </div>
                                        <button class="btn btn-primary" >Activate</button>
                                    </div></div>

                            </div>
                            {{--                        <div class="card-footer">--}}
                            {{--                            --}}
                            {{--                        </div>--}}
                        </form>
                    </div>
                </div>

            @else

                <div class="col-sm-8">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5>DNS Management
                            </h5>
                            <h6></h6>
                        </div>
                        <div class="card-body">

                            <br>
                            <br>
                            <span class="fa fa-5x fa-check" style="color: green"></span>
                            <br>
                            <br>
                            <h3>Website is Active!!! </h3>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection
