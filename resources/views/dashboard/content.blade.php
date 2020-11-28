@extends('layouts.apps')
@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Content for {{@$widget->name}}
                        </h5>
                        <span class="pull-right" >
                            <button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button" data-toggle="modal" data-target="#exampleModalmdo" data-whatever="@fat"><span style="color: white">Add content to Widgets</span></button>
</span>

                    </div>
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Widget type</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contents as $content)
                            <tr>
                                <th scope="row">{{@$content->id}}</th>
                                <td>{{@$content->widget->name}}</td>
                                <td>{{@$content->title}}</td>
                                <td>{{@$content->description}}</td>
                                <td><img src="{{url('/images/'.@$content->content_image)}}" alt="" style="height: 30px; width: 30px"></td>
                                <td>
                                    <form action="{{route('widgets.destroy',$content->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn" name="submit" value="delete_content" ><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div></div></div>
    <div class="modal fade" id="exampleModalmdo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Add {{@$widget->name}}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('widgets.update',$widget->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="col-form-label" for="title">Widget title</label>
                            <input class="form-control"  name="title" type="text" value="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="file"> Upload image</label>
                            <input class="form-control" type="file" name="content_file">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="recipient-name">Widget Description</label>
                            <textarea class="form-control"  name="description" type="text" rows="3" value=""></textarea>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="title">Source Link</label>
                            <input class="form-control"  name="source_url" type="url" value="">
                        </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" name="submit" value="widget_content">Add</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>

@endsection
