
<?php

	require_once "include/header.php";

?>
<!--- Search Box -->
<div id="search_res"> 
				
</div>

<!----    Slider Start   -->
			<div class="gap-re">
				<div class="ism-slider" data-play_type="loop" data-radios="false" id="my-slider">
				  <ol>
				    <li>
				      <img src="images/slides/1543239582611_312121.jpg">
				      <div class="ism-caption ism-caption-0" data-delay='200'>WELCOME TO </div>
				      <div class="ism-caption ism-caption-1" data-delay='300'>AAO TRAVELS (INDIA)</div>
				    </li>
				    <li>
				      <img src="images/slides/1543242790710_942253.jpg">
				      <div class="ism-caption ism-caption-0" data-delay='200'>WELCOME TO</div>
				      <div class="ism-caption ism-caption-1" data-delay='300'>KERALA </div>
				      <div class="ism-caption ism-caption-2" data-delay='500'>TEMPLES</div>
				    </li>
				    <li>
				      <img src="images/slides/1543239584004_689670.jpg">
				      <div class="ism-caption ism-caption-0">DISCOVER</div>
				      <div class="ism-caption ism-caption-1" data-delay='400'>NEW PLACES</div>
				    </li>
				    <li>
				      <img src="images/slides/1543239582722_735091.jpg">
				      <div class="ism-caption ism-caption-0">WELCOME TO</div>
				      <div class="ism-caption ism-caption-1" data-delay='200'>INDIA</div>
				      <div class="ism-caption ism-caption-2" data-delay='500'>LAND OF FESTIVALS</div>
				    </li>
				    <li>
				      <img src="images/slides/1543239584524_507593.jpg">
				      <div class="ism-caption ism-caption-0" data-delay='200'>WELCOME TO</div>
				      <div class="ism-caption ism-caption-1" data-delay='300'>GOA </div>
				      <div class="ism-caption ism-caption-2" data-delay='400'>BEACH</div>
				    </li>
				  </ol>
				</div>
			</div>
	<!--                        Slider Ends                                      --->

	<div class="container-fluid">
		<div class="container">
			<div class="row" style="margin-top: 40px;">
				<div class="col-xs-12 col-sm-6 col-md-5 col-lg-6 ">
					<h4 class="content-heading ">
						SO GLAD YOU ARE HERE 
					</h4>
					<h2 class=" ">TRAVEL WITH AAO TRAVELS</h2>
					<p class=" " style="border: 1px solid rgb(255,193,7)"></p>
					<p class="text-contents" style="font-family: arial;">
						
						Aao Travels invites you to discover the mesmerising beauty of our Indian.From Northern Himalayas to Southern beaches, Eastern jungles to Western deserts, India is flourished with so many cultural and geographical diversities, a perfect reason for India tourism. There is simply no other words that catch the true enigma of this land where great legends still holds its power and impression, the grand architectural structures are the true reflector of history and the life of the spirit can be sacredly glimpsed at different temples and pilgrimage sites at its every corner.

					</p>
					<p class="text-contents" style="font-family: arial;">

						When travelling to India, it is worth taking a short trip, to enhance your experience. You will notice a striking similarity, yet subtle differences in the people, food, culture, religion and lifestyle in the entire Indian. It is in these differences that we celebrate the 'unity in diversity' of our land.

					</p>
				</div>
				<!---------           Package Section                     ----------->
				<div class="col-xs-12 col-sm-6 col-md-7 col-lg-6 img-box-car">
					<img src="images/car-img-1.png" class="img-responsive" />
				</div>
			</div>
			<div style="clear:both;"></div>
			<h2 class=" "style="font-family: imprint mt shadow;">Most Popular Package</h2>
			<p class=" " style="border:1px solid rgb(255,193,7);width:600px;"></p>
			<div class="row" style="margin-top:50px;margin-bottom:30px;">
			<?php
				$query1="select * from package where rows1=1";
				$row_query=mysqli_query($con,$query1);
				
				$i=0;
				
				while($i<=($res_query=mysqli_fetch_array($row_query)))
				{
			  ?>	
			
			 	<div class="col-lg-4 img-box-num1" style="height:370px;">
				  <div style="border:2px solid;height:220px;margin-bottom:10px;">		
					<?php echo $res_query["image"];?>
				  </div>
				  <div class="time" style="margin-bottom:10px;">
					<center><span><i class="far fa-clock"></i></span><b> <?php echo $res_query["duration"];?></b></center>
				  </div>
				  <div class="time">
					<center><b> <?php echo $res_query["name"];?></b></center>
				  </div>
				  <div class="pack" >
				   <a href="package.php?pack=<?php echo $res_query['id'];?>&packid=<?php echo $res_query['rows1']?>" style="border:1px solid gray;position:relative;padding:16px 32px;top:30px;left:75px;border-radius:10px;">Package Details </a>
				  </div>
				</div>
				
			
				 <?php	$i++;
				}
			?>
			</div> 
			<!---    Package 1st ends ---->
			<!---    Package 2 ---->
			<div style="clear:both;"></div>
			<h2 class=" " style="font-family: imprint mt shadow; color:black;" >Tour By Interest</h2>
			<p class=" " style="border:1px solid rgb(255,193,7);width:600px;"></p>
			<div class="row " style="margin-top:50px;margin-bottom:30px;">
			<?php
				$query1="select * from package where rows1=2";
				$row_query=mysqli_query($con,$query1);
				
				$i=0;
				
				while($i<=($res_query=mysqli_fetch_array($row_query)))
				{
			  ?>	
			
			 	<div class="col-lg-4 img-box-num1" style="height:370px;">
				  <div style="border:2px solid;height:220px;margin-bottom:10px; ">		
					<?php echo $res_query["image"];?>
				  </div>
				  <div class="time" style="margin-bottom:10px;">
					<center><span><i class="far fa-clock"></i></span><b> <?php echo $res_query["duration"];?></b></center>
				  </div>
				  <div class="time">
					<center><b> <?php echo $res_query["name"];?></b></center>
				  </div>
				  <div class="pack" >
				   <a href="package.php?pack=<?php echo $res_query['id'];?>&packid=<?php echo $res_query['rows1']?>" style="border:1px solid gray;position:relative;padding:16px 32px;top:30px;left:75px;border-radius:10px;">Package Details </a>
				  </div>
				</div>
				
			
				 <?php	$i++;
				}
			?>
			</div> 
			<!---      Ends            --->
			<div class="row " style="margin-top:50px;">
			 	<div class="col-lg-12 img-box-num1 ">
					<img src="images/s4.jpg" class="img-responsive" style="width:100%;position:relative;"/>
					
					<span style="top:20px;left:60%;width:100%;margin:0 auto;width:300px;height:50px;position:absolute;color:white;text-align:justify;"><h3 style="font-weight:600;">ABOUT <span style="color:#FFC107;">AAOTRAVEL</span></h3>
						In 1978, the inbound tour division, Travelite (India), was born with the mission to redefine the image of
						India in the hearts of tourists' world wide.
						With more than 65 years of experience, we have created a dynasty of specialization in all spheres of
						tourism. We take pride in escorting our guests and enabling them to discover the real India in the best
						possible way.
						 </span>
				
				</div>
					
			</div>
			<!--    Client Section       -->	
			<div class="row" style="margin-top:50px;">
			 	<div class="col-lg-12 ">
					<h2 class=" " style="text-align:center;">What Our Client Says</h2>
					<p class="" style="border:1px solid rgb(255,193,7);width:400px;margin: 10px auto;"></p>
								
					
					<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:300px;">
						 
						  <ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						  </ol>

						  
						  <div class="carousel-inner">
							<div class="item active">
							   <p style="width:900px; border: 1px solid transparent; margin: 100px auto;">
								With some delay, I am contacting you to thank you for everything you did for our clients.
								They were extremely happy and delighted with the entire trip and experiences.
								They really appreciated the hotel selection, the excursions as well as drivers.
							</p>
							</div>

							<div class="item">
								<p style="width:900px; border: 1px solid transparent; margin: 100px auto;">
									My family and I would like to thank you for one of the best family holidays we’ve ever taken.
									We still talk about it often and can’t wait to visit Costa Rica again. 
									I would also like to thank you for the absolute great service we received from you & the company in regard to the bedbugs situation in the last portion of our trip.
								</p>
							</div>

							<div class="item">
								<p style="width:900px; border: 1px solid transparent; margin: 100px auto;">
									Our family had a wonderful stay in Costa Rica last February!  Thank you for all you did to make the trip so amazing.  
									I am passing your name along to a few friends (as well as a few of my patients) if that’s ok?
									Hope all is well with you. 
								</p>
							</div>
						  </div>

						  
						  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
				</div>
			</div>
		</div>	
	</div>
			
		
			<!---------------------------------footer---------------------------->
		<?php 
			require_once "include/footer.php";
		?>