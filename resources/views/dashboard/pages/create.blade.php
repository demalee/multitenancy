@extends('layouts.apppages')
@section('content')

            <div class="container-fluid">
                <div class="row">

                    <div class="col-sm-12 col-xl-8">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">

                                        <h5>Page Details<span class="pull-right" ><button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button"><a href="{{route('dashboard.pages')}}" ><span style="color: white">Back</span></a></button>
</span></h5>
                                    </div>
                                    <div class="card-body">
                                        <form class="theme-form mega-form" method="post" action="{{route('pages.store')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="col-form-label">Name</label>
                                                <input class="form-control" name="name" type="text" placeholder="Page title" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea9">Description</label>
                                                <textarea class="form-control" required name="description" id="exampleFormControlTextarea9" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <table>
                                            <tbody>
                                            <tr>
                                                <td>Enable sidebar</td>
                                                <td class="w-50">
                                                    <div class="media-body icon-state switch-outline">
                                                        <label class="switch">
                                                            <input type="checkbox" checked=""><span class="switch-state bg-primary"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><span>This will add sidebar to your website </span></td>
                                            </tr>
                                            </tbody>
                                                </table></div>
                                            <div class="form-group">
                                                <label class="col-form-label">Content</label>
                                                <textarea class="form-control" id="editor1" name="editor1"></textarea>
{{--                                            <textarea class="form-control" required id="editor1" name="editor1" cols="30" rows="10"></textarea>--}}
                                            </div>
{{--                                            <div class="form-group">--}}
{{--                                                <label class="col-sm-3 col-form-label">Upload File</label>--}}
{{--                                                <div class="col-sm-9">--}}
{{--                                                    <input class="form-control" type="file">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <div class="card-footer">
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
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
