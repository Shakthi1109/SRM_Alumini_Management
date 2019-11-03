<?php

	$con = mysqli_connect("localhost","root","","alumini");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	//Retrieve
	$result = mysqli_query($con,"SELECT * FROM student_data");
	while($row = mysqli_fetch_row($result)) {
    echo "&nbsp;&nbsp;&nbsp;Name of Student						:&nbsp;&nbsp;&nbsp;".$row[1]."<br><br>";
		echo "&nbsp;&nbsp;&nbsp;Registration Number				:&nbsp;&nbsp;&nbsp;".$row[2]."<br><br>";
		echo "&nbsp;&nbsp;&nbsp;Contact Number						:&nbsp;&nbsp;&nbsp;".$row[4]."<br><br>";
		echo "&nbsp;&nbsp;&nbsp;Email Id									:&nbsp;&nbsp;&nbsp;".$row[5]."<br><br>";
		echo "&nbsp;&nbsp;&nbsp;Future plan								:&nbsp;&nbsp;&nbsp;".$row[6]."<br><br>";
		echo "&nbsp;&nbsp;&nbsp;University/ Company Name	:&nbsp;&nbsp;&nbsp;".$row[7]."<br><br>";
		echo "&nbsp;&nbsp;&nbsp;Specialisation/ Package 	:&nbsp;&nbsp;&nbsp;".$row[8]."<br><br>";
		echo "&nbsp;&nbsp;&nbsp;Location									:&nbsp;&nbsp;&nbsp;".$row[9]."<br><br>";
		//echo '<img src="data:image/png;base64,'.base64_encode($row[3]).'style=width:200px;height:200px;"/>';
    echo '&nbsp;&nbsp;&nbsp;<img style="height:250px;width:200px;" src="data:image/jpg;base64,'.base64_encode($row[3]).'"/><br>';
    echo "<br>==================================================================================================================================================================================================================<br>";
		echo "==================================================================================================================================================================================================================<br><br>";
}
?>
