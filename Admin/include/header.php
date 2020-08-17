 <?php

	require_once "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aao Travels </title>
	  <meta charset="utf-8">
	  <!---- Bootstrap Files --------------->
	  <link rel="stylesheet" type="text/css" href="/aao_travels/css/bootstrap.css">
	  <link rel="stylesheet" type="text/css" href="/aao_travels/css/bootstrap.min.css">
							  <!---Online links -->
	  <meta name="viewport"content="width=device-width, initial-scale:1.0" />
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   	  <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css" />
  	  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />	
	  <link href="../css/fontawesome/css/all.css" type="text/css" rel="stylesheet" />
  	  <!-------- Manual css ----->
  	  <link rel="stylesheet" href="css/my-slider.css"/>
	  <link rel="stylesheet" type="text/css" href="css/style.css" />
	  <!------Script file --------->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	  <script src="ism/js/ism-2.2.min.js"></script>
	  			<script>
				$(document).ready(function(){

					$(document).on('scroll',function()
					{
						if($(this).scrollTop()>110)
						{
							$('nav').addClass('sticky');
						}
						else
						{
							$('nav').removeClass('sticky');
						}
					});
					$('#placesearch').on("keyup", function() {
	                var search_term = $(this).val();

	                $.ajax({
	                    url : "../temp.php",
	                    type: "POST",
	                    data: {search: search_term},
	                    success: function(data) {
	                        $("#search_res").html(data);
	                    }
	                });
	            });
		});
		function showSearch()
		{
			document.getElementById("xbox").style.display ="inline";
		}

				</script>
				
			<!-- image slider -->
			
			<link rel="stylesheet" href="ism/css/my-slider.css"/>
<script src="ism/js/ism-2.2.min.js"></script>


</head>
<body>
	<div class="row color-row gap-prty" >
		 <div class="col-xs-7 col-sm-3 col-md-3 col-lg-3 gap-prty">
		 	<a href="#" class="text-color">	
			 	<i class="fas fa-phone-square"></i> (+91) 101-202-4567
		 	</a>
		 </div>
		 <div class="col-xs-5 col-sm-2 col-md-2 col-lg-2 gap-prty ">
		 		<a href="contact.php" class="text-color">
			 		 Contact us
		 		</a>
		 </div>
		 <div class="hidden-xs col-sm-2 col-md-4 col-lg-4 "> </div>
		 <div class="col-xs-6 col-sm-2 col-md-1 col-lg-1 gap-prty">
		 <?php 
		 	if(isset($_SESSION["user_id"]))
		 	{
		?>
		 	<a href="logout.php" class="text-color">
		 		<i class="fas fa-sign-out-alt "></i> Logout
		 	</a>
		<?php  	}
		 	else
		 	{
		 ?>
		 	<a href="login.php" class="text-color">
		 		<i class="fas fa-sign-out-alt "></i> Login
		 	</a>
		 <?php } ?>
		 </div>
		 <div class="col-xs-6 col-md-2 col-sm-3 col-lg-2 gap-prty">
		 <?php 
		 	if(isset($_SESSION["user_id"]))
		 	{
		 		echo "<p style='font-family:arial;font-weight:bolder;'>Hi,".$_SESSION["user_id"]."</p>";
		 	}
		 	else
		 	{
		 ?>
		 <a href="signin.php" class="text-color">
		 	<i class="fas fa-user-alt"></i> Sign-up Or Register
		 </a>
		<?php } ?>
		 </div>
	</div>

	<!---      Navigation  ------>

	<nav class="navbar bg-info">
		 <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar" style="background-color:rgba(3,4,3,0.9)"></span>
		        <span class="icon-bar" style="background-color:rgba(3,4,3,0.9)"></span>
		        <span class="icon-bar" style="background-color:rgba(3,4,3,0.9)"></span>                        
		      </button>
		      <div class="img-logo">
		      	<a  href="../index.php"><img src="images/logo.png"></a>
		      </div>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      	
				<ul class=" navbar-right menu-box"> 

					<!--<li class="active nav-item"> 
						<a class="menu-bar" href="adminpanel.php">
							<i class="fas fa-home"> </i> Admin Panel
						</a>
					</li>-->
					<li class="active nav-item"> 
						<a class="menu-bar" href="../index.php">
							<i class="fas fa-home"> </i> HOME
						</a>
					</li>
					<li class="nav-item dropdown-content">
						<a href="#" class="menu-bar">
							<i class="fa fa-briefcase"></i> PACKAGES
						</a>
						<ul class="dropdown-menu1">
							<li style="margin-top:30px;margin-bottom:30px;text-align:center;font-weight:900;"><b>Tours By Interest</b></li>
							<li name="taj" id="taj">
								<a href="../package.php?pack=301"> 
									Beauty of Taj Mahal Gateway
								</a>
							</li>
							<li>
								<a href="../package.php?pack=302"> 
									Goa Paradise Beach
								</a>
							</li>
							<li>
								<a href="../package.php?pack=303"> 
									Backwater of Kerala
								</a>
							</li>
							<li>
								<a href="../package.php?pack=304"> 
									Mesmeirizing Golden Temple
								</a>
							</li>
							<li>
								<a href="../package.php?pack=305"> 
									Short Tour of Rajasthan
								</a>
							</li>
							<li>
								<a href="../package.php?pack=306"> 
									Mumbai Tour
								</a>
							</li>
							<li>
								<a href="../package.php?pack=307"> 
									Chennai Tour
								</a>
							</li>
							<li>
								<a href="../package.php?pack=308"> 
									Kolkata Tour
								</a>
							</li>
							<li>
								<a href="../package.php?pack=309"> 
									Varanasi Tour
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown-content">
						<a class="menu-bar" href="#">
							<i class="fas fa-map-marked-alt"> </i> HOTELS 
						</a>
						<ul class="dropdown-menu1">
							<li style="margin-top:30px;margin-bottom:30px;text-align:center;font-weight:900;"><b>Tours By Interest</b></li>
							<li name="taj" id="taj">
								<a href="../hotel.php?hid=201"> 
									Raj Mahal Hotel
								</a>
							</li>
							<li>
								<a href="../hotel.php?hid=202"> 
									Mansingh Palace Hotel
								</a>
							</li>
							<li>
								<a href="../hotel.php?hid=203"> 
									Marquis Beach Resort
								</a>
							</li>
							<li>
								<a href="../hotel.php?hid=204"> 
									Lemon Tree Amarante Resort
								</a>
							</li>
							<li>
								<a href="../hotel.php?hid=205"> 
									Casino Hotel
								</a>
							</li>
							<li>
								<a href="../hotel.php?hid=206"> 
									Fort Heritage
								</a>
							</li>
							<li>
								<a href="../hotel.php?hid=207"> 
									Golden Tulip Hotel
								</a>
							</li>
							<li>
								<a href="../hotel.php?hid=208"> 
									Radisson BLU Hotel
								</a>
							</li>
							<li>
								<a href="../hotel.php?hid=209"> 
									The Imperial Hotel
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item ">
						<a class="menu-bar"  href="../about.php">
				 			<i class="fas fa-user-tie"></i> ABOUT
						</a>
					</li>
					<li class="nav-item ">
						<a class="menu-bar" href="../blog.php">
							<i class="fab fa-blogger-b"></i> BLOG
						</a>
					</li>
					<li class="nav-item">
						<label class="menu-bar" onclick="showSearch();" style="padding: 0px;  cursor: pointer;">
							<label id="xbox" style="display:none;">
								<input type="text" id="placesearch" name="" />
							</label>
							<i class="fas fa-search"> </i> SEARCH
						</label>
						<div id="search_res" class="search-box" style="z-index: 2; height:auto;	max-height: 500px; width: auto; position:absolute; right:20px; background-color: white;"> 
									
						</div>
						
					</li>
				</ul>
    		</div>
  		</div>
</nav>