<html>
<head> the beast
</head>
<body><center>
<form method="POST" action="b.php">
id:<input type="text" name="id"> </br></br>
  name:<input type="text" name="name"> </br></br>
  
address:<input type="text" name="address"> </br></br>

mobile:<input type="text" name="mobile"> </br></br>

email:<input type="text" name="email"></br> </br></br>

<input type="submit" name="save"></br></br>
<input type= "submit" name = "edit" value="Edit!">
</center>
<?php
$database_name="beast";
$host_name="localhost";
$host_user="root";
$pwd="";
$connection=mysqli_connect($host_name, $host_user, $pwd);
mysqli_select_db($connection,$database_name) or mysqli_error($connection);
if(!$connection)
{
	die("CONNETION FAIL".mysqli_connect_error());
}
echo "connected succesfully";
?>
<table border="2">
<thead>
<th>id</th>
<th>name</th>
<th>address</th>
<th>mobile</th>
<th>email</th>
<th>delete</th> 
</thead>
<?php
		
		

		
		if(isset($_GET['delete_id']))
		{
			$query = "DELETE FROM brock WHERE id= '".$_GET['delete_id']."' ";
			$result=mysqli_query($connection,$query);
		}
		
		
		$query="select * from brock";
		$result=mysqli_query($connection,$query);
		while($row=mysqli_fetch_array($result))
		{
	
?>

<tr>
<td><?php echo $row ['id'];?></td>
<td><input type="text" value="<?php echo $row ['name'];?>"/> </td>
<td><input type="text" value="<?php echo  $row ['address'];?>"/> </td>
<td><input type="text" value="<?php echo  $row ['mobile'];?>"/> </td>
<td><input type="text" value="<?php echo  $row ['email'];?>"/> </td>
<td><a href="d.php?delete_id=<?=$row["id"];?>">delete</a></td>
<td></td>
</tr> 

 <?php }?>

</table>
</form>
</body>
</html>