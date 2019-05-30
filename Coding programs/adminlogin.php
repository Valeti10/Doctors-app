<html> 
<head>
<title>Admin Login</title>
<style>
body{
margin:0;
    background-color: lightblue;
    background-image: url('hos3.jpg');
    background-size: contain;
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
color:orange;
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
       <h1>Online Doctor Appointment Booking</h1></center><marquee>welcome to Online Doctor Appointment</marquee>
      
<div class="nav">
<ul>
<li><a href ="home.html">Home</a></li>
<li><a href ="adddoctors.html"> Add Doctors</a></li>
<li><a href ="viewdoctors.php"> View Doctors</a></li>
<li><a href ="addpatients.html"> Add Patients</a></li>
<li><a href ="logout.html"> Logout</a></li>
</ul>
</div>
</head>
<center><br>
Welcome  <?php echo $_POST["name"];?></br>
</center>
<body>
</body>
</html>
