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
