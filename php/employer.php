<?php
$servername="localhost";
$username="root";
$database_name="onlinejob";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(1$conn)
{
	die("connection Failed:".mysqli_connect_error());	
}
if(isset($_POST['save']))
{
	$job_title=$_POST['job_title'];
	$job_type=$_POST['job_type'];
	$company=$_POST['company'];
	$mobile_no=$POST['mobile_no'];
	$email=$POST['email'];
	$description=$POST['description'];
	
	$sql_query="ÏNSERT INTO employer(job_title,job_type,company,mobile_no,email,description)
	VALUES('$job_title','$job_type','$company','$mobile','$description')";

	if(mysqli_query($conn,$sql_query))
	{
		echo"New Details Entry Inserted successfully!";
	}
	else
	{
		echo"error:".$sql."".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>
