@extends('layouts.apps')
@section('content')


    <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">

                    <div class="col-sm-12 col-xl-8">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Page Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <form class="theme-form mega-form" method="" action="">

                                            <div class="form-group">
                                                <label class="col-form-label">Name</label>
                                                <input class="form-control" name="name" type="text" placeholder="your Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea9">Description</label>
                                                <textarea class="form-control" name="description" id="exampleFormControlTextarea9" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Content</label>
               <textarea class="form-control" id="editor1" name="editor1" cols="30" rows="10">
</textarea>


</div>
                                            <div class="form-group">
                                                <label class="col-sm-3 col-form-label">Upload File</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="file">
                                                </div>
                                            </div>
                                        </form>


                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary">Submit</button>
                                        <button class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- latest jquery-->
    <script src="https://laravel.pixelstrap.com/xolo/assets/js/bootstrap/popper.min.js"></script>
    <script src="https://laravel.pixelstrap.com/xolo/assets/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="https://laravel.pixelstrap.com/xolo/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="https://laravel.pixelstrap.com/xolo/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="https://laravel.pixelstrap.com/xolo/assets/js/sidebar-menu.js"></script>
    <script src="https://laravel.pixelstrap.com/xolo/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="https://laravel.pixelstrap.com/xolo/assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="https://laravel.pixelstrap.com/xolo/assets/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="https://laravel.pixelstrap.com/xolo/assets/js/editor/ckeditor/styles.js"></script>
    <script src="https://laravel.pixelstrap.com/xolo/assets/js/editor/ckeditor/ckeditor.custom.js"></script>
    <script src="https://laravel.pixelstrap.com/xolo/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="https://laravel.pixelstrap.com/xolo/assets/js/script.js"></script>
    <script src="https://laravel.pixelstrap.com/xolo/assets/js/theme-customizer/customizer.js"></script>

@endsection
