@extends('admin.layouts.master')

@section('content')

<div id="content">
	<div class="container background-gray-lighter">
		<div class="row padding-vert-20">
			<div class="headline">
				<center>
					<h3> {{ \Auth::user()->name }}'s Albums Here </h3><br>
				</center>
			</div>
			<hr>

			<div class="col-md-1"></div>

			@if(count($albums) > 0)

			<div class="col-md-10">
				<ul class="portfolio-group jumbotron">
					@foreach($albums as $album)
					<li class="portfolio-item col-sm-6 col-xs-6 padding-20">
						<a href="{{ url('albums/show') }}/{{ $album->id }}">
							<figure class="animate fadeInLeft" style="background-color: lightgrey;">
								<img class="img-responsive thumbnail-image" alt="image" src="{{ asset('storage/album_covers')}}/{{ $album->cover_image }}" height="300" width="500">
								<figcaption class="figcaption responsive">
									<center>
										<h3>{{ $album->name }}</h3>
										<span> {{ $album->description }}</span><br><br>
									</center>
								</figcaption>
							</figure>
						</a>
					</li>
					@endforeach
					<li class="portfolio-item  col-sm-6 col-xs-6 padding-20">
						<a href="{{route('albums.create')}}" class="portfolio-add-image">
							<img alt="add-album" src="{{ asset('img/social_icons/add.png') }}" height="100" width="100">
						</a>
					</li>
				</ul>
			</div>
			
			@else
			<div class="col-md-10">
				<div class="background-gray-lighter">
					<center>
						<h1>Welcome To Our APA Photo-Manager</h1>
						<h3>Here You Can create your albums or photos</h3>
						<p><i>We make sure that it will be private</i></p>
						<a href="{{route('albums.create')}}" class="btn btn-primary">Create Album</a>
					</center>
				</div>
			</div>
			@endif
		</div>
	</div>
</div>
@endsection