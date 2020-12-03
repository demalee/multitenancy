@extends('layouts.apps')
@section('content')          <!-- Page Sidebar Ends-->
<!-- Container-fluid starts-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-7">
<div class="card">
    <div class="card-body">

        <form action="" method="post">

            @csrf
            @method('PUT')
            <div class="form-group row mb-0">
                <label class="col-sm-12 col-form-label pb-0">Edit Submenu</label>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-form-label">Submenu title*</label>

                        <input class="form-control" name="sub_menu" type="text" value="" placeholder="SubMenu name" required>
                    </div>
                    <div class="form-group m-checkbox-inline mb-0">
                        <div class="row">
                                <div class="col-md-4">
                                    <label>

                                        <input type="checkbox"  name="page_id[]" value=""  class="option-custom"><small>SubMenu</small>

                                    </label>
                                </div>

                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" name="submit" value="edit_sub_menu"> Edit Submenu
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div></div>
        </div></div></div>
@endsection