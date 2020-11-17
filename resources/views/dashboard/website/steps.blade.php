@extends('layouts.appstep')
<br><br>
@section('content')
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
{{--@include('layouts.alerts')--}}

            <!-- Container-fluid starts-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                                <form class="f1" method="post" action="{{route('websites.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <div class="f1-steps" id="progress">
                                                <div class="row">
                                                    <div class="f1-progress" id="arrow">
                                                        <div class="f1-progress-line"   data-now-value="18.67"
                                                             data-number-of-steps="4" ></div>
                                                    </div>

                                                    <div class="col 3">
                                                        <div class="f1-step" >
                                                            <div class=" f1-step-icon" id="circles">
                                                                <span id="count">1</span>
                                                            </div>
                                                            <p id="stepdescrie">Website Details</p>
                                                        </div>
                                                    </div>
                                                    <div class="col 3">

                                                        <div class="f1-step">
                                                            <div class="f1-step-icon" id="circles"><span id="count">2</span></div>
                                                            <p id="stepdescibe">Choose template</p>
                                                        </div>
                                                    </div>
                                                    <div class="col 3">

                                                        <div class="f1-step">
                                                            <div class="f1-step-icon" id="circles"><span id="count">3</span></div>
                                                            <p id="stepescribe" >Create Menu</p>
                                                        </div>
                                                    </div>
                                                    <div class="col 3">


                                                        <div class="f1-step">
                                                            <div class="f1-step-icon" id="circles"><span id="count">4</span></div>
                                                            <p id="stepdscribe">Settings</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>

                                    <fieldset>
                                        <div class="container"  id="process1">
                                            <div class="row">


                                                <div class="col-md-12">




                                                    <div class="card"  >
                                                        <div class="card-body" >

                                                                <h4 id="webdetails">Add your website details</h4>
                                                                <p id="describe">You are just a step away from starting your website! Get your
                                                                    website subdomain here.</p>
                                                            <div class="center-card-custom">


                                                                <div class="form-group">

                                                                    <input class="form-control"  id="field" type="text"
                                                                           name="f1-first-name" placeholder="website domain" required="">
                                                                </div>
                                                                <div class="form-group" >

                                                                    <textarea class="form-control" id="textarea"   placeholder="How do you describe your website"
                                                                               rows="3"
                                                                              name="description"></textarea>
                                                                </div>
                                                                <div class="form-group">

                                                                    <button class="btn btn-primary btn-next" id="menubutton">Continue</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                </div>  </div> </div>
                                        </div></fieldset>
                                    <fieldset>
                                        <div class="container"  id="process1">
                                            <div class="row">


                                                <div class="col-md-12">




                                                    <div class="card"  >
                                                        <div class="card-body">
                                        <div class="form-group">
                                            <label class="sr-only" for="f1-email" id="webdetails">Themes</label>
                                           <center> <h3 id="describe" ><b>Choose your template
                                                   </b> </h3></center>
                                            <div class="row">
                                                @foreach($themes as $theme)
                                                <div class="col-md-4" >
                                                    <div class=""  >
                                                        <input id="{{$theme->id}}" type="radio" name="radio1" value="{{$theme->id}}" required>
                                                        <label for="radio" >
                                                            <img src="{{asset('images/'.$theme->theme_image)}}" style="width: 100%;height:100px"/>
                                                          <br>  {{@$theme->name}}
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
                                                        </div></div></div></div></div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="container"  id="process1">
                                            <div class="row">


                                                <div class="col-md-12">




                                                    <div class="card"  >
                                                        <div class="card-body">


                                                                <p id="webdetails">Choose menu links
                                                                    </p>
                                                                <p id="describe">The menu links will be added to the selected website. This
                                                                    can be changed</p>
                                                            <div class="center-card-custom">
                                                            <div class="form-group row mb-0">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group m-checkbox-inline mb-0" id="inactivelink" >
                                                                        @foreach($pages as $page)
                                                                            {{--                                                        <button class="btn btn-primary btn-next" name="page_id[]" type="submit" value="{{$page->id}}">{{$page->title}}</button>--}}
                                                                            <div class="checkbox-custom" id="link">
                                                                                <input type="checkbox" class="float-right"  name="page_id[]" value="{{$page->id}}">
                                                                                {{$page->title}}
                                                                            </div>

                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                            </div><br><br>
                                                            <div class="form-group">

                                                                <button class="btn btn-primary btn-next" type="button" id="menubutton">Continue</button>
                                                            </div>
                                                            </div></div>
                                                    </div>
                                                </div></div></div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-md-2"></div>
                                                <div class="col-md-8">




                                                    <div class="card">
                                                        <div class="card-body" >

                                                                <h4 id="webdetails"><b>Add Settings
                                                                    </b></h4>

                                                                <p id="settingscontent">Add your company brand ,logo and favicon to make your organization unique</p>
                                                            <div class="form-group row mb-0">
                                                                <div class="col-sm-12">
                                                                    <div class="center-card-custom">
                                                                    <div class="form-group m-checkbox-inline mb-0" >
                                                        <!-- Bookmark Start-->

                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-3 col-form-label">Upload favicon</label>
                                                                                            <div class="col-sm-9">
                                                                                                <input class="form-control"  id="field" type="file" name="favicon">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-3 col-form-label">Upload Logo</label>
                                                                                            <div class="col-sm-9">
                                                                                                <input class="form-control"  id="field" type="file" name="logo_name">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-3 col-form-label">Brand Name</label>
                                                                                            <div class="col-sm-9">
                                                                                                <input class="form-control"   id="field" name="brand_name" type="text" placeholder="Brand name">
                                                                                            </div>
                                                                                        </div></div></div>

                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-3 col-form-label pt-0">Brand Color</label>
                                                                                            <div class="col-sm-9">
                                                                                                <input class="form-control"  id="field" type="color" name="brand_color" value="#563d7c">
                                                                                            </div>
                                                                                        </div></div></div>

                                                                              <div class="form-group">

                                                                                        <button class="btn btn-primary">View your Site</button>

                                                                                    </div>
                                                                            </div>




                                                        <!-- Bookmark Ends-->
                                                    </div>
                                                </div>

                                            </div>

                                                            <!-- Container-fluid starts-->


                                                            </div></div></div></div></div></div>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>




@endsection
