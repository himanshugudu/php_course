<html>
	
<head>
		
<title>form method</title>

</head>

<body>

<form method="get">
	<h2>Select Your car</h2>
	<table border="1" align="center">
		<tr>
			<td>Select Your car</td>
			<td>
				<Select name="selType">
					<option value="porsche 911">Porsche 911</option>
					<option >Volkswagen Beetle</option>
					<option value="Ford Taurus">Ford Taurus</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Color:</td>
			<td>
				<input type="text" name="txtColor"/>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit"/>
			</td>
		</tr>
	</table>
</form>
</body>
</html>


<?php
  
error_reporting(1);
  
$type=$_REQUEST['selType'];
  
$color=$_REQUEST['txtColor'];
  
echo "<font color='blue'>Your $color $type is ready. safe driving! </font>";

?>