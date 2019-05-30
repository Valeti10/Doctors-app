
<?php
session_start();
		if(!isset ($ SESSION['sess_user']){
		header("Location:login.php");
	} else {
		?>
<html>
<head>
<title>welcome</title>
</head>
<body>
<h2>welcome, <?=$_SESSION['sess_user'];?>!
<a href="logout.php">Logout</a></h2>
<p>
gfkaKHfk,ahfkAHflahliA</p>
</body>
</html>
<?php
	}
	?> 