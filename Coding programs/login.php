<html>
<head>
<title>Login Form</title>
</head>
<body>
<p><a href="register.php">Register</a> 1 <a href="login.php">Login</a></p>
<h1>login Form</h1>
<form action="" method="POST">
Username:<input type="text" name="user"><br/>
Password: <input type="password" name="pass"><br/>
</form>
<?php
if(isset($_POST["submit"])){
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('user_registeration') or die("can not select DB");
    $query=mysql_query("SELECT *FROM login WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysql_num_rows($query);
	if($numrows!==0)
	{
	while($row=mysql_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];	
	}
	if($user == $dbusername && $pass == $dbpassword)
	{
		echo "login succussfully";
	session_start();
	$_SESSION['sess_user']=$user;
	header("Location:member.php");

	}
	
}else {
	echo "Invalid username or password";

}
}
?>

</body>
</html> 




