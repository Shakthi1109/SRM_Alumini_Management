<?php
	$username = $_POST["username"];
	$password = $_POST["password"];
  $salt='shakthi';
	$ckhash=sha1($password.$salt);
	// $con = mysqli_connect("localhost","root","","alumini");
	// if (mysqli_connect_errno())
	// {
	// 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	// }
  // $hash=sha1($password.$salt);
  //   //storind the data in your database
  //   $query= "INSERT INTO login(username,password) VALUES ('$username','$hash')";
  //   if(!mysqli_query($con,$query))
	// 	echo("Error description: " . mysqli_error($con));
	// else
	// {
	// 	header('Location:success.html');
	// }

	$con = mysqli_connect("localhost","root","","alumini");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	//Retrieve
	$result = mysqli_query($con,"SELECT * FROM login");
	$count=0;
	while($row = mysqli_fetch_row($result)) {

		if($username==$row[1] && $ckhash==$row[2])
		{
			include 'results.php';
			break;
		}
		else{
		$count=$count+1;
			if($count>2)
			{
			echo 'Login Failed. Try again!';
			break;
		}
		}
		// echo $row[1]."</p>";
		// echo $row[2]."</p>";
	}

?>
