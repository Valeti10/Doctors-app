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
<li><a href ="myappointments.php">My Appointments</a></li>
<li><a href ="viewpatients.php"> ViewPatients</a></li>
<li><a href ="logout.html"> Logout</a></li></h1>
</ul>
</div>
<h1>My Appointments</h1>
</center>
</body>
</html>
<center>
<?php  
$link = mysqli_connect("localhost", "root", "", "registration"); 
  
if ($link == false) { 
    die("ERROR: Could not connect. "
                .mysqli_connect_error()); 
} 
  
$sql = "SELECT * FROM Doctor"; 
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table border=2>"; 
        echo "<tr>"; 
        echo "<th>id</th>";
        echo "<th>doctor_name</th>"; 
          echo "<th>category </th>"; 
          echo "<th>date</th>"; 
          echo "<th>time</th>";
          
           echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['doctor_name']."</td>"; 
            echo "<td>".$row['category']."</td>"; 
            echo "<td>".$row['date']."</td>"; 
            echo "<td>".$row['time']."</td>"; 
          
            echo "</tr>"; 
        } 
        echo "</table>"; 
         
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
} 
mysqli_close($link); 
?>
</center>