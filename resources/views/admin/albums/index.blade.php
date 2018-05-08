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
			<a href="{{route('albums.create')}}" class="btn  pull-right">Create Album</a>

			<div class="col-md-1"></div>

				@if(count($albums) > 0)

			<div class="col-md-10">
				<ul class="portfolio-group jumbotron">
					@foreach($albums as $album)
					<li class="portfolio-item col-sm-6 col-xs-6 padding-20">
						<a href="/albums/show/{{ $album->id }}">
							<figure class="animate fadeInLeft">
								<img class="img-responsive thumbnail-image" alt="image" src="{{ asset('storage/album_covers')}}/{{ $album->cover_image }}" height="300" width="500">
								<figcaption class="responsive" >
									<center>
										<h3>{{ $album->name }}</h3>
									</center>
									<span> {{ $album->description }}</span><br><br>
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
</div>
@endsection