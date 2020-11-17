
@extends('layouts.apps')
@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-8">

                <div class="card">

                    <div class="card-body">
                        <div class="card-header">

                            <h5>Submenu
                                <span class="pull-right" >
                                        <button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button">
                                            <a href="{{url('main')}}" ><span style="color: white">Dashboard
                                                </span>
                                            </a>
                                        </button>
                                    </span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form class="theme-form mega-form" method="post" action="">

                            <div class="form-group">
                                <label class="col-form-label">Name *</label>
                                <input class="form-control" name="name" type="text" value="" placeholder="Menu name" required>
                            </div>
                            <button class="btn btn-primary pull-right" name="submit" value="menu_edit">Edit menu</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <div class="col-sm-8">
        {{--        <div class="card">--}}

        {{--            <div class="card-body">--}}



        {{--                <div class="form-group row mb-0">--}}
        {{--                    <label class="col-sm-3 col-form-label pb-0">Categories</label>--}}
        {{--                    <div class="col-sm-9">--}}
        {{--                        <div class="form-group m-checkbox-inline mb-0">--}}
        {{--                            <div class="checkbox checkbox-primary">--}}
        {{--                                <input id="inline-form-4" type="checkbox">--}}
        {{--                                <label class="mb-0" for="inline-form-4">Business</label>--}}
        {{--                            </div>--}}
        {{--                            <div class="checkbox checkbox-primary">--}}
        {{--                                <input id="inline-form-5" type="checkbox">--}}
        {{--                                <label class="mb-0" for="inline-form-5">Events</label>--}}
        {{--                            </div>--}}
        {{--                            <div class="checkbox checkbox-primary">--}}
        {{--                                <input id="inline-form-6" type="checkbox">--}}
        {{--                                <label class="mb-0" for="inline-form-6">New & Updates</label>--}}
        {{--                            </div>--}}
        {{--                            <div class="card-footer">--}}
        {{--                                <button class="btn btn-primary" > Add to Menu--}}
        {{--                                </button>--}}

        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="card">

            <div class="card-body">
                <form action="{{route('menus.update')}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group row mb-0">
                        <label class="col-sm-3 col-form-label pb-0">Pages</label>
                        <div class="col-sm-9">
                            <div class="form-group m-checkbox-inline mb-0">

                                    <input type="checkbox"  name="page_id[]" value="">  <br/>

                                <div class="card-footer">
                                    <button class="btn btn-primary" name="submit" value="edit_menu_items"> Add to Menu
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
