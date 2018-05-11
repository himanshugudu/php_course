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
	echo $name ."<br>";
	echo $address ."<br>";
	echo $mobile ."<br>";
	echo $email ."<br>";
	}
}
Test();

	
	
?>
