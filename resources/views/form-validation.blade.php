<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5.3 - Form Validation</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<h2>Form Validation</h2>
	<form method="POST" action="/form-validation" autocomplete="off">

		@if(count($errors))
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.
				<br/>
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="row">
			<div class="col-md-6">
				<div class="form-group {{ $errors->has('calc') ? 'has-error' : '' }}">
					<label for="calc">kWh:</label>
					<input type="text" id="calc" name="calc" class="form-control" placeholder="Enter a Valid number" value="{{ old('calc') }}">
					<span class="text-danger">{{ $errors->first('calc') }}</span>
				</div>
			</div>
		</div>

		<div class="form-group">
			<button class="btn btn-success">Submit</button>
		</div>

	</form>
</div>

</body>
</html>