
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" >
	<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
	
	</script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
<body>
<div class="sidenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>

<div class="main">
  <h2>Sidebar</h2>
  <p>This sidebar is of full height (100%) and always shown.</p>
  
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="bpci";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	if(isset($_POST['update']))
	{
		$id=$_POST['id'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$query="UPDATE `bpci` SET `BPCI Pillar`='".$BPCI Pillar."',`Project Name`='".$Project Name."',`Multiple Resouce Project`='".$Multiple Resouce Project."',`Assigned First Name`='".$Assigned First Name."',`Resource PM1 Start Date`='".$Resource PM1 Start Date."',`Resource-PM1 End Date`='".$Resource-PM1 End Date."',`Assigned Second Name`='".$Assigned Second Name."',`Resource PM2 Start Date`='".$Resource PM2 Start Date."',`Assigned Third Total Hrs`='".$Assigned Third Total Hrs."',`Total Project Hrs`='".$Total Project Hrs."',`Project Start Date`='".$Project Start Date."',`Target Completion`='".$Target Completion."',`Project Status`='".$Project Status."' WHERE `Project ID`=$Project ID";
		$result = $conn->query($query);
	}

	if(isset($_GET['delete']))
	{
		$query = " DELETE FROM MyGuests WHERE id='".$_GET['delete']."' ";
		$result = $conn->query($query);
	}
	

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
?>
<form method="post" action="">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>

 <th>Project ID</th>
	<th>BPCI Pillar</th>
                <th>Project Name</th>
               <!-- <th>Business Owner</th> -->
              <!--  <th>Executive Sponsor</th> -->
               <!--  <th>Approval Status</th> -->
                <!--<th>Lead</th> -->
                <th>Multiple Resouce Project</th>
                <th>Assigned First Name</th>
                <th>Resource PM1 Start Date</th>
                <th>Resource-PM1 End Date</th>
                <th>Assigned First Total Hrs</th>
               <th>Assigned Second Name</th>
                <th>Resource PM2 Start Date</th>
                <th>Resource PM2 End date</th>
                <th>Assigned Second Total Hrs</th>
                <th>Assigned Third Name</th>
                <th>Resource PM3 Start Date</th>
                <th>Resource PM3 End Date</th>
                <th>Assigned Third Total Hrs</th>
                <th>Total Project Hrs</th>
                <th>Project Start Date</th>
                <th>Target Completion</th>
                <th>Project Status</th> 
            				<th>Action</th>
            </tr>
        </thead>      
<tbody>
<?php
    while($row = $result->fetch_assoc()) 
	{
		?>
		
        <tr>
			<td><p style="display:none"><input type="text" name="Project ID" value="<?php echo $row['Project ID'] ?>"></p><?php echo $row['Project ID'] ?></td>
			
<td><input type="text" name="BPCI Pillar" value="<?php echo $row["BPCI Pillar"] ?>"><p style="display:none"><?php echo $row['BPCI Pillar] ?></p></td>
<td><input type="text" name="Project Name" value="<?php echo $row["Project Name"] ?>"><p style="display:none"><?php echo $row['Project Name'] ?></p></td>
<td><input type="text" name="Multiple Resouce Project" value="<?php echo $row["Multiple Resouce Project"] ?>"><p style="display:none"><?php echo $row['Multiple Resouce Project'] ?></p></td>
<td><input type="text" name="Assigned First Name" value="<?php echo $row["Assigned First Name"] ?>"><p style="display:none"><?php echo $row['Assigned First Name'] ?></p></td>
<td><input type="text" name="Resource PM1 Start Date" value="<?php echo $row["Resource PM1 Start Date"] ?>"><p style="display:none"><?php echo $row['Resource PM1 Start Date'] ?></p></td>
<td><input type="text" name="Resource-PM1 End Date" value="<?php echo $row["Resource-PM1 End Date"] ?>"><p style="display:none"><?php echo $row['Resource-PM1 End Date'] ?></p></td>
<td><input type="text" name="Assigned First Total" value="<?php echo $row["Assigned First Total"] ?>"><p style="display:none"><?php echo $row['Assigned First Total'] ?></p></td>
<td><input type="text" name="Assigned Second Name" value="<?php echo $row["Assigned Second Name"] ?>"><p style="display:none"><?php echo $row['Assigned Second Name'] ?></p></td>
<td><input type="text" name="Resource PM2 Start Date" value="<?php echo $row["Resource PM2 Start Date"] ?>"><p style="display:none"><?php echo $row['Resource PM2 Start Date'] ?></p></td>
<td><input type="text" name="Resource PM2 End date" value="<?php echo $row["Resource PM2 End date"] ?>"><p style="display:none"><?php echo $row['Resource PM2 End date'] ?></p></td>
<td><input type="text" name="Assigned Second Total Hrs" value="<?php echo $row["Assigned Second Total Hrs"] ?>"><p style="display:none"><?php echo $row['Assigned Second Total Hrs'] ?></p></td>
<td><input type="text" name="Assigned Third Name" value="<?php echo $row["Assigned Third Name"] ?>"><p style="display:none"><?php echo $row['Assigned Third Name'] ?></p></td>
<td><input type="text" name="Resource PM3 Start Date" value="<?php echo $row["Resource PM3 Start Date"] ?>"><p style="display:none"><?php echo $row['Resource PM3 Start Date'] ?></p></td>
<td><input type="text" name="Resource PM3 End Date" value="<?php echo $row["Resource PM3 End Date"] ?>"><p style="display:none"><?php echo $row['Resource PM3 End Date'] ?></p></td>
<td><input type="text" name="Assigned Third Total Hrs" value="<?php echo $row["Assigned Third Total Hrs"] ?>"><p style="display:none"><?php echo $row['Assigned Third Total Hrs'] ?></p></td>
<td><input type="text" name="Total Project Hrs" value="<?php echo $row["Total Project Hrs"] ?>"><p style="display:none"><?php echo $row['Total Project Hrs'] ?></p></td>
<td><input type="text" name="Project Start Date" value="<?php echo $row["Project Start Date"] ?>"><p style="display:none"><?php echo $row['fProject Start Date'] ?></p></td>
<td><input type="text" name="Target Completion" value="<?php echo $row["Target Completion"] ?>"><p style="display:none"><?php echo $row['Target Completion'] ?></p></td>
<td><input type="text" name="Project Status" value="<?php echo $row["Project Status"] ?>"><p style="display:none"><?php echo $row['Project Status'] ?></p></td>

			<td>
				<input type="submit" name="update" value="update">
				<a href ="display.php?delete=<?php echo $row['Project ID'];?>">delete</a>
				
			</td>
			
 		</tr>
<?php		
    }
?>
</tbody>
</table>
</form>
<?php
	} else {
		echo "0 results";
	}
	
?>
</div>
</body>

</html>


