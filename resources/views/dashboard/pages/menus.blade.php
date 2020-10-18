
@extends('layouts.apps')
@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-8">

                <div class="card">

                    <div class="card-body">
                            <div class="card-header">

                                <h5>Edit Menu<span class="pull-right" ><button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button"><a href="{{url('main')}}" ><span style="color: white">Dashboard</span></a></button>
</span></h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form mega-form" method="post" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-form-label">Name *</label>
                                        <input class="form-control" name="name" type="text" placeholder="Menu name" required>
                                    </div>
                            </div>




                </div>
            </div>
        </div>



        <div class="col-sm-8">
        <div class="card">

            <div class="card-body">



                <div class="form-group row mb-0">
                    <label class="col-sm-3 col-form-label pb-0">Categories</label>
                    <div class="col-sm-9">
                        <div class="form-group m-checkbox-inline mb-0">
                            <div class="checkbox checkbox-primary">
                                <input id="inline-form-4" type="checkbox">
                                <label class="mb-0" for="inline-form-4">Business</label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="inline-form-5" type="checkbox">
                                <label class="mb-0" for="inline-form-5">Events</label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="inline-form-6" type="checkbox">
                                <label class="mb-0" for="inline-form-6">New & Updates</label>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" > Add to Menu
                                </button>

                            </div>
                        </div>
                    </div>
                </div></div></div>
            <div class="card">

                <div class="card-body">
                <div class="form-group row mb-0">
                    <label class="col-sm-3 col-form-label pb-0">Pages</label>
                    <div class="col-sm-9">
                        <div class="form-group m-checkbox-inline mb-0">
                            <div class="checkbox checkbox-primary">
                                <input id="inline-form-1" type="checkbox">
                                <label class="mb-0" for="inline-form-1">Contact</label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="inline-form-2" type="checkbox">
                                <label class="mb-0" for="inline-form-2">Portfolio</label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="inline-form-3" type="checkbox">
                                <label class="mb-0" for="inline-form-3">Shop</label>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" > Add to Menu
                                </button>

                            </div>
                        </div>
                    </div>
                </div></div></div>
            <div class="card">

                <div class="card-body">
<center>Add Link</center>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="inputEmail3">Title</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="inputEmail3" type="text" name="title" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="inputPassword3">Url</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="inputPassword3" type="text" name="url" placeholder="https://">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="inputPassword3">Icon</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="inputnumber" type="text" name="icon" placeholder="fa fa-user">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="inputPassword3">CSS Class</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="inputnumber" type="text" name="css" placeholder="css">
                    </div>
                </div>


                    <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="inputPassword3">Target</label>

                            <select class="form-control" id="exampleFormControlSelect3" name="target" multiple="">
                                <option value="link">open link directly</option>
                                <option value="tab">open link in new tab</option>

                            </select>
                        </div>


                    <div class="card-footer">
                        <button class="btn btn-primary" > Add to Menu
                        </button>

                    </div>
                </div></div>
            <div class="card-footer">
                <button class="btn btn-primary" > Save
                </button>
                <button class="btn btn-primary pull-right">Save and edit
                </button>
            </div>
            </form>
        </div>
    </div>
    </div>


    <!-- Plugins JS Ends-->
    <!-- Theme js-->


@endsection
