<?php
	$servername="localhost";
	$username="Keshav";
	$database="test";
	$password="sqlpass";
	$conn=mysqli_connect($servername,$username,$password,$database);
	if(!$conn){
		die("Connection Unsuccessful" . mysqli_connect_error());
	}
	echo "Connection Successful";


?>