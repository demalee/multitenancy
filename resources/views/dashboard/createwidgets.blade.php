@extends('layouts.apps')
@section('content')          <!-- Page Sidebar Ends-->
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-b-0">Add custom widgets
                    </h5>
                    <br>
                    <h6>Add widgets to make your website more ascetic and more
                        user friendly</h6>
                </div>
                <form class="form theme-form" method="#" action="#" enctype="multipart/form-data">
{{--                    @csrf--}}
                    <div class="card-body">
                        <div class="row icon-lists feather-icons">
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">

                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value="">    <i data-feather="activity"></i><h6 class="mt-0">Events</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">


                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value="">   <i data-feather="airplay"></i><h6 class="mt-0">Publication</h6>
                                        </div>
                                    </div></div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">

                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value="">                                             <i data-feather="alert-circle"></i>
                                            <h6 class="mt-0">Content</h6>
                                        </div>
                                    </div></div>
                            </div><div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">


                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value=""> <i data-feather="inbox"></i> <h6 class="mt-0">News</h6>
                                        </div>
                                    </div></div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">


                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value="">    <i data-feather="facebook"></i><h6 class="mt-0">Social</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">


                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value="">    <i data-feather="sliders"></i><h6 class="mt-0">Slider</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary" >View your website</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="icon-hover-bottom p-fixed fa-fa-icon-show-div opecity-0">
    <div class="container-fluid">
        <div class="row">
            <div class="icon-popup">
                <div class="close-icon"><i class="icofont icofont-close"></i></div>
                <div class="icon-first"><i id="icon_main"></i></div>
                <div class="icon-class">
                    <label class="icon-title">data-feather</label><span id="fclass1"></span>
                </div>
                <div class="icon-last icon-last">
                    <label class="icon-title">Markup</label>
                    <div class="form-inline">
                        <div class="form-group">
                            <input class="inp-val form-control m-r-10" id="input_copy" type="text" value="" readonly="readonly">
                            <button class="btn btn-primary notification" onclick="myFunction()">Copy text</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- footer start-->
@endsection
