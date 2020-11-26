@extends('layouts.apps')
@section('content')          <!-- Page Sidebar Ends-->
<!-- Container-fluid starts-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-b-0">
                        Add Social Media Links
                    </h5>


                </div>
                <form class="form theme-form" method="#" action="#" enctype="multipart/form-data">
                    {{--                    @csrf--}}
                    <div class="card-body">
                        <div class="row icon-lists feather-icons">
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">

                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value="">   <i class="fa fa-facebook"></i><h6 class="mt-0">Facebook</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">


                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value="">   <i class="fa fa-youtube"></i><h6 class="mt-0">Youtube</h6>
                                        </div>
                                    </div></div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">

                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value=""> <i class="fa fa-google"></i>
                                            <h6 class="mt-0">Google</h6>
                                        </div>
                                    </div></div>
                            </div><div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">


                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value=""> <i class="fa fa-twitter"></i> <h6 class="mt-0">Twitter</h6>
                                        </div>
                                    </div></div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">


                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value="">     <i class="fa fa-instagram"></i><h6 class="mt-0">Instagram</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">


                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value="">     <i class="fa fa-pinterest"></i><h6 class="mt-0">Pinterest</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">


                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value="">     <i class="fa fa-skype"></i><h6 class="mt-0">Skype</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">


                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value="">     <i class="fa fa-instagram"></i><h6 class="mt-0">Instagram</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">


                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value="">    <i class="fa fa-flickr"></i><h6 class="mt-0">Flickr</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">


                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value="">     <i class="fa fa-dropbox"></i><h6 class="mt-0">DropBox</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">


                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value="">     <i class="fa fa-dribbble"></i><h6 class="mt-0">Dribble</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">


                                        <div class="media-body align-self-center">
                                            <input type="checkbox"  name="" value="">     <i class="fa fa-github"></i><h6 class="mt-0">Github</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary" >Add Social Media Links</button>
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
