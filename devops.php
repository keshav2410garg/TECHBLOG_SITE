<style>
	.Author{
		color: black;
		padding-left: 50px;
		padding-top: 120px;
		/*margin: 25px 50px 75px 100px;*/
	}
	.Title{
		margin-top: 10px;
		color: black;
		padding-left: 50px;
		font-weight: bold;
		/*margin: 25px 50 75px 100px;*/
	}
	.Content{
		margin-top: 10px;
		color: black;
		padding-left: 50px;
		padding-right:150px;
		font-size: large;
		/*margin: 25px 50px 75px 100px;*/
	}
	.date{
		margin-top: 10px;
		color: black;
		padding-left: 50px;
	}



</style>



<?php
		$servername="localhost";
	$username="Keshav";
	$database="test";
	$password="sqlpass";
	$conn=mysqli_connect($servername,$username,$password,$database);
	if(!$conn){
		die("Connection Unsuccessful" . mysqli_connect_error());
	}
		
		$sql="SELECT* FROM BLOG WHERE TECHNOLOGY='Devops'";
		$result = $conn->query($sql);

	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    echo  "<div  class='Author'>" ."AUTOR :" . $row["AUTHOR"]."</div>";
    echo "<div class='Title'>" ."TITLE : " . $row["TITLE"]."</div>";
    echo "<div class='date'>" ."PUBLISHED-ON :" . $row["DATE_OF_PUB"]."</div>";
    echo "<div class='Content'>".$row["CONTENT"]. "<br>"."</div>";
  }
} else {
  echo "0 results";
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Devops_Blogs</title>
	<style >
		body{
			width: 100%;
			height:100vh;
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/devops.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			background-attachment: scroll;
		}
		.TopContent h1{
			width: 100%;
			position: absolute;
			font-size: 70px;
			top: 3px;
			/*margin-top: 30px;*/
			font-family: "Cursive";
			text-align: center;
			color: black;
		}
	</style>
</head>
<body>
	<div class="TopContent">
		<h1>DEVOPS TECHNOLOGY</h1>


	</div>

</body>
</html>