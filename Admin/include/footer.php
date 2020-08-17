
	<div class="container-fluid color-row">
		<div class="container">	
			<div class="row " style="margin-top:50px;	"> 
				<div class="col-lg-4 col-md-4 col-sm-4" >
					<img src="images/logo.png" class="img-responsive">
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class=" f-head">
						<span > Tour By Interest</span>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2" >
					<div class="f-head">
						Useful links
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="f-head ">Legal Policy</div>
				</div>
			</div>
			<div class="row color-row" >
				<div class=" col-lg-4">
						<div class="f-addrerss" style="margin-top:25px;">
							RZ – A / 96, Road No. 6,<br />
							Street No. 9, Mahipalpur Extension,<br />
							New Delhi – 110037, India<br />
							T: +91-11- 4712 5200<br />
							M: +91-9711597010
						</div>
						<div class=" soc-icons" style="margin: 20px 0; ">
							<a href="https://www.facebook.com" class="sos-icons"><i class="fab fa-facebook-square"></i></a>
							<a href="https://www.instagram.com" class="sos-icons"><i class="fab fa-instagram"></i></a>
							<a href="https://www.plus.google.com" class="sos-icons"><i class="fab fa-google-plus"></i></a>
							<a href="https://www.twitter.com" class="sos-icons"><i class="fab fa-twitter-square"></i></a>
						</div>

						<?php
							if(isset($_SESSION['user_id']))
							{
								echo "<form action='../payment.php' >";
							}
							else
							{
								echo "<form action='login.php' >";
							}
						?>

							<input type="submit" value="Quick Payment" name="payment">
						</form>
				</div>
				<div class="col-lg-3">
					<div class="" >
						 <ul class="f-package">
						 	<li class="packages" name="taj">
								<a href="../package.php?pack=301"> 
									Beauty of Taj Mahal Gateway
								</a>
							</li>
							<li class="packages">
								<a href="../package.php?pack=302"> 
									Goa Paradise Beach
								</a>
							</li >
							<li class="packages">
								<a href="../package.php?pack=303"> 
									Backwater of Kerala
								</a>
							</li>
							<li class="packages">
								<a href="../package.php?pack=304"> 
									Mesmeirizing Golden Temple
								</a>
							</li >
							<li class="packages">
								<a href="../package.php?pack=305"> 
									Short Tour of Rajasthan
								</a>
							</li>
							<li class="packages">
								<a href="package.php?pack=306"> 
									Mumbai Tour
								</a>
							</li>
							<li class="packages">
								<a href="../package.php?pack=307"> 
									Chennai Tour
								</a>
							</li>
							<li class="packages">
								<a href="package.php?pack=308"> 
									Kolkata Tour
								</a>
							</li>
							<li class="packages">
								<a href="../package.php?pack=309"> 
									Varanasi Tour
								</a>
							</li>
						 </ul>
					</div>
				</div>
				<div class="col-lg-2">
					<ul class="f-links">
						<li class="packages">
							<a href="../index.php">
								Home
							</a>
						</li>
						<li class="packages">
							<?php 
							 	if(isset($_SESSION["user_id"]))
							 	{
							?>
							 	<a href="logout.php">
							 	 	Logout
							 	</a>
							<?php  	}
							 	else
							 	{
							 ?>
							 	<a href="login.php">
							 		 Login
							 	</a>
							 <?php } ?>
						</li>
						<li class="packages">
							<a href="../blog.php">
								Blogs
							</a> 
						</li>
					</ul>
				</div>

				<div class="col-lg-3">
					<ul class="f-links"> 
						<li class="packages">
							<a href="../termcondition.php">
								Term and Conditions
							</a>
						</li>
						<li class="packages">
							<a href="policypage.php">
							Privacy Policy
							</a>
						</li>
						<li class="packages">
							<a href="../contact.php">	
								Share Your Experience
							</a>
						</li>
					</ul>	
				</div>
			</div>	
		</div>
	</div>			
</body>
</html>