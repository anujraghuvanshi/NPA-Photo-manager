@extends('admin.layouts.master')

@section('content')

@include('admin.partials.social-links')

<div id="pre-header" class="container" style="height:20px"></div>

@include('admin.partials.header')

@include('admin.partials.nav-bar')

<div id="post_header" class="container" style="height:10px"></div>
<div id="content-top-border" class="container"></div>
<div id="content">


	<div class="container background-gray-lighter">
		<div class="row padding-vert-20">

			<h3><b><a href="{{route('albums.create')}}" class="btn  pull-right">Create Album</b></a></h3>
			<h2><i><u>{{ \Auth::user()->name }}</u></i></h2><br>
			<h3>Albums: </h3>
			<div class="col-md-1"></div>

				@if(count($albums) > 0)

			<div class="col-md-10">
				<ul class="portfolio-group jumbotron">
					@foreach($albums as $album)
					<li class="portfolio-item col-sm-6 col-xs-6 padding-20">
						<a href="">
							<figure class="animate fadeInLeft">
								<img class="img-responsive" alt="image" src="{{ asset('storage/album_covers')}}/{{ $album->cover_image }}" height="300" width="500">
								<figcaption class="responsive" >
									<h3>{{ $album->name }}</h3>
									<span>{{ $album->description }}</span><br><br>
									<span>{{ $album->user_id }}</span>
									<div class="btn-group">
										<button type="button"  class="btn btn-md btn-info">Read More</button>
										<button type="button" class="btn btn-md btn-success">Update Album</button>
									</div>
								</figcaption>
							</figure>
						</a>
					</li>
					@endforeach
				</ul>
			</div>
			@else
			<div class="col-md-10">
				<div class="background-gray-lighter">
					<center>
						<h1>No Album Found</h1>
					</center>
				</div>
			</div>
			@endif
		</div>
	</div>

	<div id="content-bottom-border" class="container"></div>

	@include('admin.partials.footer') 

</div>
@endsection