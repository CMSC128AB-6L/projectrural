<!DOCTYPE html>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="js/bootstrap.min.js" rel="stylesheet">
<script src="jquery-2.1.1.js"></script>
<style>
	body {
		margin: 0;
		padding: 0;
	}
	nav {
		width: 105%;
		background: #2591f5;
		min-height: 50px;
		color: white;
	}
	nav img {
		max-height: 48px;
	}
	nav * {
		float: left;
	}

	#sidebar {
		
		height: 95%;
		
			background: grey;
			
			overflow: hidden;
		
	}
	.sidebar-box-lg{
		height: 50px;
		width: 108%;
		background: #2591f5;
		margin-top: 5%;
		font-size: 16pt;
		color: white;
		text-align: center;
		
	}

	.sidebar-box-sm{
		height: 50px;
		width: 100%;
		background: #2591f5;
		margin-top: 5%;
			font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		color: white;
		text-align: left;
		float: left;
		overflow: hidden;
		min-width: 50px;
		
	}


	.sidebar-box-sm div{
				
		font-size: 30px;
		margin: 10px;
		width: 10%;
		float: left;
		
	}

	.sidebar-box-sm:hover{
				
		background-color: white;
		color: #2591f5;
		transition: all 0.5s;
		
	}
	.sidebar-box-sm .text{
				
		font-size: 16px;
		width: 65%;
		
		
	}

	.header{
	background: #2591f5;
	top: 0px;
	left: 0px;
	width: 100%;
	margin: auto;
	padding-top: 10px;
	padding-bottom: 10px;
	height: 75px;
	border-bottom: 10px groove grey;
	
	/*background: url("logo.png") no-repeat left;  */
	background-size: 80px;
    background-position: 30px 3px;

	}
	#content-pane{
		
		
		
		

	}

	.box-lg {
		width: 40%;
		height: 150px;
		background: #2591f5;
		color: white;
		font-size: 30px;
		padding: 5px;
		float: left;
		margin: 30px;
	}

	.subtext {
		
		font-size: 20px;
		
	}

	.button-ribbon{
		background: grey;
		font-size: 15px;
		margin-left: -1%;
		position:absolute;
		padding: 10px;
		bottom:30px;
	}


</style>

@extends('layouts.default')

@section('content')
	<h1> Homeroom Grade </h1>

	<!-- opening the form -->
	{{ Form::open(array('url' => 'students/create', 'method' => 'PUT')) }}
	
	<table border="0" name="table1" class="SampleTables table table-hover">
		<thead>
			<tr><th>Last Name</th><th>First Name</th><th>Grade</th></tr>
		</thead>
		@foreach($students as $stud)
			<tr><td>{{ $stud->LName }} </td><td> {{ $stud->FName }} </td><td>{{Form::number($stud->id, $stud->Homeroom_Grade)}}</td></tr>
		@endforeach
	</table>

	<!-- Save button -->
	<button> Reset </button>
	{{Form::submit('Save')}}
	<!-- Closing the form -->
	{{ Form::close() }}
@stop
