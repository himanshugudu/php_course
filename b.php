<?php
	include 'db.php';
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
  <form action="b.php" method="post">
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