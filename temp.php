<?php
	$search_value = $_POST["search"];
	$con=mysqli_connect("localhost","root","","aaotravel")or die("connection failed"); 
	$sql="SELECT * FROM package WHERE name LIKE '%{$search_value}%'";
	$result=mysqli_query($con,$sql) or die("SQL Query Failed.");
	if(mysqli_num_rows($result) > 0  )
	{
	?>
			<h2 class=" " style="font-family: imprint mt shadow; color:black;" >Tour By Interest</h2>
			<p class=" " style="border:1px solid rgb(255,193,7);width:600px;"></p>
			<div class="row " style="margin-top:50px;margin-bottom:30px;">
			<?php	
				while($row=mysqli_fetch_assoc($result))
				{
			?>
					<div class="col-lg-4 img-box-num1" style="height:370px;">
					  <div style="border:2px solid;height:220px;margin-bottom:10px; ">		
						<?php echo $row["image"] ?>
					  </div>
					  <div class="time" style="margin-bottom:10px;">
						<center><span><i class="far fa-clock"></i></span>
						<b>
						 <?php echo $row["duration"] ?>
						</b></center>
					  </div>
					  <div class="time">
						<center><b><?php echo $row["name"] ?></b></center>
					  </div>
					  <div class="pack">
				 		  <a href="package.php?pack=<?php echo $row['id'];?>" style="border:1px solid gray;position:relative;padding:16px 32px;top:30px;left:75px;border-radius:10px;">Package Details </a>
				  	  </div>
					</div>
			<?php	}	?>		
			</div>
			<?php
			mysqli_close($con);
	}
	else
	{
		echo "<h3>No record Found.</h3>";
	}
			?>