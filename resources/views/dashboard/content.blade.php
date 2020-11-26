@extends('layouts.apps')
@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Widgets


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
                                <th scope="col">Title</th>
                                <th scope="col">Image</th>
                                <th scope="col" >Description</th>

                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <th scope="row">1</th>
                                <td>News</td>
                                <td>Image </td>
                                <td>
Testing
                                </td>


                            </tr>




                            </tbody>
                        </table>
                    </div>
                </div>
            </div></div></div>
    <div class="modal fade" id="exampleModalmdo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Add Widget</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="col-form-label" for="recipient-name">Widget title</label>
                            <input class="form-control"  name="submenu" type="text" value="Submenu title">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="file"> Upload image</label>
                            <input class="form-control" type="file" name="widget_file">
                        </div> <div class="form-group">
                            <label class="col-form-label" for="recipient-name">Widget Description</label>
                            <textarea class="form-control"  name="description" type="text" rows="3" value="Description"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button">Add</button>
                </div>
            </div>
        </div>
    </div>

@endsection
