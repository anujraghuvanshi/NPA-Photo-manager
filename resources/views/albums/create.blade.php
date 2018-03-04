@extends('layouts.app')

@section('content')
	<h3>Create album</h3>
	{!! Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	
	{{ Form::text('name', '', ['placeholder' => 'Album Name', 'class' => 'form-control']) }}
	<br>
	{{ Form::textarea('description', '', ['placeholder' => 'Album Descrption', 'class' => 'form-control']) }}
	<br>
	{{ Form::file('cover_image') }}
	<br>
	{{ Form::submit('submit') }}
	{!! Form::close() !!} 
@endsection