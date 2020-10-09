@extends('layouts.apps')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Custom css</h5>
    </div>
    <form class="form theme-form">
        <div class="card-body">
            <div class="row">
                <div class="col">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label pt-0"></label>
                        <div class="col-sm-9">
                            <div class="form-control-static">
                                Hello !... Write your custom css
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="5" cols="5" placeholder="Default textarea for custom css"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="col-sm-9 offset-sm-3">
                <button class="btn btn-primary" type="submit">Submit</button>
                <input class="btn btn-light" type="reset" value="Cancel">
            </div>
        </div>
    </form>
</div>
@endsection
