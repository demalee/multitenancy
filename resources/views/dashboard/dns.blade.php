@extends('layouts.apps')
@section('content')

    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i class="f-16 fa fa-home"></i></a></li>
                        <li class="breadcrumb-item">Change DNS</li>
                        <li class="breadcrumb-item">DNS Management</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            @if($website->status_active == 0)
                <div class="col-sm-8">

                    <div class="card">
                        <div class="card-header">
                            <h5>DNS Management
                            </h5>
                            <h6></h6>
                        </div>
                        <form class="form theme-form" method="post" action="#" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="row">
                                    <div class="col text-center">
                                        {{--                                    <div class="form-group row">--}}
                                        {{--                                        <div class="col-sm-9">--}}

                                        {{--                                        <label>Initial Name Server</label>--}}
                                        {{--                                            <input class="form-control" name="brand_name" type="text" placeholder="www.test.com">--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="form-group row">--}}
                                        {{--                                        <div class="col-sm-9">--}}

                                        {{--                                        <label>New Name Server</label>--}}
                                        {{--                                            <input class="form-control" name="brand_name" type="text" placeholder=" www.test2.com">--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                        <div>
                                            <br>
                                            <br>
                                            <span class="fa fa-5x fa-times" style="color: red"></span>
                                            <br>
                                            <br>
                                            <h3>Website is inactive,Would you like to activate it? </h3>
                                            <br>
                                            <br>
                                        </div>
                                        <button class="btn btn-primary" >Activate</button>
                                    </div></div>

                            </div>
                            {{--                        <div class="card-footer">--}}
                            {{--                            --}}
                            {{--                        </div>--}}
                        </form>
                    </div>
                </div>

            @else

                <div class="col-sm-8">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5>DNS Management
                            </h5>
                            <h6></h6>
                        </div>
                        <div class="card-body">

                            <br>
                            <br>
                            <span class="fa fa-5x fa-check" style="color: green"></span>
                            <br>
                            <br>
                            <h3>Website is Active!!! </h3>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            @endif
                <div class="col-sm-4">
                    <div class="browse-articles browse-bottom">
                        <h6><span><i data-feather=""></i> <span class="badge badge-primary "><u>How to Map an External domain</u></span></span></h6>
                        <ol start="1">
                            <li><span><i data-feather=""></i></span><span>Login to your domain control panel  </span></li>
                            <li><span><i data-feather=""></i></span><span>Find the domain you want to map and got to DNS settings page</span></li>
                            <li><span><i data-feather=""></i></span><span>If you want to point the www subdomain to your website (eg www.mydomain.com),add CNAME record,setting the host to www amd pointing it to eg https://multisite.berrycom.co.ke/</span></li>
                            <li><span><i data-feather=""></i></span><span>If you want to point the naked domain to your website (for example mydomain.com),add A record,setting the host to '@' amd pointing to </span></li>
                            <li><span><i data-feather=""></i></span><span>Click the 'Test Mapping' button to check if the DNS is setup correctly.DNS changes can take anything from 2 minutes to a few hours </span></li>
                            <li><span><i data-feather=""></i></span><span>If the test is ok,click the 'map Domain' button to complete the process </span></li>
<br>
                            <p><a href="https://www.name.com/support/articles/360051188773-Mapping-a-domain-name-to-your-site-v-v-" target="_blank" ><span><i data-feather="arrow-right"></i></span><span>Link to the instructions</span></a></p>
                        </ol>
                    </div>
                </div>
        </div>

    </div>

@endsection
