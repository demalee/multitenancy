@extends('layouts.builder')
@section('content')
<br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">


                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Page Details</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form mega-form" method="post" action="{{route('pages.update',$page->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    <div class="form-group">
                                        <label class="col-form-label">Name</label>
                                        <input class="form-control" name="name" type="text" placeholder="Page title" required  value="{{@$page->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea9">Description</label>
                                        <textarea class="form-control" required name="description" id="exampleFormControlTextarea9" rows="3">{{@$page->page_description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Content</label>
                                        <textarea class="form-control" required id="editor" name="editor1" cols="30" rows="10">{{{@$page->content}}}</textarea>
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

    <!-- Plugins JS Ends-->
    <!-- Theme js-->

@endsection