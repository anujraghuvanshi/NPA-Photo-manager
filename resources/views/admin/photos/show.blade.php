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
			<a href="/albums" class="btn pull-left position-absolute" role="button"> < Go back</a>
			<div class="row margin-vert-30">
				<div class="col-md-6 col-md-offset-3">

					<div class="portfolio-group">
						<figure class="animate fadeInLeft">
							<img class="img-responsive thumbnail-image" alt="{{ $photo->title }}" src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}">

							<figcaption class="responsive">
								<center>
									<h3>{{ $photo->title }}</h3>
								</center>
								<span>{{ $photo->description }}</span>
							</figcaption>
						</figure>
						{!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST']) !!}

						{{ Form::hidden('_method', 'delete') }}
						{{ Form::submit('delete Photo', ['class' => 'btn btn-danger pull-right']) }}

						{!! Form::close() !!}
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="content-bottom-border" class="container"></div>

</div>
@endsection