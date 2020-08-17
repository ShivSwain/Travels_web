<html>
<body>

<?php
$a = array();
function addwords($key , $value)
{
    global $a ;
    if (array_key_exists($key,$a))
  	{
 		 echo "Key exists!";
  	}
	else
  	{
 		 $a[$key] = $value ;
 	}
	print_r($a);
	echo "<br>";
}
addwords("name","Pawan Singh Jadon");
addwords("course","MCA");
addwords("section","A");
?>

</body>
</html>