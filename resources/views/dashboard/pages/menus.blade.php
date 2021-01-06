@extends('layouts.apps')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-body">
                            <div class="card-header">
                                <h5>Edit Menu
                                    <span class="pull-right" >
                                        <button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button">
                                            <a href="{{url('main')}}" ><span style="color: white">Dashboard
                                                </span>
                                            </a>
                                        </button>
                                    </span>
                                </h5>
                            </div>
                    </div>
                </div>
                    <div class="card">
                            <div class="card-body">
                                <form class="theme-form mega-form" method="post" action="{{route('menus.update',$menu->id)}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="col-form-label">Name *</label>
                                        <input class="form-control" name="name" type="text" value="{{$menu->name}}" placeholder="Menu name" required>
                                    </div>
                                    <button class="btn btn-primary pull-right" name="submit" value="menu_edit">Edit menu</button>
                                </form>
                            </div>
                    </div>

            <div class="card">


                <div class="card-body">
                    <form action="{{route('menus.update',$menu->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group row mb-0">
                            <label class="col-sm-3 col-form-label pb-0">Pages</label>
                            <div class="col-sm-9">
                                <div class="form-group m-checkbox-inline mb-0">
                                    @foreach($pages as $page)

                                        <input type="checkbox"  name="page_id[]" value="{{$page->id}}"> {{$page->title}} <br/>
                                    @endforeach

                                    <div class="card-footer">
                                        <button class="btn btn-primary" name="submit" value="edit_menu_items"> Add to Menu
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div></div>
{{--                <div class="container-fluid">--}}
{{--                    <div class="select2-drpdwn">--}}
{{--                        <div class="row">--}}
{{--                            <!-- Default Textbox start-->--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header">--}}
{{--                                        <h5 class="card-title">Select-2</h5>--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="mb-2">--}}
{{--                                            <div class="col-form-label">Default Placeholder</div>--}}
{{--                                            @foreach($pages_sub as $page)--}}

{{--                                            <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple">--}}
{{--                                                <option value="{{$page->id}}">{{$page->title}}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div></div></div></div></div></div></div>--}}
                <div class="card">
                <div class="card-body">

                    <form action="{{route('menus.update',$menu->id)}}" method="post">

                        @csrf
                        @method('PUT')
                        <div class="form-group row mb-0">
                            <label class="col-sm-12 col-form-label pb-0">Add Submenu</label>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Menu title*</label>
                                    <span class="pull-right" >

                                    </span>
                                    <input class="form-control" name="sub_menu" type="text" value="" placeholder="Menu name" required>
                                </div>
                                <div class="form-group m-checkbox-inline mb-0">
                                    <p><b>Choose the menus that you would like the submenu to have</b></p>
                                    <div class="row">
                                        @foreach($pages_sub as $page)
                                        <div class="col-md-4">
                                            <label>
                                                <input type="checkbox"  name="page_id[]" value="{{$page->id}}"  class="option-custom">
                                                <small>{{$page->title}}</small>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary" name="submit" value="edit_sub_menu"> Add Submenu
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div></div>
            </div>
            <div class="col-sm-5">
                <div class="card-body">
                    <div class="card-header">

                        <h5>{{$menu->name}} pages
                        </h5>
                        @foreach($menu_items as $menu_item )
                            @if($menu_item->menu_level == 3)
                                @continue
                                @endif
                        <form action="{{route('menus.update',$menu_item->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <h6> <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModalmdo" data-whatever="@fat">{{@$menu_item->page->title}}</button><button class="btn float-right" name="submit" value="remove_menu_item" title="remove {{@$menu_item->page->title}} from main menu" ><i class="fa fa-times"></i></button>
                            </h6>
                            <div class="modal fade" id="exampleModalmdo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel2">Add submenu to {{@$menu_item->page->title}}</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label class="col-form-label" for="recipient-name">Submenu title</label>
                                                    <input class="form-control"  name="submenu" type="text" value="Submenu title">
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
                        </form>
                            <br>
                        @endforeach
                    </div>
                </div>

                <div class="card-body">
                    <div class="card-header">

                        <h5>Reorder menu items
                        </h5>
                        <form action="{{route('menus.update',$menu->id)}}" method="post">
                            @csrf
                            @method('PUT')
                        @foreach($menu_items as $menu_item )
                                @if($menu_item->menu_level == 3)
                                    @continue
                                @endif
                                <h6>
                                    <button disabled class="btn btn-sm btn-primary" type="button" >{{@$menu_item->page->title}}
                                    </button>
                                    <span class="float-right">
                                        <input type="text" name="menu_id[]" value="{{$menu_item->id}}" hidden>
                                        <input type="text" class="form-inline form-control-sm" name="menu_item_{{$menu_item->id}}" placeholder="Eg 1 or 2" required/>

                                    </span>
                                </h6>
                        @endforeach

                        <button class="btn btn-primary" name="submit" value="order_menus">Order menu items</button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
            </div>
        </div>





        <div class="col-sm-7">

    </div>


    <div class="modal fade" id="exampleModalgetbootstrap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New message</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="col-form-label" for="recipient-name">Recipient:</label>
                            <input class="form-control" type="text" value="@getbootstrap">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="message-text">Message:</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button">Send message</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Plugins JS Ends-->
    <!-- Theme js-->


@endsection
