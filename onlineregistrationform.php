<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ONLINE REGISTRATION</title>
	<style>
	body{
         background-image: url(haridwar-to-badrinath-4348954.jpg);
         background-size: initial;
     }	
     /*#table{
     	background-color: lemonchiffon;
     }*/
	</style>
	<script type="text/javascript">
		function display()
		{
			alert("hello everyone!");
		}
	</script>
	<script type="text/javascript">
		function displayone()
		{
			alert("form submitted successfully!");
		}
	</script>
</head>
<body><center style="background-color: lemonchiffon;"><form method="post" action="process.php" ><fieldset>
	<table  border="2" cellpadding="0" cellspacing="0" > 
							<div><h4><u><I>BUS RESERVATION SYSTEM</I></u></h4></div>	

								
<tr><td>source</td><td><input type="text" name="source" placeholder="source" required></td></tr>
<tr><td>destination</td><td><input type="text" name="destination" placeholder="destination" required>
<tr><td>departure</td><td><input type="text" name="departure" placeholder="DDMMYYYY"  required></td></tr>
<tr><td>coming</td><td><input type="text" name="coming" placeholder="DDMMYYYY"  required></td></tr>
<tr><td>numberofseats</td><TD>
<select name="numberofseats" required>
<option value="1">1</option>
<option value="2">2</option>  
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option> 
</select></td></tr>
<tr><td><input type="submit" name="submit"  value="submit" onclick="displayone()"></td></tr>

<input type="button" onclick="display()" value="click me"></script>
</div>
</table></fieldset></form></center>
</body>
</html>