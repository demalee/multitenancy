@extends('layouts.apppages')
@section('content')

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

    <!-- Plugins JS Ends-->
    <!-- Theme js-->


@endsection
