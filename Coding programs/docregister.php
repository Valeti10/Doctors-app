<?php

 $hostname="localhost";
 $username="root";
 $password="";
 $databaseName="docregistration";
$conn =mysqli_connect("localhost", "root", "", "docregistration");
if($conn->connect_error)
	{
	die("Connection Failed..!" .$conn->connect_error);
 	}

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$date_of_birth=$_POST['date_of_birth'];
$email_id=$_POST['email_id'];
$category=$_POST['category'];
$timings=$_POST['timings'];
$mobile_number=$_POST['mobile_number'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$city=$_POST['city'];
$query="select * from dregiste where mobile_number='$mobile_number'";
$query_run=mysqli_query($conn,$query);
if(mysqli_num_rows($query_run)){
	echo "<br><br><br>";
	echo "<h1><center>user already exist! try another user</center></h1>";
}
else {
$query="INSERT INTO dregiste(first_name,last_name,date_of_birth,email_id,category,timings,mobile_number,gender,address,city)values('$first_name','$last_name','$date_of_birth','$email_id','$category','$timings','$mobile_number','$gender','$address','$city')";

	$query_run=mysqli_query($conn,$query);
	if($query_run){
		echo "<br><br><br>";
		echo "<h1>user registered succesfully  ..!</h1>";
	}
	else {
		echo "<h1><center> error </center></h1>";
		}
	}

?>



