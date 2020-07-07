@extends('Frontend.layouts.head')
@section('main_section')

<!-- Page Content -->
    <div class="container" id="AppHome">
      <div class="row">
        <!-- Section One -->
        <div class="col-lg-8 section-1">
          <div class="row">
              <div class="col-lg-7 section-1-lg">
              	@foreach( $video_data as $key => $value )

                <div class="main_image">
                	@if( $value->post_type == 2 )
                  	<img class="img-fluid rounded" src="{{$value->image}}" alt="Image">
                  	@else
                  	<img class="img-fluid rounded" src="https://img.youtube.com/vi/{{$value->video}}/maxresdefault.jpg" alt="Image">
                        <div class="overlay_image">
                            <a href="https://www.youtube.com/watch?v={{$value->video}}" target="_blank">
                                <img src="{{ asset('frontend_assets/images/playbutton.png') }}" alt="Image" />
                            </a>
                        </div>
                  	@endif
                  	<a href="/post_details/{{ $value->post_id }}">
                  		<p> {{ $value->post_title }} </p>
                  	</a>
                </div>
                @endforeach

              </div>
              <div class="col-lg-5">
                <div class="row">
                	@foreach($video_data as $key => $value)
                  	<div class="col-lg-6 section-1-sm">
                  		<div class="main_image">
                            @if( $value->post_type == 2 )
                                <img class="img-fluid rounded" src="{{$value->image}}" alt="Image">
                            @else
                                <img class="img-fluid rounded" src="https://img.youtube.com/vi/{{$value->video}}/maxresdefault.jpg" alt="Image">
                                <div class="overlay_image">
                                    <a href="https://www.youtube.com/watch?v={{$value->video}}" target="_blank">
                                        <img src="{{ asset('frontend_assets/images/playbutton.png') }}" alt="Image" />
                                    </a>
                                </div>
                            @endif
                            <a href="/post_details/{{ $value->post_id }}">
                                <p> {{ $value->post_title }} </p>
                            </a>
	                  	</div>
                  	</div>
                  	@endforeach
                </div>
              </div>
          </div>
        </div>

        <!-- Section Two -->
        <div class="col-lg-4 section-2">
            <div class="row">
              	<div class="col-lg-12 section-2-lg">
	                @foreach( $image_data as $key => $value )

	                <div class="main_image">
                        @if( $value->post_type == 2 )
                            <img class="img-fluid rounded" src="{{$value->image}}" alt="Image">
                        @else
                            <img class="img-fluid rounded" src="https://img.youtube.com/vi/{{$value->video}}/maxresdefault.jpg" alt="Image">
                            <div class="overlay_image">
                                <a href="https://www.youtube.com/watch?v={{$value->video}}" target="_blank">
                                    <img src="{{ asset('frontend_assets/images/playbutton.png') }}" alt="Image" />
                                </a>
                            </div>
                        @endif
                        <a href="/post_details/{{ $value->post_id }}">
                            <p> {{ $value->post_title }} </p>
                        </a>

	                </div>
	                @endforeach
              	</div>
	            <div class="col-lg-12">
	                <div class="row">
	                  	@foreach($image_data as $key => $value)
	                  	<div class="col-lg-6 section-2-sm">
	                  		<div class="main_image">
                                @if( $value->post_type == 2 )
                                    <img class="img-fluid rounded" src="{{$value->image}}" alt="Image">
                                @else
                                    <img class="img-fluid rounded" src="https://img.youtube.com/vi/{{$value->video}}/maxresdefault.jpg" alt="Image">
                                    <div class="overlay_image">
                                        <a href="https://www.youtube.com/watch?v={{$value->video}}" target="_blank">
                                            <img src="{{ asset('frontend_assets/images/playbutton.png') }}" alt="Image" />
                                        </a>
                                    </div>
                                @endif
                                <a href="/post_details/{{ $value->post_id }}">
                                    <p> {{ $value->post_title }} </p>
                                </a>

		                  	</div>
	                  	</div>
	                  	@endforeach
	                </div>
              	</div>
            </div>
        </div>

      </div>
    </div>

@stop
