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
<center><form method="post" action="search1.php"><table>
	<tr><td>username:</td><td><input type="text" name="username" placeholder="enter username" required></td><td><input type="submit" name="submit" value="Search"></td></tr>
</table>
</form>
</center>
</body>
</html>
<?php
include 'database.php';
if(isset($_POST['submit']))
{ 
	$username=$_POST['username'];
	$sql="select * from admin where username='$username'";
	$que=mysqli_query($con,$sql);
	if(mysqli_num_rows($que)>0)
{
	echo "<table border='2' style='background-color:red;'><tr><th>username</th><th>password</th></tr>"; /*<th>dob</th><th>Gender</th><th>education</th></tr>";*/

	while($row=mysqli_fetch_assoc($que))
	{
				echo "<tr><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>"; 
				/*.$row["dob"]."</td><td>".$row["gender"]."</td><td>".$row["education"]."</td></tr>";*/
	}
	echo "</table>";
}
else
{
	echo "data is not available in table";
}
mysqli_close($con);
}
?>
