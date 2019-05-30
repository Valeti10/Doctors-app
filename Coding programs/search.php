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

<li><a href ="booking.html"> Book Appointment</a></li>
<li><a href ="viewbooking.php"> View Booking</a></li>
<li><a href ="search.html">Search Doctor</a></li>
<li><a href ="logout.html"> Logout</a></li>
</ul>
</div>
<h1>Search Results</h1>
</center>
</body>
</html>
<center>
<?php
$conn=mysqli_connect("localhost","root","","booking");
$doctor_name=$_POST['doctor_name'];
$category=$_POST['category'];
$query="select *from book where doctor_name='$doctor_name' AND category='$category'";
$result=$conn->query($query);
?>
<?php
    if($result->num_rows>0){
      echo "<table border=2><tr><th>Appointment Id</th><th>doctor_name</th><th>category</th><th>date</th>
    <th>time</th></tr>";
    while($row=$result->fetch_assoc()){
      echo "<tr>";
      echo "<td>".$row['appointment_id']."</td>";
      echo "<td>".$row['doctor_name']."</td>";
      echo "<td>".$row['category']."</td>";
      echo "<td>".$row['date']."</td>";
      echo "<td>".$row['time']."</td>";
      echo "</tr>";
    }
    echo "</table>";
  }
    else 
        echo "No matching records are found."; 
     
?>
    

        


   