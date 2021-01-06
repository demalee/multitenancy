
@extends('layouts.apps')
@section('content')          <!-- Page Sidebar Ends-->
<!-- Container-fluid starts-->
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="text-center">
        <button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button" data-toggle="modal" data-target="#exampleModalmdo" data-whatever="@fat"><span style="color: white">Add Users</span></button>
    </div>
    <div class="row">
        @foreach($users as $user)
            <div class="col-md-4 col-xl-4 box-col-4">
                <div class="card custom-card">
                    <div class="card-header">
                        @if(@$user->profile_image)
                        <img class="img-fluid" src="{{asset('images/'.@$user->profile_image)}}" alt="">
                    @else
                        <img class="img-fluid" src="{{asset('images/banner.jpg')}}" alt="">
                @endif
                    </div>
                    <div class="card-profile">
                        @if(@$user->profile_image)
                            <img class="rounded-circle" style="width: 100px;height: 100px" src="{{asset('images/'.@$user->profile_image)}}" alt="">
                @else
                            <img class="rounded-circle" style="width: 100px;height: 100px" src="{{asset('images/user_avatar.png')}}" alt="">
            @endif

                    </div>

                    <div class="text-center profile-details">
                        <h4>{{@$user->name}}</h4>
                        <h6>{{@$user->role->name}}</h6>
                    </div>
                </div>
            </div>

        @endforeach
    </div>


    </div>
<!-- Container-fluid Ends-->
<div class="modal fade" id="exampleModalmdo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Add User</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('dashboard.create_user')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">User Name</label>
                        <input class="form-control"  name="name" type="text" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Email</label>
                        <input class="form-control"  name="email" type="email" required>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name">Password</label>
                        <input class="form-control"  name="password" type="password" required>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="file"> Upload User image</label>
                        <input class="form-control" type="file" name="profile_image">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="file"> Select Role</label>
                        <select name="role" id="" required="" class="form-control">
                            <option value="">Select Role</option>
                            <option value="1">Administrator</option>
                            <option value="2">Member</option>
                        </select>
                    </div>

                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Add User</button>

                </form>
            </div>

        </div>
    </div>
</div>

<!-- footer start-->
@endsection
