
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="bpci";
$conn = mysqli_connect($servername, $username, $password ,$db);
print_r($conn);
if (!empty($conn))
  {
die('Could not connect: ' . mysql_error());
  



$query = "select * from resourcemgmt where projectid=$projectid";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);

print_r($row);
 

echo "<table border ='1px'>" ;
while ($row=mysql_fetch_array($result))
	{
		//lead and multipleproject
	$lead =$row[6];
	$Multiple_Resouce_Project=$row[7];

	//first resource name
	$Assigned_First_Name=$row[9];
	$Resource_PM1_Start_Date=$row[10];
	$Resource_PM1_End_Date=$row[11];
	$Assigned_second_Total_Hrs=$row[12];

	// second resource name 
	$Assigned_second_Name=$row[12];
	$Resource_PM2_Start_Date=$row[9];
	$Resource_PM2_End_Date=$row[9];
	$Assigned_second_Total_Hrs=$row[9];

	// third resource name 
	$Assigned_second_Name=$row[2];
	$Resource_PM2_Start_Date=$row[2];
	$Resource_PM2_End_Date=$row[9];
	$Assigned_second_Total_Hrs=$row[9];

	// project information
	$Total_Project_Hrs =$row[9];
	$Total_Start_Date =$row[9];
	$Target_Completion =$row[9];
	$Project_Status=$row[9];

echo "<tr>";
echo "<td> {$lead}</td>";
echo "<td> {$Multiple_Resouce_Project}</td>";
echo "<td>{$Assigned_First_Name} </td>";
echo "<td>{$Resource_PM1_Start_Date} </td>";
echo "<td>{$Resource_PM1_End_Date}</td>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td> </td>";

echo"</tr>";

echo "</table>";
	}


}else{ 
echo ("connection issue");	
}





// $conn = new mysqli($servername, $username, $password ,$db);
// if (!$conn)
  // {

  // die('Could not connect: ' . mysql_error());
  // }
// if(isset($_POST['submit']))
// {
	// $a =$_POST['name'];
	// $b =$_POST['city'];
	// $sql="INSERT INTO direc (name,city)
	// VALUES
	// ('$a','$b')";

	// if (!mysqli_query($conn,$sql))
	  // {

	  // die('Error: ' . mysql_error());
	  // }
	// echo "1 record added";
// }



?>
