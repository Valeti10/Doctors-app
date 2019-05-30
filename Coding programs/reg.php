<html>
<head>
<title>Register</title>
</head>
<body>
<p><a href="reg.php">Register</a> 1 <a href="login.php">Login</a></p>
<h1>Registeration Form</h1>
<form action="" method="POST">
Username:<input type="text" name="user"><br/>
Password: <input type="password" name="pass"><br/>
<input type="submit" name="submit" value="Login">
</form>
<?php
if(isset($_POST["submit"])){
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('user_registeration') or die("can not select DB");
	$query=mysql_query("SELECT *FROM login WHERE username='".$user."'");
	$numrows=mysql_num_rows($query);
	if($numrows==0)
	{
		$sql="INSERT INTO login(username,password) VALUES('$user','$pass')";
		$result=mysql_query($sql);
		if($result){
		echo "successful created";
	}
		else{
		echo"failed";
	}
	}else{
	echo "that username already exists!please try again later";

}

}
?>
</body>
</html> 