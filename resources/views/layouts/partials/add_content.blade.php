<div class="modal fade" id="exampleModalmdo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Add {{@$widget->name}}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('widgets.update',$widget->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="title">Widget title</label>
                                <input class="form-control"  name="title" type="text" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="file"> Upload image</label>
                                <input class="form-control" type="file" name="content_file">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="title">Source Link</label>
                                <input class="form-control"  name="source_url" type="url" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="title">Date</label>
                                <input class="form-control"  name="source_date" type="date" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="title">Start time</label>
                                <input class="form-control"  name="start_time" type="time" value="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="title">End time</label>
                                <input class="form-control"  name="end_time" type="time" value="">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-form-label" for="recipient-name">Widget Description</label>
                                <textarea class="form-control"  name="description" type="text" rows="3" value=""></textarea>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="title">Background color</label>
                                <input class="form-control"  name="bg_color" type="color" value="#fffff">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="title">Text color</label>
                                <input class="form-control"  name="font_color" type="color" value="#111">
                            </div>
                        </div>
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
