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
			<div class="row margin-vert-30">
				<div class="col-md-10">
					<h2 class="text-center">{{ $photo->title }}</h2><hr>
					<p class="text-center">{{ $photo->description }}</p>
					{!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST']) !!}

					{{ Form::hidden('_method', 'delete') }}
					{{ Form::submit('delete Photo', ['class' => 'btn btn-danger pull-right']) }}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

	<div id="content-bottom-border" class="container"></div>

	@include('admin.partials.footer') 

</div>
@endsection