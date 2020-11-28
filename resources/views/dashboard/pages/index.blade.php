@extends('layouts.apps')
@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Menus


                        </h5>
                        <span class="pull-right" ><button class="btn btn-pill btn-primary btn-air-secondary btn-sm" type="button"><a href="{{url('dashboard/pages/create')}}" ><span style="color: white">Create</span></a></button>
</span>

                    </div>
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Link</th>
                                <th scope="col">Widgets</th>
                                <th scope="col">View</th>
                                <th scope="col" >Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @php $counter=1 @endphp
                            @foreach($pages as $page)
                            <tr>
                                <th scope="row">{{$counter}}</th>
                                <td>{{$page->title}}</td>
                                <td>{{\Carbon\Carbon::parse($page->created_at)}}</td>
                                <td>
                                    <a href="{{url($page->slug)}}">{{url($page->slug)}}</a>
                                </td>
                                <td>
                                    <a class="btn btn-pill btn-primary btn-air-secondary btn-sm" href="{{route('dashboard.widget_pages',$page->id)}}">Edit Page Widgets</a>
                                </td>
                                <td>
                                    <a class="btn btn-pill btn-primary btn-air-secondary btn-sm" href="{{route('pages.edit',$page->id)}}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('pages.destroy', $page->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-pill btn-danger btn-air-danger btn-sm">Delete</button>
                                    </form>

                                </td>
                            </tr>
                            @php $counter++ @endphp
                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div></div></div>
@endsection
