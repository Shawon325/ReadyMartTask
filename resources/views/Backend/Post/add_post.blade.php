@extends('Backend.layouts.backend_head')
@section('head_name', 'Add Posts')
@section('content')
    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="panel panel-default">
            <div class="panel-heading"><h6 class="panel-title"><i class="icon-bug"></i> ADD POST</h6></div>
            <div class="panel-body">

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Post Title:</label>
                            <input type="text" class="form-control" name="post_title" placeholder="John Doe"
                                   value="{{old('post_title')}}">
                            @if($errors->first('post_title'))
                                <label for="post_title" class="error">{{$errors->first('post_title')}}</label>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Post Type:</label>
                            <select class="select-full" name="post_type" id="post_type">
                                <option value="" selected disabled>Select One</option>
                                <option @if(old('post_type') == 1 ) selected @endif value="1">Video</option>
                                <option @if(old('post_type') == 2 ) selected @endif  value="2">Image</option>
                            </select>
                            @if($errors->first('post_type'))
                                <label for="post_type" class="error">{{$errors->first('post_type')}}</label>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group" id="image" style="@if(!$errors->first('image')) display: none @endif">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Image:</label>
                            <input type="file" class="styled form-control" name="image" id="report-screenshot"
                                   value="{{old('image')}}">
                            @if($errors->first('image'))
                                <label for="image" class="error">{{$errors->first('image')}}</label>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group" id="video" style="@if(!$errors->first('video')) display: none @endif">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Video:</label>
                            <input type="text" class="styled form-control" name="video" value="{{old('video')}}">
                            @if($errors->first('video'))
                                <label for="video" class="error">{{$errors->first('video')}}</label>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Post Section:</label>
                            <select class="select-full" name="post_section">
                                <option value="" hidden>Select One</option>
                                <option @if(old('post_section') == 1 ) selected @endif value="1">Section 1</option>
                                <option @if(old('post_section') == 2 ) selected @endif value="2">Section 2</option>
                            </select>
                            @if($errors->first('post_section'))
                                <label for="post_section" class="error">{{$errors->first('post_section')}}</label>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <textarea rows="5" cols="5" placeholder="If you want to add any info, do it here."
                              name="description" class="elastic form-control">{{ old('description') }}</textarea>
                    @if($errors->first('description'))
                        <label for="description" class="error">{{$errors->first('description')}}</label>
                    @endif
                </div>

                <div class="form-actions text-right">
                    <input type="reset" value="Cancel" class="btn btn-danger">
                    <input type="submit" value="Submit report" class="btn btn-primary">
                </div>

            </div>
        </div>
    </form>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on("change", "#post_type", function () {
                var data = $(this).val();
                if (data == 1) {
                    $("#video").show();
                    $("#image").hide();
                } else {
                    $("#image").show();
                    $("#video").hide();
                }
            })
        })
    </script>
@endsection
