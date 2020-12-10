
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
                        <input class="form-control"  name="Name" type="text" >
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Email</label>
                        <input class="form-control"  name="email" type="email">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Password</label>
                        <input class="form-control"  name="password" type="password" >
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="file"> Upload User image</label>
                        <input class="form-control" type="file" name="widget_file">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="file"> Select Role</label>
                        <select name="role" id="" required="" class="form-control">
                            <option value="">Select Role</option>
                            <option value="1">Administrator</option>
                            <option value="2">Member</option>
                        </select>
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
