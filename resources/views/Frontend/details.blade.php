@extends('Frontend.layouts.head')
@section('main_section')
<!-- Page Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-2"></div>
	  	<!-- Post Content Column -->
	  	<div class="col-lg-8 page_details_section">

		    <!-- Title -->
		    <h1 class="mt-4">{{ $details->post_title }}</h1>

		    <!-- Preview Image -->
		    @if( $details->post_type == 2 )
			<img class="img-fluid rounded" src="{{ asset($details->image) }} " alt="Image">
          	@else
          	<div class="main_image">
	    		<img class="img-fluid rounded" src="https://img.youtube.com/vi/{{ $details->video }}/maxresdefault.jpg" alt="Image">
	    		<div class="overlay_image">
	            	<a href="https://www.youtube.com/watch?v={{ $details->video }}" target="_blank">
	              		<img src="{{ asset('frontend_assets/images/playbutton.png') }}" alt="Image" />
	              	</a>
	          	</div>
          	</div>
          	@endif
		    <hr>

		    <!-- Post Details -->
		    <p> {{ $details->description }} </p>
		    <hr>

		    <div class="row">
		    	<div class="col-lg-6"><h4 class="mt-1">Share Now</h4></div>
		    	<div class="col-lg-6">
		    		<ul class="share_now">
				    	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				    	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				    	<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				    	<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				    </ul>
		    	</div>
		    </div>
	  	</div>
	</div>
</div>
@stop
