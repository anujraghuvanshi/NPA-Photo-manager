@extends('admin.layouts.master')

@section('content')

<div id="content">
	<div class="container background-gray-lighter">
		<div class="row padding-vert-20">
			<div class="headline">
				<center>
					<h2> {{ $album->name }} </h2>
				</center>
			</div>
			<hr>
			<a href="/" class="btn pull-left" role="button">Go back</a>
			<a href="{{url('photos/create')}}/{{ $album->id }}" class="pull-right" role="button">Add Photos in Albums</a>

			<div class="col-md-1"></div>

			@if(count($album->photos) > 0)

			<div class="col-md-10">
				<ul class="portfolio-group">
					@foreach($album->photos as $photo)
					<li class="portfolio-item col-sm-6 col-xs-6 padding-20">
						<a href="{{url('photos')}}/{{ $photo->id }}">
							<figure class="animate fadeInLeft">
								<img class="img-responsive thumbnail-image" alt="{{ $photo->title }}" src="{{asset('storage/photos')}}/{{ $photo->album_id }}/{{ $photo->photo }}">

								<figcaption class="responsive">
									<center>
										<h3>{{ $photo->title }}</h3>
									</center>
									<span>{{ $photo->description }}</span>
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
						<h1>No Photos to display here</h1>
					</center>
				</div>
			</div>
			@endif
		</div>
	</div>
</div>
@endsection