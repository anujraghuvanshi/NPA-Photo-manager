@extends('layouts.app')

@section('content')

	@if(count($albums) > 0)

	<?php

		$colCount = count($albums);
		$i = 1;
	?>

		<div id="albums">
			<div class="row">
				@foreach($albums as $album)
					@if($i == $colCount)
						<div class="col-md-4  text-center">
							<a href="/albums/show/{{ $album->id }}">
								<img class="img-thumbnail" height="200px" src="storage/album_covers/{{ $album->cover_image }}" alt="{{ $album->name }}">
							</a>
							<h4>{{ $album->name }}</h4>
					@else
						<div class="col-md-4  text-center">
							<a href="/albums/show/{{ $album->id }}">
								<img class="img-thumbnail"  height="200px" src="storage/album_covers/{{ $album->cover_image }}" alt="{{ $album->name }}">
							</a>
							<h4>{{ $album->name }}</h4>
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
		<p>No albums to display here</p>
	@endif
@endsection