<?php
	$name = $_POST["name"];
	$regno = $_POST["regno"];
	$contact = $_POST["contact"];
	$email = $_POST["email"];
	$plan = $_POST["plan"];
	$company = $_POST["company"];
	$package = $_POST["package"];
	$location = $_POST["location"];


	$con = mysqli_connect("localhost","root","","alumini");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
    //storind the data in your database
    $query= "INSERT INTO student_data (Name, Regno, Image, Contact, Email, plan, company, package, location) VALUES ('$name','$regno','$image','$contact','$email','$plan','$company','$package','$location')";
    if(!mysqli_query($con,$query))
		echo("Error description: " . mysqli_error($con));
	else
	{
		header('Location:success.html');
	}

?>
