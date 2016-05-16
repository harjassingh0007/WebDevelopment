<!docType html>
<html>
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content= "width = device-width, initial-scale= 1.0">
	<title>MyThoughts - A Blog point for You</title>
	<link rel="stylesheet" href= "css/bootstrap.min.css">
	<link rel="stylesheet" href= "css/style.css">
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
	<center><div class= "jumbotron jumbotron-align">
		<div class = "container">
			<div class="form-group col-xs-6">
		    	<label for="UserName">User Name or Email ID</label>
		    	<input class="form-control" id="UserName" type="text">
    		</div>
    	<!-- </div>
    	<div class = "container"> -->
    		<div class="form-group col-xs-6">
		    	<label for="Password">Password</label>
		    	<input class="form-control" id="Password" type="password">
    		</div>
    		<p><center><a class = "btn btn-primary " href= "BlogProfile.php">Log In</a></center></p>
		</div>
		<div class = "container">
			<a href="#" style = "color: #fff">Sign in with Facebook</a>
		</div>
	</div></center>
	<!-- <footer class= "site-footer"> 
			<div class = "pull-right">Created and Maintained by HARJAS SINGH</div>
	</footer> -->
	<script src = "js/jQuery.js"></script>
	<script src = "js/bootstrap.min.js"></script>
</body>
</html>