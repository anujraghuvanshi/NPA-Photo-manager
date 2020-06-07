@extends('admin.layouts.master')

@section('content')

<div id="content">
	<div class="container background-gray-lighter">
		<div class="row padding-vert-20">
			<div class="headline">
				<center>
					<h2> {{ $photo->title }} </h2>
				</center>
			</div><hr>
			<div class="col-md-1"></div>
			<div class="row">
				<div class="col-md-5">
					<figure>
						<a href="{{asset('storage/photos')}}/{{ $photo->album_id }}/{{ $photo->photo }}" data-lightbox="image-1" data-title={{($photo->description) || "No Description" }}>
							<img class="img-responsive thumbnail-image" alt="{{ $photo->title }}" src="{{asset('storage/photos')}}/{{ $photo->album_id }}/{{ $photo->photo }}" height="300" width="500">
						</a>
					</figure>
				</div>
				<div class="col-md-5">
					<figcaption class="responsive">
					<i><h3>Descriptions:</h3></i>
					<i>***************************************</i>
					@if(!$photo->description)
						<h5><i>No Description</i></h5>
					@else
						<h5>{{ $photo->description }}</h5>
					@endif
					</figcaption>
					<i>------------------------------------------------------------</i>
					{!! Form::open(['route' => ['photos.delete', $photo->id], 'method' => 'DELETE']) !!}

					{{ Form::hidden('_method', 'delete') }}
					<a href="{{ URL::previous() }}" class="btn btn-info">< Back to Gallery</a>
					{{ Form::submit('Delete Photo', ['class' => 'btn btn-danger']) }}
					{!! Form::close() !!}					

				</div>
			</div>
		</div>
	</div>
</div>
@endsection