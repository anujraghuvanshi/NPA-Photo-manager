@extends('layouts.app')

@section('content')
	
	<div class="row">
		
		<h3>{{ $album->name }}</h3>
		<br>
		<a href="/" class="btn btn-default" role="button">Go back</a>
		<a href="/photos/create/{{ $album->id }}" class="btn btn-primary pull-right" role="button">Add photos in album</a>
		<hr>


		@if(count($album->photos) > 0)

		<?php

			$colCount = count($album->photos);
			$i = 1;
		?>

			<div id="photos">
				<div class="row">
					@foreach($album->photos as $photo)
						@if($i == $colCount)
							<div class="col-md-4  text-center">
								<a href="/photos/{{ $photo->id }}">
									<img class="img-thumbnail" height="50px" src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" alt="{{ $photo->title }}">
								</a>
								<h4>{{ $photo->title }}</h4>
						@else
							<div class="col-md-4  text-center">
								<a href="/photos/{{ $photo->id }}">
									<img class="img-thumbnail"  height="50px" src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" alt="{{ $photo->title }}">
								</a>
								<h4>{{ $photo->title }}</h4>
						@endif
						@if($i % 3 == 0)
							</div></div><div class="row text-center"></div>
						@else
							</div>
						@endif
						<?php $i++; ?>			
					@endforeach
				</div>
			</div>
		@else
			<p>No Photos to display here</p>
		@endif
	</div>	
@endsection