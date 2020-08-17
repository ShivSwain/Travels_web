<?php 
	require_once "include/header.php";	
?>
<!DOCTYPE html>
<html>
<head>
	<title> DELETE PACKAGE FORM </title>
	<link rel="stylesheet" type="text/css" href="css/deletepkg.css">
</head>
<body>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<p>
					<label class="deleteform">  DELETE PACKAGE FORM  </label>
				</p>
			</div>
		</div>
		<div class="row" style="margin-bottom:50px; margin-top:30px;  ">
				<div class="col-md-2"></div>
				<div class="col-md-3">
					<span><i class="fas fa-suitcase"></i></span>
					<label class="pkg-nm">Select Package Name </label>
				</div>
				<div class="col-md-6">	
					<p>
						<select id="pkgtype" name="pkgnm">
						<option value="">Select Your Package Name</option>
						<option value="301">Beauty of Taj Mahal Gateway</option>
				    	<option value="302">Goa Paradise Beach</option>
				    	<option value="303">Backwater of Kerala</option>
				    	<option value="304">Mesmeirizing Golden Temple</option>
				    	<option value="305">Short Tour of Rajasthan</option>
				    	<option value="306">Mumbai Tour</option>
				    	<option value="307">Chennai Tour</option>
				    	<option value="308">Kolkata Tour</option>
				    	<option value="309">Varanasi Tour</option>
						</select>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
