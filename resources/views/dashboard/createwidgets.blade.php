@extends('layouts.apps')
@section('content')          <!-- Page Sidebar Ends-->
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-b-0">Activate widgets
                    </h5>
                    <br>
                    <h6>Add widgets to make your website more ascetic and more
                        user friendly</h6>
                </div>
                <form class="form theme-form" method="post" action="{{route('widgets.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group form-row">
                            <label class="col-sm-12 col-form-label">Page Name</label>
                            <div class="col-sm-9">
                                <select name="page_id" id="page_id" class="form-control" required="">
                                    <option value="">Select page...</option>
                                    @foreach(@$pages as $page)
                                    <option value="{{@$page->id}}">{{@$page->title}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row icon-lists feather-icons">

                            <label for="" class="col-sm-12"> <h6>Add widgets to the page</h6></label>
                            @foreach($widgets as $widget)
                            <div class="col-12 col-sm-6 col-xl-4">
                                <div class="media">
                                    <div class="form-group m-checkbox-inline mb-0">

                                        <div class="media-body align-self-center">
                                            <label for="">
                                                <input type="checkbox"  name="widget_item[]" value="{{$widget->id}}"><i data-feather="activity"></i>{{$widget->name}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>


                        </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary" name="submit" value="activate_widgets">Activate Widgets</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-xl-12 xl-100">
            <div class="card">
                <div class="card-header">
                    <h5>Guideline on the type of widgets to appear on each page</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true">Home</a></li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">About</a></li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-service" role="tab" aria-controls="top-service" aria-selected="false">services</a></li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-events" role="tab" aria-controls="top-events" aria-selected="false">Events</a></li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-blog" role="tab" aria-controls="top-blog" aria-selected="false">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-gallery" role="tab" aria-controls="top-gallery" aria-selected="false">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-volunteer" role="tab" aria-controls="top-volunteer" aria-selected="false">Volunteer</a></li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-campaign" role="tab" aria-controls="top-campaign" aria-selected="false">Campaign</a></li>

                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false">Contact</a></li>
                    </ul>
                    <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
<ol start="1">
    <li>Slider</li>
    <li>Banner</li>
    <li>Info</li>
    <li>Department</li>
    <li>Events</li>
    <li>Info</li>
    <li>News</li>
    <li>Post</li>
    <li>Authority</li>
    <li>Projects</li>


</ol>
                        </div>
                        <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                            <ol start="1">
                                <li>Bread Crumbs</li>
                                <li>Info</li>
                                <li>Department</li>
                                <li>Info</li>
                                <li>News</li>
                                <li>Post</li>
                                <li>Projects</li>

                            </ol>
                        </div>
                        <div class="tab-pane fade" id="top-service" role="tabpanel" aria-labelledby="service-top-tab">
                            <ol start="1">
                                <li>Bread Crumbs</li>
                                <li>Info</li>
                                <li>Department</li>
                                <li>Info</li>
                                <li>News</li>
                                <li>Post</li>
                                <li>Projects</li>

                            </ol>
                        </div>
                        <div class="tab-pane fade" id="top-events" role="tabpanel" aria-labelledby="events-top-tab">
                            <ol start="1">
                                <li>Bread Crumbs</li>
                                <li>Info</li>
                                <li>Department</li>
                                <li>Events</li>
                                <li>News</li>
                                <li>Projects</li>

                            </ol>
                        </div>
                        <div class="tab-pane fade" id="top-blog" role="tabpanel" aria-labelledby="blog-top-tab">
                            <ol start="1">
                                <li>Bread Crumbs</li>
                                <li>Info</li>
                                <li>Department</li>
                                <li>Events</li>
                                <li>News</li>
                                <li>Projects</li>

                            </ol>
                        </div>
                        <div class="tab-pane fade" id="top-volunteer" role="tabpanel" aria-labelledby="volunteer-top-tab">
                            <ol start="1">
                                <li>Bread Crumbs</li>

                                <li>Events</li>
                                <li>News</li>
                                <li>post</li>

                            </ol>
                        </div>
                        <div class="tab-pane fade" id="top-gallery" role="tabpanel" aria-labelledby="gallery-top-tab">
                            <ol start="1">
                                <li>Bread Crumbs</li>
                                <li>Gallery</li>


                            </ol>
                        </div>
                        <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                            <ol start="1">
                                <li>Leave it blank,just activate the page</li>


                            </ol>
                        </div>

                        <div class="tab-pane fade" id="top-campaign" role="tabpanel" aria-labelledby="campaign-top-tab">
                            <ol start="1">
                                <li>Bread Crumbs</li>
                                <li>Info</li>
                                <li>Department</li>
                                <li>Events</li>
                                <li>News</li>
                                <li>Projects</li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="icon-hover-bottom p-fixed fa-fa-icon-show-div opecity-0">
    <div class="container-fluid">
        <div class="row">
            <div class="icon-popup">
                <div class="close-icon"><i class="icofont icofont-close"></i></div>
                <div class="icon-first"><i id="icon_main"></i></div>
                <div class="icon-class">
                    <label class="icon-title">data-feather</label><span id="fclass1"></span>
                </div>
                <div class="icon-last icon-last">
                    <label class="icon-title">Markup</label>
                    <div class="form-inline">
                        <div class="form-group">
                            <input class="inp-val form-control m-r-10" id="input_copy" type="text" value="" readonly="readonly">
                            <button class="btn btn-primary notification" onclick="myFunction()">Copy text</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Container-fluid Ends-->

<!-- footer start-->
@endsection
