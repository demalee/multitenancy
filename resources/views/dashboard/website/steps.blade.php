@extends('layouts.appstep')
@section('content')
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Ends-->
        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Create Website</h5>
                            </div>
                            <div class="card-body">
                                <form class="f1" method="post" action="{{route('websites.store')}}">
                                    @csrf
                                    <div class="f1-steps">
                                        <div class="f1-progress">
                                            <div class="f1-progress-line" data-now-value="16.66"
                                                 data-number-of-steps="3"></div>
                                        </div>
                                        <div class="f1-step active">
                                            <div class="f1-step-icon"><i data-feather="link"></i></div>
                                            <p>Website information</p>
                                        </div>
                                        <div class="f1-step">
                                            <div class="f1-step-icon"><i data-feather="chrome"></i></div>
                                            <p>Themes</p>
                                        </div>
                                        <div class="f1-step">
                                            <div class="f1-step-icon"><i data-feather="bookmark"></i></div>
                                            <p>Menus</p>
                                        </div>
                                    </div>
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="f1-first-name"> Website title</label>
                                            <input class="form-control" id="f1-first-name" type="text"
                                                   name="f1-first-name" placeholder="www.example.com" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="f1-last-name">Description</label>
                                            <textarea class="form-control" placeholder="website description"
                                                      id="exampleFormControlTextarea4" rows="3"
                                                      name="description"></textarea>
                                        </div>
                                        <div class="f1-buttons">
                                            <button class="btn btn-primary btn-next" type="button">Next</button>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-email">Themes</label>
                                            <p>Choose a suitable theme for your website</p>
                                            <div class="row">
                                                @foreach($themes as $theme)
                                                <div class="col-md-3">
                                                    <div class="">
                                                        <input id="{{$theme->id}}" type="radio" name="radio1" value="{{$theme->id}}" required>
                                                        <label for="radio11">
                                                            <img src="{{asset('images/'.$theme->theme_image)}}" style="width: 100%;height:100px"/>
                                                        </label>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="f1-buttons">
                                            <button class="btn btn-primary btn-previous" type="button">Previous</button>
                                            <button class="btn btn-primary btn-next" type="button">Next</button>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="sr-only">Add pages to the Main Menu</label>
                                            <p>Choose menus</p></div>
                                        <div class="form-group row mb-0">
                                            <div class="col-sm-12">
                                                <div class="form-group m-checkbox-inline mb-0">
                                                    @foreach($pages as $page)
                                                        <input type="checkbox"  name="page_id[]" value="{{$page->id}}"> {{$page->title}} <br/>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                        <div class="f1-buttons">
                                        <button class="btn btn-primary btn-next" type="submit">Finish</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>

    </div>
@endsection
