@extends('layouts.app')

@section('content')
	<h3>Upload Photo in Album</h3>
	{!! Form::open(['action' => 'PhotosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	
	{{ Form::text('title', '', ['placeholder' => 'Photo title', 'class' => 'form-control']) }}
	<br>
	{{ Form::textarea('description', '', ['placeholder' => 'Photo Descrption', 'class' => 'form-control']) }}
	{{ Form::hidden('album_id', $album_id) }}
	<br>
	{{ Form::file('photo') }}
	<br>
	{{ Form::submit('submit') }}
	{!! Form::close() !!} 
@endsection