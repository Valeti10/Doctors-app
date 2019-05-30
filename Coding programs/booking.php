<!DOCTYPE html>
<html><head>
<title>Online Doctor Appointment Booking</title>
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
	       <h1>Online Doctor Appointment  </h1><marquee>welcome to Online Doctor Appointment</marquee>
</style>
</head>
<div class="nav">
<ul>
<li><a href ="home.html">Home</a></li>

<li><a href ="booking.html"> Book Appointment</a></li>
<li><a href ="viewbooking.php"> View Booking</a></li>
<li><a href ="search.html">Search Doctor</a></li>
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
 $databaseName="booking";
$appointment_id=$_POST['appointment_id'];
$doctor_name=$_POST['doctor_name'];
$category=$_POST['category'];
$date = $_POST['date']; 
$time=$_POST['time'];
$conn =mysqli_connect("localhost", "root", "", "booking");


$sql ="INSERT INTO book(appointment_id,category,doctor_name,date,time)values('$appointment_id','$category','$doctor_name','$date','$time')";
if ($conn->query($sql) === TRUE) {
    echo "Registered successfully";
} else 
    echo "The Time aleready booking";
$conn->close();
?>