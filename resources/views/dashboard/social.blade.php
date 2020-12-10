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
                <form class="form theme-form" method="post" action="{{route('widgets.add_social_links')}}"
                      enctype="multipart/form-data">
                     @csrf
                    <div class="card-body">
                        <div class="row icon-lists feather-icons">
                            <div class="col-12 col-sm-6 col-xl-4">
                                <label>  <i class="fa fa-facebook"></i><h6 class="mt-0"></h6></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Facebook" name="facebook"
                                           value="{{@$social_link->facebook}}">
                                </div>

                                    </div>


                            <div class="col-12 col-sm-6 col-xl-4">

                                <label><i class="fa fa-youtube"></i><h6 class="mt-0"></h6></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Youtube" name="youtube"
                                           value="{{@$social_link->youtube}}">
                                </div>


                            </div>

                            <div class="col-12 col-sm-6 col-xl-4">


<label><i class="fa fa-twitter"></i> <h6 class="mt-0"></h6></label>
                                <div class="form-group">
                                            <input type="text"  class="form-control" name="twitter" placeholder="twitter"
                                                   value="{{@$social_link->twitter}}">
                                        </div>

                            </div>
                            <div class="col-12 col-sm-6 col-xl-4">

                                        <label> <i class="fa fa-instagram"></i><h6 class="mt-0"></h6></label>

                                        <div class="form-group">
                                            <input type="text"  class="form-control" name="instagram" placeholder="Instagram"
                                                   value="{{@$social_link->instagram}}">
                                        </div>


                                </div>



                            <div class="col-12 col-sm-6 col-xl-4">
                                <label><i class="fa fa-skype"></i><h6 class="mt-0"></h6></label>

                                <div class="form-group">
                                    <input type="text"  class="form-control" name="skype" placeholder="Skype"
                                           value="{{@$social_link->skype}}">
                                </div>


                                    </div>

                            <div class="col-12 col-sm-6 col-xl-4">
                                <label><i class="fa fa-linkedin"></i><h6 class="mt-0"></h6></label>

                                <div class="form-group">
                                    <input type="text"  class="form-control" name="linkedin" placeholder="linkedin"
                                           value="{{@$social_link->linkedin}}">
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
