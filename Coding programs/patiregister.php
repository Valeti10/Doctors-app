<?php

 $hostname="localhost";
 $username="root";
 $password="";
 $databaseName="patiregistration";

$conn =mysqli_connect("localhost", "root", "", "patiregistration");
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$date_of_birth=$_POST['date_of_birth'];
$email_id=$_POST['email_id'];
$mobile_number=$_POST['mobile_number'];
$gender=$_POST['gender'];
$address=$_POST['address'];

$sql ="INSERT INTO pregister(first_name,last_name,date_of_birth,email_id,mobile_number,gender,address)values('$first_name','$last_name','$date_of_birth','$email_id','$mobile_number','$gender','$address')";
if ($conn->query($sql) === TRUE) {
    echo "Registration successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>