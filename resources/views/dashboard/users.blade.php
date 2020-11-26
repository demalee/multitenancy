
@extends('layouts.apps')
@section('content')          <!-- Page Sidebar Ends-->
<!-- Container-fluid starts-->
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">

        <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
            <div class="card custom-card">
                <div class="card-header"><img class="img-fluid" src="https://laravel.pixelstrap.com/xolo/assets/images/user-card/1.jpg" alt=""></div>
                <div class="card-profile"><img class="rounded-circle" src="https://laravel.pixelstrap.com/xolo/assets/images/avtar/3.jpg" alt=""></div>
                <ul class="card-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
                <div class="text-center profile-details">
                    <h4>Kibet</h4>
                    <h6>Developer</h6>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
            <div class="card custom-card">
                <div class="card-header"><img class="img-fluid" src="https://laravel.pixelstrap.com/xolo/assets/images/user-card/7.jpg" alt=""></div>
                <div class="card-profile"><img class="rounded-circle" src="https://laravel.pixelstrap.com/xolo/assets/images/avtar/16.jpg" alt=""></div>                <ul class="card-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
                <div class="text-center profile-details">
                    <h4>Allan</h4>
                    <h6>Developer</h6>
                </div>
            </div>
            <center>
                <button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button" data-toggle="modal" data-target="#exampleModalmdo" data-whatever="@fat"><span style="color: white">Add Users</span></button>
            </center>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
            <div class="card custom-card">
                <div class="card-header"><img class="img-fluid" src="https://laravel.pixelstrap.com/xolo/assets/images/user-card/2.jpg" alt=""></div>
                <div class="card-profile"><img class="rounded-circle" src="https://laravel.pixelstrap.com/xolo/assets/images/avtar/16.jpg" alt=""></div>                <ul class="card-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
                <div class="text-center profile-details">
                    <h4>Bendon</h4>
                    <h6>Manager</h6>
                </div>
            </div>

        </div>

    </div></div>
<!-- Container-fluid Ends-->
<div class="modal fade" id="exampleModalmdo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Add User</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">User Name</label>
                        <input class="form-control"  name="Name" type="text" value="Submenu title">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Email</label>
                        <input class="form-control"  name="email" type="email" value="Submenu title">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="file"> Upload User image</label>
                        <input class="form-control" type="file" name="widget_file">
                    </div>
                            <div class="form-group m-checkbox-inline mb-0">

                                <div class="media-body align-self-center">
                                    <input type="checkbox"  name="" value="">
                                    <h6 class="mt-0">Administrator role</h6>
                                </div>
                            </div>
                    <div class="form-group m-checkbox-inline mb-0">

                        <div class="media-body align-self-center">
                            <input type="checkbox"  name="" value="">
                            <h6 class="mt-0">Account Management</h6>
                        </div>
                    </div><div class="form-group m-checkbox-inline mb-0">

                        <div class="media-body align-self-center">
                            <input type="checkbox"  name="" value="">
                            <h6 class="mt-0">Normal Member</h6>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="button">Add User</button>
            </div>
        </div>
    </div>
</div>

<!-- footer start-->
@endsection
