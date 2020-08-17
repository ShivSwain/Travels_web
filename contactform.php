<?php
	require_once "include/header.php";

	$name= $_POST["name"];
	$email= $_POST["email"];
	$contact_no= $_POST["number"];
	$comment= $_POST["comment"];
	
	$sql="insert into contact(name,email,contactno,message) values('".$name."','".$email."','".$contact_no."','".$comment."')";
	
	mysqli_query($con,$sql);

	echo "<script> var x=confirm('Message Sended Successfully'); 
			if(x==true)
			{
				window.location.href='contact.php';
			}
			else
			{
				alert('press OK');
				window.location.href='contact.php';	
			}

			</script>"; 
?>