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
     table{
     	padding: 0PX;
     	margin: 0PX;
     	font-size: xx-large;
     	font-weight: 900;
     	width: 700px;
     	font-family: xx-large;
     }
     FIELDSET{
		height: pX;
		width: PX;
			background-color: ;		
		color:BLACK ;
		font-size: xx-large;}

		#a,#b,#c,#d,#e{text-field: 50px ;
			height: 50px;
			font-size: xx-large;}
			#f,#g{
				font-size: xx-large;
			}

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
<body><center style="; background-color: lemonchiffon;"><form method="post" action="process.php" >
	<fieldset>
	<table  border="2" cellpadding="0" cellspacing="0" height="200px" width="800px" > 
							<div><h1><u><I>BUS RESERVATION SYSTEM</I></u></h1></div>	

								
<tr><td>source</td><td><input type="text" name="source"  
	size="32px" placeholder="source" id="d" required></td></tr>
<tr><td>destination</td><td width="200PX"><input type="text" size="32px" name="destination" placeholder="destination" width="600px" height="600px" id="c" required>
<tr><td>departure</td><td><input type="text" size="32px" name="departure" placeholder="DDMMYYYY" maxlength="8" id="b" required></td></tr>
<tr><td>coming</td><td ><input type="text" size="32px"  name="coming" placeholder="DDMMYYYY" maxlength="8" id="a" required></td></tr>
<tr><td>numberofseats</td><TD>
<select name="numberofseats" id="e" required>
	<option value=""></option>

<option value="1">1</option>
<option value="2">2</option>  
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option> 
</select></td></tr>
<tr><td><input type="submit" name="submit"  value="submit" onclick="displayone()" id="f"></td></tr>

<input type="button" onclick="display()" value="click me" id="g">
</div>
</table></fieldset></form></center>
</body>
</html>