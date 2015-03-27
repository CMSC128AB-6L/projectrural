
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

	.login-pane {
		background: #2591f5;
		width: 80%;
		margin:10%;
		height: 300px;
		color: white;
		padding: 3px;
	}

	.login-pane input{
		color: black;
	}
	.subheader {
		background: #2591f5;
		color: white;
		margin-left: -2%;
		font-size: 40px;
		padding-left: 3px;

	}

</style>

<body>
<link href="css/bootstrap.min.css" rel="stylesheet">

<nav class="row header">
	
		<div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
			<img src="logo.png" id="logo"/>	
			<h3>UPRHS Academic Management System</h3>
		</div>
		<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12">
			
			
		</div>
	
</nav>
<div class="row">
	<div  id="sidebar" role="search" class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
		<div class="login-pane">
			<h2> Login Here</h2>
				<div id="login" class="form-inline" style="text-align: left">
			<form method="post" action="nav.php">
				<p> <input type="text" placeholder="Username"> </p>
				<p> <input type="password" placeholder="Password"> </p>
				<p> <input class="btn btn-default" type="submit" value="Log In">
			</form>
			<form method="post" action="signup.html">
				<p> <input class="btn btn-warning" type="submit" size="50" value="Sign Up">
			</form>
		</div>

		</div>

	</div>
	<div id="content-pane" class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
		<div class="content">
			<span class="subheader">ANNOUNCEMENT:</span>
			<p>Marie and others, paki lagay na lang yung mga backend na nagawa nyo. Nasa views lang yung page na ito and pati yung homepage (you may access it sa localhost:8000/home). Yung bootstrap css nasa public na folder. Paki include na lang lahat. Salamats :)</p>
		</h1>
	
	</div>
</div>

</body>