
@extends('layouts.apps')
@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12 col-xl-8">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">

                                <h5>Create Menu<span class="pull-right" ><button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button"><a href="{{url('main')}}" ><span style="color: white">Dashboard</span></a></button>
</span></h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form mega-form" method="post" action="{{route('menus.store')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-form-label">Name</label>
                                        <input class="form-control" name="name" type="text" placeholder="Menu name" required>
                                    </div>

                                    <button class="btn btn-primary pull-right">Save
                                    </button>
                                </form>
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
