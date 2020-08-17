<?php
	require_once "include/header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
		<div class="row1" style="margin-top: -20px;>
			<div class="col-md-12">
			<img src="images/img2.jpg" class="image"/>
		</div>
		</div>
		<div class="container-fluid"style="margin-bottom: 40px;">
			<div class="container">
				<div class="row">
					<div class=" col-sm-12 col-md-12 col-lg-12">
						<label class="heading"> CONTACT US.. </label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form class="contact-form" action="contactform.php" method="POST" id="form1">   
							<label class="form-field"> Name </label>  <br/>
							<input type="text" name="name" placeholder="Name" class="form-control" required>  
							<label class="form-field"> Email ID</label>  
							<input type="email" name="email" placeholder="Email ID" class="form-control" required>  
							<label class="form-field"> Contact Number</label>  
							<input type="text" name="number" placeholder="Contact Number" class="form-control" required>  
							<label class="form-field"> Comment</label> <br/>
							<textarea class="comment" name="comment" placeholder="Type a comment...."class="form-control">	</textarea> <br/>
							<div class="row">
								
								<div class="col-md-10"></div>
								<div class="col-md-2">
									<input type="submit"  value="Submit" class="button" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
<?php
	require_once "include/footer.php";
?>