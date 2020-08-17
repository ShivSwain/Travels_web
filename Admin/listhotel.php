<?php
	include_once "include/header.php.";
?>
	<div class="container">
					<h2>Hotel List</h2>
					<p class="	" style="border:1px solid rgb(255,193,7);width:420px;"></p>
			<?php 
				$hquery="select * from hotels";
				$hsql=mysqli_query($con,$hquery);
				$i=0;
				while($i<=($hresult=mysqli_fetch_array($hsql)))
				{
			?>
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="h_style col-lg-4">
						<a href="viewhotel.php?hid=<?php echo $hresult['hotel_id'] ?>" > 
							<?php
								echo $hresult["h_name"];
							?>	
						</a>
					</div>
				</div>
			<?php
					$i++;
				}
			?>
	</div>
<?php
	require_once "include/footer.php";
?>