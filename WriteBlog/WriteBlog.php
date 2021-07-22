<?php
		$servername="localhost";
	$username="Keshav";
	$database="test";
	$password="sqlpass";
	$conn=mysqli_connect($servername,$username,$password,$database);
	if(!$conn){
		die("Connection Unsuccessful" . mysqli_connect_error());
	}
	echo "Connection Successful<br>";
		if($_SERVER["REQUEST_METHOD"]=='POST'){
		//Capturing the values entered by the user
		$Author=$_POST["Author"];
		$Technology=$_POST["Technology"];
		$Title=$_POST["Title"];
		$content=$_POST["Content"];
		$date_of_pub=$_POST["Date"];
		$Type=$_POST["Type"];

		#echo $Author;
		#echo $Technology;
		#echo $Title;
		#echo $content;
		#echo $Type;

		$sql="INSERT INTO BLOG (AUTHOR,TECHNOLOGY,TITLE,CONTENT,DATE_OF_PUB,TYPE) VALUES('$Author','$Technology','$Title','$content','$date_of_pub','$Type')";
		if (mysqli_query($conn, $sql)) {
  				echo "New record created successfully<br>";
  				echo "Your blog has been mailed";
		} 
		else {
 		 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		
	}




?>
