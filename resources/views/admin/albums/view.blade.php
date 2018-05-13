@extends('admin.layouts.master')

@section('content')

<div id="content">
	<div class="container background-gray-lighter">
		<div class="row padding-vert-20">
			<a href="{{ route('albums.index') }}" class="btn btn-primary pull-right">Go Back</a>
			<div class="headline">
				<center>
					<h2> {{ $album->name }} </h2>
				</center>
			</div>
			<hr>

			<div class="col-md-1"></div>

			@if(count($album->photos) > 0)

			<div class="col-md-10">
				<ul class="portfolio-group jumbotron">
					@foreach($album->photos as $photo)
					<li class="portfolio-item col-sm-6 col-xs-6 padding-20">
						<a href="{{url('photos')}}/{{ $photo->id }}">
							<figure class="animate fadeInLeft" style="background-color: lightgrey;">
								<img class="img-responsive thumbnail-image" alt="{{ $photo->title }}" src="{{asset('storage/photos')}}/{{ $photo->album_id }}/{{ $photo->photo }}" height="300" width="500">
								<figcaption class="figcaption responsive">
									<center>
										<h3>{{ $photo->title }}</h3>
										<span>{{ $photo->description }}</span>
									</center>
								</figcaption>
								@if (\Auth::user()->role == 'admin')
									<a href="{{ asset(url('albums/share')) }}/{{$photo->id}}" class="btn btn-succes">Share to users</a>
								@endif
								<a class="btn btn-succes" target="_" href="https://www.facebook.com/sharer/sharer.php?u={{asset('storage/photos')}}/{{ $photo->album_id }}/{{ $photo->photo }}">
									Share to Facebook
								</a>
							</figure>
						</a>
					</li>
					@endforeach
					<li class="portfolio-item col-sm-6 col-xs-6 padding-20">
						<a href="{{url('photos/create')}}/{{ $album->id }}">
							<img alt="add-album" src="{{ asset('img/social_icons/add.png') }}" height="50" width="50" margin="20">
						</a>
					</li>
				</ul>
			</div>

			@else
			<div class="col-md-10">
				<div class="background-gray-lighter">
					<center>
						<h1>Add Photos To Your Album</h1>
						<p><i>These photos are public protected.</i></p>
						<a href="{{url('photos/create')}}/{{ $album->id }}" class="btn btn-primary">Add Photos in Albums</a>
						<a href="{{ URL::previous() }}" class="btn btn-default">Go Back</a>
					</center>
				</div>
			</div>
			@endif
		</div>
	</div>
</div>
@endsection