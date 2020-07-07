@extends('Backend.layouts.backend_head')
@section('head_name', 'View Posts')
@section('content')
        <div class="tabbable page-tabs">
            <div class="tab-content">
                <div class="tab-pane active fade in" id="inside">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i> View All Video</h6></div>
                        <div class="datatable">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Post Title</th>
                                        <th>Video Link</th>
                                        <th>Section</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($video_data as $key => $value)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$value->post_title}}</td>
                                        <td>{{$value->video}}</td>
                                        <td>
                                            @if ($value->post_section  == 1) Section 1 @else Section 2 @endif
                                        </td>
                                        <td>
                                            <form method="post" action="{{route('post.update', $value->post_id)}}">
                                                @csrf
                                                @method("PUT")
                                                @if ($value->status == 1)

                                                    <button class="btn btn-success btn-xs">
                                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                                    </button>
                                                @else
                                                    <button class="btn btn-info btn-xs">
                                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                                    </button>
                                                @endif
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tabbable page-tabs">
            <div class="tab-content">
                <div class="tab-pane active fade in" id="inside">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i> View All Image</h6></div>
                        <div class="datatable">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Post Title</th>
                                    <th>Image</th>
                                    <th>Section</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($image_data as $key => $value)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$value->post_title}}</td>
                                        <td>
                                            <img style="height: 50px; width: 90px;" src="{{$value->image}}">
                                        </td>
                                        <td>
                                            @if ($value->post_section  == 1) Section 1 @else Section 2 @endif
                                        </td>
                                        <td>
                                            <form method="post" action="{{route('post.update', $value->post_id)}}">
                                                @csrf
                                                @method("PUT")
                                                @if ($value->status == 1)

                                                    <button class="btn btn-success btn-xs">
                                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                                    </button>
                                                @else
                                                    <button class="btn btn-info btn-xs">
                                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                                    </button>
                                                @endif
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
