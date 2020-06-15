@extends('admin.layouts.master')

@section('content')

<div id="content">
	<div class="container background-white">
		<div class="row margin-vert-30">
			<div class="col-md-6 col-md-offset-3">
				<div class="headline">
					<center><h2>Add More Pictures</h2></center>
				</div>
				{!! Form::open(['route' => 'photos.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
				<div class="row margin-bottom-20">
				<label>Title</label>
					<div class="col-md-offset-0">
						{{ Form::text('title', '', ['placeholder' => 'Photo Title', 'class' => 'form-control']) }}
					</div>
				</div>
				<div class="row margin-bottom-20">
				<label>About</label>
					<div class="col-md-offset-0">
						{{ Form::textarea('description', '', ['placeholder' => 'About Photo', 'class' => 'form-control']) }}
					</div>
				</div>
				<div class="row margin-bottom-20">
					<div class="col-md-offset-0">
						{{ Form::hidden('album_id', $album_id) }}
					</div>
				</div>
				<div class="row margin-bottom-20">
				<label>Select Picture</label>
					<div class="col-md-offset-0">
						{{ Form::file('photo') }}
					</div>
				</div>
				<div class="form-group row mb-0">
					{{ Form::submit('Add Photo',['class' => 'btn btn-primary']) }}
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection