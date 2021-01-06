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
@include('layouts.partials.add_content')
@endsection
