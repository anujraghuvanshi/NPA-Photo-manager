@extends('layouts.app')

@section('content')
	
	<div class="row">
		<h3>{{ $photo->title }}</h3>
		<p>{{ $photo->description }}</p>
		<a href="/albums/show/{{ $photo->album_id }}" class="btn btn-default"> Back to gallery</a>
		<hr>
		<img src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" alt="photo" height="400px" >

		<br>
		<br>

		{!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST']) !!}

		{{ Form::hidden('_method', 'delete') }}
		{{ Form::submit('delete Photo', ['class' => 'btn btn-danger']) }}  <small>{{ $photo->size }} bytes</small>

		{!! Form::close() !!}

		<hr>

	</div>
@endsection