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
			<div class="headline">
				<center>
					<h2> {{ $album->name }} </h2>
				</center>
			</div>
			<hr>
			<a href="/" class="btn pull-left" role="button">Go back</a>
			<a href="/photos/create/{{ $album->id }}" class="pull-right" role="button">Add Photos in Albums</a>

			<div class="col-md-1"></div>

			@if(count($album->photos) > 0)

			<div class="col-md-10">
				<ul class="portfolio-group">
					@foreach($album->photos as $photo)
					<li class="portfolio-item col-sm-6 col-xs-6 padding-20">
						<a href="/photos/{{ $photo->id }}">
							<figure class="animate fadeInLeft">
								<img class="img-responsive thumbnail-image" alt="{{ $photo->title }}" src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}">

								<figcaption class="responsive">
									<h3>{{ $photo->title }}</h3>
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
	
	<div id="content-bottom-border" class="container"></div>

	@include('admin.partials.footer') 

</div>
@endsection