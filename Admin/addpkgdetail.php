<?php 
	require_once "include/header.php";	
?>
<!DOCTYPE html>
<html>
<head>
	<title> ADD PACKAGE FORM </title>
	<link rel="stylesheet" type="text/css" href="css/addpackageform.css">
	 <meta charset="utf-8">
  <meta name="viewport"content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<center> <label class="add-pkg-form">ADD PACKAGE FORM </label> </center>
			</div>
		</div>
		<form class="package-form" id="formsubmit" action="pkgformsubmit.php" method="POST">
			<div class="row">
				<div class="col-md-6">
					<span><i class="fas fa-suitcase"></i></span>
					<label class="pkg-nm"> Package Name </label>
					<input type="text" name="pkgname" class="form-control" required>
				</div>
				<div class="col-md-6">
					<p>
						<span><i class="fas fa-rupee-sign"></i></span>
						<label class="amt"> Amount</label>
						<input type="text" name="amount" class="form-control" required>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>
					<span><i class="fas fa-location-arrow"></i></span>
					<label class="sourcefield" name="source"> Source</label>
					<select id="source-city" class="source" name="source">
					<option value="0">Select Your Source</option>
					<option value="2001">Delhi</option>
					<option value="2002 ">Agra</option>
					<option value="2003">Amritsar</option>
					<option value="2004">Kochi</option>
					<option value="2005">Kumakaron</option>
					<option value="2006">Jaipur</option>
					<option value="2007">Mumbai</option>
					<option value="2008">Chennai</option>
					<option value="2009">Kolkata</option>
					<option value="2010">Goa</option>
					<option value="2011">Varanasi</option>
				</select>
				</p>
				</div>
				<div class="col-md-6">
						<p>
						<span><i class="fas fa-location-arrow"></i></span>
						<label class="destfield"> Destination</label>
				<select id="dest" class="destfield" name="destination">
					<option value="0">Select Your Destination</option>
					<option value="2001">Delhi</option>
					<option value="2002 ">Agra</option>
					<option value="2003">Amritsar</option>
					<option value="2004">Kochi</option>
					<option value="2005">Kumakaron</option>
					<option value="2006">Jaipur</option>
					<option value="2007">Mumbai</option>
					<option value="2008">Chennai</option>
					<option value="2009">Kolkata</option>
					<option value="2010">Goa</option>
					<option value="2011">Varanasi</option>
				</select>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>
					<span><i class="fas fa-suitcase"></i></span>
					<label class="pkgtypefield"> Package Type </label>
					<select id="pkgtype" name="pkg-type">
						<option value="0">Select Your Package Type</option>
						<option value="Silver">Silver</option>
				    	<option value="Gold">Gold</option>
						<option value="Platinum">Platinum</option>
					</select>
					</p>
				</div>
				<div class="col-md-6">
					<p>
						<span><i class="fas fa-hotel"></i></i></span>
						<label class="hoteltypefield"> Hotel Type</label>
						<select id="hoteltype" name="hotel-type">
							<option value="0">Select Your Hotel Type</option>
							<option value="1">3-Star</option>
							<option value="2">4-Star</option>
							<option value="3">5-Star</option>
						</select>
					</p>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>
					<span><i class="fas fa-plane"></i></span>
					<label class="traveltypefield"> Travel Type </label>
					<br/>
					<select id="traveltype" name="travel-type">
						<option value="0">Select Your Travel Type</option>
						<option value="111">Non-AC</option>
						<option value="222">AC</option>
						<option value="333">Luxury</option>
					</select>
					</p>
				</div>
				<div class="col-md-6"></div>
			</div>
			<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-4">
				</div>
				<div class="col-md-3">
					<input type="submit" name="submit" value="ADD" class="add">
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>