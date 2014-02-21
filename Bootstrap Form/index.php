<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="boot/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="boot/jquery.js"></script>
  <script src="boot/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</head>
<body>
	<div id="main">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Brand</a>
			<form class="navbar-form navbar-right" role="search">
        		<div class="form-group">
          			<input type="email" class="form-control" placeholder="Enter email" required>
          			<input type="password" class="form-control" placeholder="Password">
        		</div>
        		<button type="submit" class="btn btn-primary">Submit</button>
      		</form>
      	</div>
    </nav>

    
    <div id="error">
	</div>

    <div id="regform">
    <form role="form">
        		<div class="form-group">
        			<label for="name">Your Name</label>
          			<input type="text" id="name" class="form-control" placeholder="First name">
          			<label for="email">Email Address</label>
          			<input type="email" id="email" class="form-control" placeholder="Email address">
          			<label for="exampleInputPassword1">Password</label>
          			<input type="password" id="password" class="form-control" placeholder="Password">

        		</div>
        		<button type="submit" class="btn btn-primary btn-lg btn-block" onclick="return validate();">Submit</button>
      		</form>
    </div>
    </div>
</body>
</html>