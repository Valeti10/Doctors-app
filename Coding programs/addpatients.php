<!DOCTYPE html>
<html><head>
<title>Online Doctor Appointment Booking System</title>
<style>
body{
margin:0;
background:url('hos3.jpg');
background-size:cover;
}
.nav{
width:100%;
background:#000033;
height:100px;
margin-top:100px;
opacity:0.5;
}
ul{
list-style:none;
padding:0;
position:absolute;
}
li{
float:left;
margin-top:30px;
}
a{
width:150px;
color:white;
display:block;
;
text-decoration:none;
font-size:20px;
text-align:center;
padding:10px;
border-radius:10px;
font-family:Century Gothic;
font-weight:bold;
}
a:hover{
back-ground:#669900;
transition:0.6s;
}
</style>
</head>
<body  >
	<center>
	       <h1>Online Doctor Appointment Booking </h1><marquee>welcome to Online Doctor Appointment</marquee>
</style>
</head>
<div class="nav">
<ul>
<li><a href ="home.html">Home</a></li>
<li><a href ="adddoctors.html"> Add doctors</a></li>
<li><a href ="viewdoctors.php"> View Doctors</a></li>

<li><a href ="addpatients.html"> Add patients</a></li>


<li><a href ="logout.html"> Logout</a></li>
</ul>
</div>
</center>
</body>
</html>
<?php
$hostname="localhost";
 $username="root";
 $password="";
 $databaseName="registration1";

$patient_name=$_POST['patient_name'];
$category=$_POST['category'];
$mobile_number=$_POST['mobile_number'];
$email_id=$_POST['email_id'];
$address=$_POST['address'];

$conn = new mysqli("localhost", "root", "", "registration1");
$sql ="INSERT INTO patient(patient_name,category,mobile_number,email_id,address)values('$patient_name','$category','$mobile_number','$email_id','$address')";
if ($conn->query($sql) === TRUE) {
    echo "Registration successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>


