<!docType html>
<html>
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content= "width = device-width, initial-scale= 1.0">
	<title>MyThoughts - A Blog point for You</title>
	<link rel="stylesheet" href= "css/bootstrap.min.css">
	<link rel="stylesheet" href= "css/style.css">
	<script src = "js/jQuery.js"></script>
	<script src = "js/bootstrap.min.js"></script>
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
				<li class="dropdown">
					<a href="#"class= "dropdown-toggle" data-toggle= "dropdown">Log In/Sign Up<b class= "caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="signinform.php">Log In</a></li>
						<li><a href="#">Log In with Facebook</a></li>
						<li><a href="signupform.php">Sing Up</a></li>
					</ul>
				</li>
			</ul>
		</div>
		</div>
	</nav>

	<center><p style = "color: #fff; font-size: 80px">Giving Voice to Ideas</p>
		<h2 style = "color: #fff">Powerful publishing platform, Start telling your story</h2>
		<h3 style = "color: #fff">Millions of bloggers tell their stories on MyThoughts.com.</h3>
		<h4 style = "color: #fff">Join Millions of Blogers Today.</h4>
	</center>

	<div class = "container">
		<div class= "jumbotron jumbotron-align">
			<div class = "container">
				<div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<center><h2>MyThoughts - A Blog point for You</h2></center>
					<p>This website gives you a platform to create your own Blog. Start publishing in seconds. Instantly create the personal blog of your dreams to share your ideas on the web.</p>
					<center><p><a class = "btn btn-primary btn-lg" href= "signupform.php">Get Started</a></p></center>
				</div>
			</div>
		</div>
	</div>

		<div>
			<?php
				// define(ROOT,'')
				include "php/library.php";
			?>
		</div>
</body>
</html>
