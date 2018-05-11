<html>
<head>
the beast
</head>4
<body><center>

<form method="POST" action="#">
  name:<input type="text" name="name"> </br></br>
  
address:<input type="text" name="address"> </br></br>

mobile:<input type="text" name="mobile"> </br></br>

email:<input type="text" name="email"></br> </br></br>

<input type="submit" name="submit"></br></br>


</form></center>


<?php
	include 'db.php';
	$name=$_POST ['name'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	function Test(){
		global $connection,$name, $address,$mobile,$email;
		if(isset($_POST['submit']))
		{
		$query="INSERT INTO brock (name,address,mobile,email) values('$name','$address','$mobile','$email')";
		$result=mysqli_query($connection,$query);
		
		}
	}
	Test();
	if(isset($_GET['delete_id']))
		{
			$query = "DELETE FROM brock WHERE id= '".$_GET['delete_id']."' ";
			$result=mysqli_query($connection,$query);
		}
	if(isset($_POST['update']))
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
	
		  $query = "UPDATE `brock` SET `name`='".$name."',`address`='".$address."',`mobile`='".$mobile."',`email`='".$email."' WHERE `id` = $id";
   
		   $result = mysqli_query($connection, $query);
		   
		   if($result)
		   {
			   echo 'Data Updated';
		   }else{
			   echo 'Data Not Updated';
		   }
		   
		}
		
	$query="select * from brock";
	$result=mysqli_query($connection,$query);
	while($row=mysqli_fetch_array($result))
		{
?>
  <form action="#" method="post">
<table>
	<td><input type="text" name="id" value="<?php echo $row ['id'];?>" ></td>
	
	<td><input type="text" name="name" value="<?php echo $row ['name'];?>"/> </td>
	<td><input type="text" name="address"value="<?php echo $row ['address'];?>"/> </td>
	<td><input type="text" name="mobile" value="<?php echo $row ['mobile'];?>"/> </td>
	<td><input type="text" name="email" value="<?php echo $row ['email'];?>"/> </td>
	<td><a href="b.php?delete_id=<?=$row["id"];?>">delete</a></td>
	<td><input type="submit" name="update" value="Update Data"></td>
	
</table>
</form>
<?php } ?>
</body>
</html>


