<?php
function conectar (){
	$user="root";
	$pass="";
	$server="localhost";
	$db="petalrescate_13";
	$con=mysqli_connect($server,$user,$pass)or die("error al conectar la base de datos".mysql_error());
	mysqli_select_db($con,$db);

	return $con; 

}

?>