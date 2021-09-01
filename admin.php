<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<style>
		body{
		
			background-image: radial-gradient(circle,red,green,blue,yellow);		
		}
	</style>
</head>
<body>
<center>
	<form method="post" action=""><table>
		<tr><td>username:</td><td><input type="text" name="username" placeholder="enter username"></td></tr>
		<tr><td>password:</td><td><input type="password" name="password" placeholder="enter password"></td></tr>
		<tr><td></td><td><input type="submit" name="submit" value="login"></td></tr>
	</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($username=="admin" && $password=="12345")
	{
		echo "<script>alert('login ok')</script>";
		echo "<script> window.open('conditional.php')</script>";
	}
	else
	{
		echo "<script>alert('wrong username and password')</script>";
	}
}
?>