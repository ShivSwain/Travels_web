 <!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<meta charset="utf-8">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/aao_travels/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/aao_travels/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/aao_travels/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="/aao_travels/css/fontawesome.min.css">
							  <!---Online links -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 
	
	<img src="images/travelling.gif" class="image" >
	<div class="container-fluid">
		<div class="container">
					<div class="row">
				<div class="col-md-12">
					<br/>	
					<label class="tour-tag"> Dream...Explore...Discover... </label>	
				</div>
			</div>
				<form class="login" action="loginpanel.php" method="POST">	
					<div class="row container1">
						<div class="col-md-8 login-box"> 
							<label class="email"> Username</label> <br/>
							<input type="text"  placeholder="Username or Email ID" name="emailtxt" class="form-control" required> <br/>	
							<label class="password"> Password</label> <br/>
							<input type="Password"  placeholder="Password" name="pwdtxt" class="form-control" required> <br/>
							<input type="submit" name="login" value="LOGIN">
							<a href="forgot.php" class="fpwd"> ?Forgot Password </a>
						</div>
						<!--<div class="col-md-4"></div>-->
					</div>
					<div class="row">
						<div class="col-lg-6"></div>
						<div class="col-lg-6 login_style">
							<span> <a href="signin.php"> Don't Have an Account? New to Register......</a> </span> 
						</div>
					</div>
				</form>
		</div>	
	</div>
</body>
</html>