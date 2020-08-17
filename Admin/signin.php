<?php
	require_once"include/header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	  <!-------- Manual css ----->
	  <link rel="stylesheet" type="text/css" href="css/signin.css"/>
</head>
<body>
	<!--<img src="image/img1.jpg" class="bg-img" />-->
<div class="container-fluid bg-img">
	<div class="container">
		<!--Sign Up Form-->
		<div class="row"> 
			<div class="col-xs-2 col-sm-4 col-md-3 col-lg-3"> </div>
			<div class="col-xs-8 col-sm-6 col-md-6 col-lg-6">
				<center> <label class="signin"> SIGN-UP FORM </label> </center>
				<br/>
			</div>
			<div class="col-xs-2 col-sm-4 col-md-3 col-lg-3"> 
			</div>
		</div>
		<div>
		<!--Start Sign Up Form-->
			<form class="sign-in-form" id="formsign" action="signinform.php" method="POST">
			<div class="row">
				<div class="col-md-6">
					<p>
					<span><i class="fas fa-user" style="color: gold;"></i></span>
					<label class="userfield"> Full Name </label>
					<input type="text" name="fname" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required />
					</p>
				</div>
				<div class="col-md-6">
					<p>
						<span><i class="fas fa-envelope" style="color: gold;"></i></span>
						<label class="email-field"> Email</label>
						<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" required />
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>
					<span><i class="fas fa-unlock-alt" style="color: gold;"></i></span>
					<label class="pwdfield"> Password </label>
					<input type="password" name="pwd" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
					<label style="color:red; font-size:12px;">*It should contain atleast one number and one capital alphabet.</label>
					</p>
				</div>
				<div class="col-md-6">
					<p>
					<span><i class="fas fa-unlock-alt" style="color: gold;"></i></span>
					<label class="confirm-pwd"> Confirm Password</label>
					<input type="password" name="confirm-pwd" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
						<p>
					<span><i class="fas fa-address-book" style="color: gold;"></i></span>
					<label class="address"> Address </label>
					<input type="memo" name="address" class="form-control" required />
					</p>
				</div>
				<div class="col-md-6">
					<p>
					<span><i class="fas fa-birthday-cake" style="color: gold;"></i></span>
					<label class="birthday"> Birthday</label>
					<input type="date" name="birthday" class="form-control" max="<?php echo date('Y-m-d'); ?>" required />
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>
					<span><i class="fas fa-location-arrow" style="color: gold;"></i></span>
					<label class="city"> City </label>
					<input type="text" name="city" class="form-control" required />
					</p>
				</div>
				<div class="col-md-6">
					<p>
					<span><i class="fas fa-map-marker-alt" style="color: gold;"></i></span>
					<label class="state"> State </label>
					<input type="text" name="state" class="form-control" required />
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>
					<span><i class="fas fa-map-pin" style="color: gold;"></i></span>
					<label class="pin-code"> Pin Code</label>
					<input type="text" name="pin-code" class="form-control" required />
					</p>
				</div>
				<div class="col-md-6">
					<p>
					<span><i class="fas fa-mobile-alt" style="color: gold;"></i></span>
					<label class="contact-no"> Contact_No </label>
					<input type="text" name="contact_no" pattern="^[6-9]{1}[0-9]{9}$" class="form-control" required />
					</p>
				</div>
			</div>
			</form>	
			<div class="row" style="margin-bottom: 10px;">
				<div class="col-md-10"></div>
				<div class="col-md-2">
					<input type="submit" form="formsign" name="signbtn" value="Sign-Up" class="btnsign" />
				</div>
			</div>
		</div>
		<!--End Sign In Form-->
	</div>
</div>
<?php
	require_once "include/footer.php";
	
?>