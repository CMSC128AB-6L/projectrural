<!DOCTYPE html>
<html>
	<head>
		<title> {{$title}} </title>
	</head>

	<body>
		<!-- Printing a message if the edit is succesfull  -->
		@if(Session::has('message'))
			<div class="alert alert-success">
				{{ Session::get('message') }}
			</div>
		@else
			<div class="alert alert-error">
			    @foreach ($errors->all() as $error)
					{{ $error }}<br>        
			    @endforeach
			</div>
		@endif

		<div class="alert alert-warning">
			{{ Session::get('warning') }}
		</div>

		@yield('content')
	</body>

</html>
