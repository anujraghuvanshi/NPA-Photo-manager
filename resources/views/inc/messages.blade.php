@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger">
			{{ $error }}		
		</div>
	@endforeach
@endif

@if(session('success'))
	<div class="alert alert-success">
		{{ sessions('success') }}
	</div>
@endif

@if(session('error'))
	<div class="alert alert-danger">
		{{ sessions('error') }}
	</div>
@endif