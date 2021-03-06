<!docType html>
<html>
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content= "width = device-width, initial-scale= 1.0">
	<title>MyThoughts - Sign Up Form</title>
	<link rel="stylesheet" href= "css/bootstrap.min.css">
	<link rel="stylesheet" href= "css/style.css">
	<script src = "js/library.js"></script>
</head>
<body background="images/bg.jpg">
		<nav class = "navbar navbar-default navbar-static-top no-margin" role= "navigation">
		<div class = "container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-MyThoughts-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
    			</button>
			<a class= "navbar-brand" href="index.php"><img src="images/logo.png"></a>
		</div>
		<div class = "collapse navbar-collapse navbar-right" id="bs-MyThoughts-navbar-collapse-1">
			<ul class = "nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php">About</a></li>
				<li><form class="navbar-form navbar-left" role="search">
        				<div class="form-group">
       					    <input type="text" class="form-control" placeholder="Search">
        				</div>
       					<button type="submit" class="btn btn-default">Search</button>
      				</form>
      			</li>
			</ul>
		</div>
		</div>
	</nav>
	<div class = "container">
		<h2 style = "color: #fff">Please enter your details to create an account.</h2><br><br>
		<div class="form-group">
			<label for="FirstName" style = "color: #fff">First Name</label>
	    	<input class="form-control" id="FirstName" type="text" placeholder="First Name">
    	</div>

    	<div class="form-group">
	    	<label for="LastName" style = "color: #fff">Last Name</label>
	    	<input class="form-control" id="LastName" type="text" placeholder="Last Name">
    	</div>

    	<div class="form-group" style = "color: #fff">
	      <label for="gender">Gender</label>
		      <select class="form-control" id="gender">
			        <option>Male</option>
			        <option>Female</option>
			        <option>Other</option>
		      </select>
   		</div>

    	<div class="form-group">
	    	<label for="UserName" style = "color: #fff">User Name</label>
	    	<input class="form-control" id="UserName" type="text" placeholder="Username">
    	</div>

    	<div class="form-group" style = "color: #fff">
	    	<label for="Email ID">Email ID</label>
	    	<input class="form-control" id="Email ID" type="text" placeholder="@example.com">
    	</div>

    	<div class="form-group" style = "color: #fff">
	    	<label for="Password">Password</label>
	    	<input class="form-control" id="Password" type="password" placeholder="Password">
    	</div>
    	<div class = "container center-block">
    		<button type="button" class="btn btn-success center-block">Create Account</button>
    	</div>
    	<div class = "container center-block">
    		<a class="btn btn-info buttonsize center-block" href="signinform.php" role="button">Sign In here if you already have an account</a>
    	</div>
    </div>
     <?php
     	include "php/library.php";
	?>
    <script src = "js/jQuery.js"></script>
	<script src = "js/bootstrap.min.js"></script>
</body>
